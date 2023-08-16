<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Paystack;
use App\Models\Gallery;
use App\Models\checkout;
use App\Models\Order;

class CheckoutController extends Controller
{
    public function index(){
        // Retrieve cart data
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
        $cartItems = Cart::content();
        if ($cartItems->isEmpty()) {
            // Redirect back to the cart page
            return redirect()->route('cart')->with('error', 'Your cart is empty. Add items to proceed to checkout.');
        } 
        $orderNumber =  str_pad(mt_rand(1, 999999  ), 6, '0', STR_PAD_LEFT);
        foreach( $cartItems as $items){
            Order::create([
                'order_number' =>  $orderNumber,
                'product_name' => $items->model->productname,
                'product_amount' => $items->model->productamount,
                'product_qty' => $items->qty,
                'total' =>  $items->price * $items->qty,
            ]);
        }

        // Check if cart is empty

        return view('pages.user.checkout', compact('cartItems', 'orderNumber','sixItemsgallery'));
    }

    public function store(Request $request){
 
        $item = Order::whereOrderNumber($request->orderNo)->get();
        $amount = Order::whereOrderNumber($request->orderNo)->sum('total');
      
        Checkout::create([
            'order_number' => $item[0]->order_number,
            'Fname' => $request->Fname, 
            'Lname' => $request->Lname,
            'Cname' => $request->Cname,
            'country' => $request->country,
            'Orderoption' => $request->Orderoption,
            'inputAddress' => $request->inputAddress,
            'differentaddress' => $request->differentaddress,
            'inputAddress2' => $request->inputAddress2,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode'=> $request->zipcode,
            'pnumber' => $request->pnumber,
            'email' => $request->email,
           // 'product_name' => $productname,
           // 'product_amount' => $productamount,
            'subtotalamount' => $item->sum('total'),
            'totalamount' => $item->sum('total'),
        ]);
       

        // Initialize Paystack
        $paystack = new Paystack();
        
        try{
            $data = array(
                "amount" => $item->sum('total') * 100,
                "metadata" => array(
                   'fullname' => '',
                   'subtotal' => $item->sum('total'),
                   'service' => 'DedicatedPlan',
                   'payment_options' => 'Paystack',
                   "phone_number" => '',
                ),
                
                "reference" => Paystack::genTranxRef() ,
                "email" => $request->email,
                "currency" => "NGN",
                "orderID" => $item[0]->order_number,
            );
            $pay = Paystack::getAuthorizationUrl($data)->redirectNow();
            Cart::destroy();
           // dd($pay);
            return $pay; 
        }catch(\Exception $e) {
            dd($e);
          return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

     /**

     * Obtain Paystack payment information

     * @return void

     */

     public function handleGatewayCallback(){
        $paymentDetails = Paystack::getPaymentData();
        dd($paymentDetails);
        //Cart::destroy();
        // $payment = new PaymentResidentialModel();
        // $payment->paymentoption = $paymentDetails['data']['metadata']['payment_options'];
        // $payment->fullname = $paymentDetails['data']['metadata']['fullname'];
        // $payment->plan = $paymentDetails['data']['metadata']['plan'];
        // $payment->service = $paymentDetails['data']['metadata']['service'];
        // $payment->email = $paymentDetails['data']['customer']['email'];
        // $payment->phone = $paymentDetails['data']['metadata']['payment_options'];
        // $payment->status = $paymentDetails['data']['status'];
        // $payment->amount = $paymentDetails['data']['amount'];
        // $payment->trans_id = $paymentDetails['data']['id'];
        // $payment->ref_id = $paymentDetails['data']['reference'];
        // $payment->save();

        if($payment->save()){
        // echo "Transaction Successful";
            return view('success');
        }else{
            echo "Failed Transaction!";
        }
        
    }
}

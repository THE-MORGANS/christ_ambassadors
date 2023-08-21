<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Paystack;
use App\Models\Gallery;
use App\Models\checkout;
use App\Models\Order;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

class CheckoutController extends Controller
{
    public function index(){
        $cartItems = Cart::content();
        if ($cartItems->isEmpty()) {
            return redirect()->route('ecommerce'); // Redirect to the home route
        }
        // Retrieve cart data
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
       
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
       // $paystack = new Paystack();
        
       try{
            //Stripe::setApiKey(config('services.stripe.secret'));
            
            // $data = array(
            //     "amount" => $item->sum('total') * 100,
            //     "metadata" => array(
            //         'Fname' => $request->Fname, 
            //         'Lname' => $request->Lname,
            //         'Cname' => $request->Cname,
            //         'country' => $request->country,
            //         'Orderoption' => $request->Orderoption,
            //         'inputAddress' => $request->inputAddress,
            //         'differentaddress' => $request->differentaddress,
            //         'inputAddress2' => $request->inputAddress2,
            //         'city' => $request->city,
            //         'state' => $request->state,
            //         'zipcode'=> $request->zipcode,
            //         'pnumber' => $request->pnumber,
            //         'email' => $request->email,
            //         'country' => $request->country,
            //         'subtotal' => $item->sum('total'),
            //         'totalamount' => $item->sum('total'),
            //     ),
                
            //     "reference" => Paystack::genTranxRef() ,
            //     "email" => $request->email,
            //     "currency" => "NGN",
            //     "orderID" => $item[0]->order_number,
            // );
            //$pay = Paystack::getAuthorizationUrl($data)->redirectNow();
            // Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // $customer = Stripe\Customer::create(
            //     array(
            //     "address" => [
            //         'Fname' => $request->Fname, 
            //         'Lname' => $request->Lname,
            //         'Cname' => $request->Cname,
            //         'country' => $request->country,
            //         'Orderoption' => $request->Orderoption,
            //         'inputAddress' => $request->inputAddress,
            //         'differentaddress' => $request->differentaddress,
            //         'inputAddress2' => $request->inputAddress2,
            //         'city' => $request->city,
            //         'state' => $request->state,
            //         'zipcode'=> $request->zipcode,
            //         'pnumber' => $request->pnumber,
            //         'email' => $request->email,
            //         'country' => $request->country,
            //         'subtotal' => $item->sum('total'),
            //         'totalamount' => $item->sum('total'),
            //         "orderID" => $item[0]->order_number,
            //     ],
            //     'email' => $request->email,
            //     "source" => $request->stripeToken
            // ));
            // Stripe\Charge::create ([
            //     "amount" => 100 * 100,
            //     "currency" => "usd",
            //     "customer" => $customer->id,
            //     "description" => "Test payment from itsolutionstuff.com.",
            //     "shipping" => [
            //       "name" => "Jenny Rosen",
            //       "address" => [
            //         "line1" => "510 Townsend St",
            //         "postal_code" => "98140",
            //         "city" => "San Francisco",
            //         "state" => "CA",
            //         "country" => "US",
            //       ],
            //     ]
            // ]); 
            // $charge = Charge::create([
            //     'amount' => $request->amount,
            //     'currency' => 'usd', // Change to your currency
            //     'source' => $request->stripeToken,
            // ]);

            // Handle successful payment
            // You can update your database, send email, etc.
            
    
           // return redirect()->away($session->url);
            return redirect()->back()->with('success', 'Payment was successful.'); 
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Handle payment failure
            return redirect()->back()->with('error', 'Payment failed: ' . $e->getMessage());
        }
    }
    public function success()
    {
        return redirect()->back()->with('success', 'Payment was successful.'); 
        //return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
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

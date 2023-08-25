<?php

namespace App\Http\Controllers;
use Paystack;
use Omnipay\Omnipay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use App\Models\checkout;
use App\Models\Order;
use App\Models\Payment;
use Cart;

class PaymentController extends Controller 
{
    private $gateway;

    public function __construct() {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request){
        $item = Order::whereOrderNumber($request->orderNo)->get();
        $amount = Order::whereOrderNumber($request->orderNo)->sum('total');
       // dd($request);
        Checkout::create([
            'order_number' => $item[0]->order_number,
            'Fname' => $request->Fname, 
            'Lname' => $request->Lname,
            'inputAddress' => $request->inputAddress,
            'city' => $request->city,
            'state' => $request->state,
            'zipcode'=> $request->zipcode,
            'email' => $request->email,
            'pnumber' => $request->pnumber,
            'country' => $request->country,
            'subtotalamount' => $item->sum('total'),
            'totalamount' => $item->sum('total'),
        ]);

        $fname = $request ->fname;
        try{
            $response = $this->gateway->purchase(
                array(
                'amount' => $item->sum('total'),
                'subtotalamount' => $item->sum('total'),
                'inputAddress' => $request->inputAddress,
                'currency' => env('PAYPAL_CURRANCY'),
                'order_number' => $item[0]->order_number,
                'returnUrl' => url('success'),
                'cancelUrl' => url('error')
            ))->send();

            if ($response->isRedirect()) {
                $response->redirect();
            }
            else{
             
                return $response->getMessage();
            }
        }catch(\Throwable $th) {
            return $th->getMessage();
           // dd($e);
        // Flash a success message to the session
        // Session::flash('error', 'The paystack token has expired. Please refresh the page and try again.');
        //   return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    public function success(Request $request)
    {
        //dd($request);
        if ($request->input('paymentId') && $request->input('PayerID')) {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
                'orderNumber' => $request->input('paymentId')
            ));

            $response = $transaction->send();

            if ($response->isSuccessful()) {

                $arr = $response->getData();
               // dd($arr);
                Cart::destroy();
                $payment = new Payment();
              //  $payment->order_number = $arr['id'];
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->first_name = $arr['payer']['payer_info']['first_name'];
                $payment->last_name = $arr['payer']['payer_info']['last_name'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYPAL_CURRANCY');
                $payment->payment_status = $arr['state'];

                $payment->save();

                // return "Payment is Successfull. Your Transaction Id is : " . $arr['id'];
                return view('pages.user.success');
   
            }
            else{
                return $response->getMessage();
            }
        }
        else{
            return 'Payment declined!!';
        }
    }

    public function errorpayment()
    {
       // return 'User declined the payment!'; 
        return view('pages.user.error');  
    }

    public function handleGatewayCallback(){ $cartItems = [];

        foreach (Cart::content() as $cartItem) {
            $cartItems[] = [
                'product_name' => $cartItem->name,
                'product_price' => $cartItem->price,
                // Add other columns and values as needed
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('payment_items')->insert($cartItems);

        // Optionally, you can clear the cart after saving the items
        Cart::destroy();
        $paymentDetails = Paystack::getPaymentData();
      // dd($paymentDetails);
    }
}

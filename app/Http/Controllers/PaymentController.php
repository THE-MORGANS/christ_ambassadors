<?php

namespace App\Http\Controllers;
use Paystack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller 
{
    public function index(Request $request){
        $fname = $request ->fname;
        try{
            $data = array(
                "amount" => 30000 * 100,
                "metadata" => array(
                   'fullname' => 'Fullname',
                   'plan' => 'NokFlex',
                   'service' => 'ResidentialPlan',
                   'payment_options' => 'Paystack',
                   "phone_number" => 'phone',
                ),
                
                "reference" => Paystack::genTranxRef() ,
                "email" => 'email',
                "currency" => "NGN",
                "orderID" => 23456,
            );
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
           // dd($e);
        // Flash a success message to the session
        Session::flash('error', 'The paystack token has expired. Please refresh the page and try again.');
          return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
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
       dd($paymentDetails);
    }
}

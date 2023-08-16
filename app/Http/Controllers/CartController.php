<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Cart;
use Response;

class CartController extends Controller
{
    public function index(Request $request){
        $product = Product::whereId($request ->id)->first();
        
       
        Cart::add([
            'id' => $product->id,
            'price' => $product->productamount,
            'name' => $product->productname, 
            'qty' => 1   
        ])->associate('App\Models\Product');
        
        session()->flash('success_message', 'Product added to cart successfully!');
        return response()->json([ 'item'=> 'Product added to cart successfully!']);
    }

    public function getCartContent(Request $request)
    {
        //$cartContent = Cart::content();
        //return response()->json(['cartcontent' =>  $cartContent]);
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
        $product = Product::where('id', $request->id)->get();
        $cartContent = Cart::content();
        return view('pages.user.cart', ['cartContent' => $cartContent, 'product' => $product,'sixItemsgallery'=>$sixItemsgallery]);
    }

    public function destroy(Request $request){
        $tem = $request->item;
       // dd($item);
        Cart::remove($tem);
       session()->flash('success_m', 'Item has been removed!');
        //return response()->json(['success'=>'Laravel ajax example is being processed.']);
        return response()->json([ 'item'=> 'Item has been removed!']);
       
    }

    public function updateQuantity(Request $request){
        
        $cartItemId = $request->cartItemId;
        $quantity = $request->quantity;

        // Update the cart item quantity
        Cart::update($cartItemId, $quantity);
        session()->flash('success_message', '');
        return response()->json(['message' => 'Cart item quantity updated successfully']);
    }

}

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 


// Route::get('/')
Route::controller(AuthController::class)->group(function(){
    Route::post("adminlogin", "adminlogin");
    Route::get('logout', 'logout');
   
});

Route::get('/blog/details/{encrypted_id}', [ViewController::class, 'show'])->name('blog_detail');
Route::controller(ViewController::class)->group(function(){ 
   Route::get('/', 'index')->name('index');
   Route::get('paystack/{ref}', 'paystack_verify');
   Route::get('blogs', 'blogs')->name('blogs');
   Route::post('search', 'search');
   Route::get('aboutus', 'aboutus')->name('aboutus');
   Route::get('podcast', 'podcast');
   Route::get('blog', 'blog')->name('blog');
  // Route::get('blog/details/{encrypted_id}', 'blog_detail')->name('blog_detail');
   Route::post('submit_comment', 'submitComment')->name('submit_comment');
   Route::post('submit_reply', 'submitReply')->name('submit_reply');
   Route::get('ecommerce', 'ecommerce')->name('ecommerce');
   Route::get('event', 'event')->name('event');
   Route::get('gallery', 'gallery')->name('gallery');
   Route::get('contactus', 'contactus')->name('contactus');
   Route::get('supportus', 'supportus')->name('supportus');
   Route::get('activities', 'activities')->name('activities');
    //Team
    Route::get('team-01', 'team01')->name('team01');
    Route::get('team-02', 'team02')->name('team02');
    

});
 

Route::controller(CartController::class)->group(function(){
     //Cart
    Route::post('cart/add', 'index')->name('cart.add');
    Route::get('cart', 'getCartContent')->name('getCartContent');
    Route::post('deletecart', 'destroy')->name('cart.delete');
    Route::post('updatecart', 'updateQuantity')->name('cart.updatequantity');
});
 
Route::controller(CheckoutController::class)->group(function(){
    //Checkout
   Route::get('checkout/summary/', 'index')->name('cart.checkout');
   Route::post('storecheckout/', 'store')->name('checkout.store');
   //Payment Callback
    Route::get('/payment/callback',  'handleGatewayCallback');
  
});

Route::controller(PaymentController::class)->group(function(){
    Route::post('payment', 'pay')->name('payment');
    Route::get('success', 'success');
    Route::get('error', 'errorpayment');
    //Payment Callback
    Route::get('checkout',  'handleGatewayCallback');

});

Route::controller(AdminController::class)->group(function(){
   
    Route::get('admin', 'index');
    Route::post('adminlogin', 'adminlogin');
    Route::get('adminhome', 'home');
    Route::get('homebanner', 'homebanner');
    //Ecommerce
    Route::get('admin.ecommerce', 'ecommerce')->name('admin.ecommerce');
    Route::post('postecommerce', 'postecommerce')->name('postecommerce');
    Route::get('edit-product', 'editecommerce')->name('edit-product');
    Route::post('update-product', 'updateecommerce')->name('update-product');
    Route::get('delete-product', 'deleteecommerce')->name('delete-product');
    // Blog
    Route::get('admin.blog', 'blog')->name('admin.blog');
    Route::post('create_blog', 'createblog')->name('create_blog');
    Route::get('edit-blog', 'editblog')->name('edit-blog');
    Route::post('update-blog', 'updateblog')->name('update-blog');
    Route::get('delete-blog', 'deleteblog')->name('delete-blog');
    
    // Events
    Route::get('admin.event', 'event')->name('admin.event');
    Route::post('post.event', 'postevent')->name('post.event');
    Route::get('edit-event', 'editevent')->name('edit-event');
    Route::post('update-event', 'updateevent')->name('update-event');
    Route::get('delete-event', 'deleteevent')->name('delete-event');
    //Gallery
    Route::get('admin.gallery', 'gallery')->name('admin.gallery');
    Route::post('post.gallery', 'postgallery')->name('post.gallery');
    Route::get('edit-gallery', 'editgallery')->name('edit-gallery');
    Route::post('update-gallery', 'updategallery')->name('update-gallery');
    Route::get('delete-gallery', 'deletegallery')->name('delete-gallery'); 

    //Podcast
    Route::get('admin-podcast', 'podcast')->name('admin.podcast');
    Route::post('post.podcast', 'postpodcast')->name('post.podcast');
    Route::get('adminlogout', 'logout')->name('logout');
    });

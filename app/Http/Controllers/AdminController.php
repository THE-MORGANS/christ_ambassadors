<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\adminlogin;
use App\Http\Requests\adminreg;
use App\Models\User;
use App\Models\Product;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Podcast;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class AdminController extends Controller
{
    
   public function index(){
    return view('pages.admin.login');
   }


   public function adminlogin(Request $request){
       $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:5'
        ],[
            'email.required' => 'Enter your email address',
            'email.email' => 'Invalid email address',
            'email.exists' => 'This email is not registered in database',
            'password.required' => 'Password is required'
       ]);
       $creds = array('email'=>$request->email, 'password'=>$request->password);
        if(Auth::guard('web')->attempt($creds)){

             $checkUser = User::where('email', $request->email)->first();
             if($checkUser->blocked == 1){
                 Auth::guard('web')->logout();
                 return redirect('admin')->with('fail', 'Your account had been blocked.');
             }else{
                 return redirect('adminhome');
             }
        }else{
            return redirect()->back()->withError('Incorrect email or password ');
        }
   }

    public function home(){
        if (!Auth::check()) {
            return redirect('/admin'); // Change this to your desired home page URL
        }
        return view('pages.admin.home');
    }

    public function homebanner(){
        if (!Auth::check()) {
            return redirect('/admin'); // Change this to your desired home page URL
        }
        return view('pages.admin.homepage.homebanner');
    } 
 
    public function ecommerce(){
        if (!Auth::check()) {
            return redirect('/admin'); // Change this to your desired home page URL
        }
        
        return view('pages.admin.ecommerce.index');
    }

    public function postecommerce(Request $request){
        $request->validate([
            'productname' => 'required|unique:products,productname',
            'productamount' => 'required',
            'productimage' => 'required|image|mimes:jpeg,png,jpg|max:3024',
        ],[
            'productname.required' => 'The Product Name is required',
            'productname.unique' => 'This Product Name has already been taken',
            'productdiscount' => 'The Product Discount is required',
            'productimage.required' => 'Upload the Product format jpeg, jpg, png'
        ]);
        // Get the uploaded file from the request
        $uploadedImage = $request->file('productimage');

        // Generate a unique name for the image using a timestamp and original extension
        $productimage = time() . '.' . $uploadedImage->getClientOriginalExtension();

        // Use Intervention Image to resize and save the image to the public directory
        $image = Image::make($uploadedImage->getRealPath());
        $image->resize(300, 200); // You can customize the size as per your requirements
        $image->save(public_path('assets/products/' . $productimage)); // Save the image to the public/images directory
 

        $post = new Product();
        $post->admin_id =  auth()->id();
        $post->productname = $request->productname;
        $post->productamount = $request->productamount;
        $post->productdiscount = $request->productdiscount;
        $post->productimage = 'products/' . $productimage;
        $post->status = 1;
        $saved = $post->save(); 

        if($saved){
            return redirect()->back()->withSuccess('New post has been successfully created. ');
        }else{
            return redirect()->back()->withSuccess('Somthing went wrong in saving post data.');
            
        }
    }

    public function editecommerce(Request $request){
       
        //dd(request()->product_id);
        if(!request()->product_id){
            return abort(404);
        }else{
            $product = Product::find(request()->product_id);
            $data = [
                'product' => $product,
                'pageTitle' => 'Edit Product',
            ];
            return view('pages.admin.ecommerce.edit_product', $data);
        }
    }
 
    public function updateecommerce(Request $request){
      
       // dd($request->product_id);
       if ($request->hasFile('productimage')) {
        $request->validate([
            'productname' => 'required',
            'productamount' => 'required',
            'productimage' => 'required|image|mimes:jpeg,jpg,png|max:4024',
        ], [
            'productname.exists' => 'The Product Name already exists',
            'productimage.required' => 'Please select an image to upload.',
        ]);
    
        $upload = Product::find($request->product_id);
        if (!$upload) {
            return redirect()->back()->withError('Product not found.');
        }
    
        // Delete the existing image if it exists
        if (!empty($upload->productimage)) {
            $existingImagePath = public_path('assets/products/') . $upload->productimage;
            if (file_exists($existingImagePath)) {
                unlink($existingImagePath);
            }
        }
    
        $uploadedImage = $request->file('productimage');
    
        // Generate a unique name for the image using a timestamp and original extension
        $productimage = time() . '.' . $uploadedImage->getClientOriginalExtension();
    
        // Use Intervention Image to resize and save the image to the public directory
        $image = Image::make($uploadedImage->getRealPath());
        $image->resize(300, 200); // You can customize the size as per your requirements
        $image->save(public_path('assets/products/' . $productimage)); // Save the image to the public/assets/products directory
    
        // Update the product's image name in the database
        $upload->productimage = 'products/'. $productimage;
        $upload->productname = $request->productname;
        $upload->productamount = $request->productamount;
        $update = $upload->save();
    
        if ($update) {
            return redirect('admin.ecommerce')->with('success', 'Product information and image have been successfully updated.');
        } else {
            return redirect()->back()->with('error', 'Something went wrong while updating the product.');
        }
    } 
    else{
            $request->validate([
                'productname' => 'required|unique:products,productname,'.$request->product_id,
                'productamount' => 'required',
            ]);

            $update = Product::where('id', $request->product_id)->update([
                'admin_id' => auth()->id(),
                'productname' =>  $request->productname,
                'productamount' =>  $request->productamount,
                'productdiscount' => $request->productdiscount,
            ]); 
            if($update){
                return redirect('admin.ecommerce')->withSuccess('Product has been successfully updated. ');
            }else{
                return redirect()->back()->withError('Something went wrong for updating post. ');
            }

        }
    }

    public function deleteecommerce(Request $request){
      
        Product::find($request->product_id)->delete();
        return redirect()->back()->withSuccess('Product Deleted ');
    }

    public function blog(){
        if (!Auth::check()) {
            return redirect('/admin'); // Change this to your desired home page URL
        }
        return view('pages.admin.blog.index');
    }

    public function createblog(Request $request){
        $request->validate([
            'post_title' => 'required|unique:blogs,posttitle',
            'post_content' => 'required',
            'post_shortwriteup' => 'required',
            'reference' => 'required',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg|max:3024',
        ],[
            'post_title.required' => 'The Post title is required.',
            'post_title.unique' => 'The Post Title has been taken.',
            'post_content.required' => 'The Post Content is required',
            'post_shortwriteup' => 'The Short write up is required',
            'reference' => 'The Reference is required',
            'featured_image.required' => 'Upload the correct format jpeg, jpg, png'
        ]);
        if ($request->hasFile('featured_image')) {
          
            //Get the uploaded file from the request
            $image = $request->file('featured_image');

            // Generate a unique name for the image using a timestamp and original extension
            $postimage = time() . '.' . $image->getClientOriginalExtension();
  
            //Use Intervention Image to resize and save the image to the public directory
            $image = Image::make($image->getRealPath());
            $image->resize(760, 507); // You can customize the size as per your requirements
            $image->save(public_path('assets/blogs/' . $postimage)); // Save the image to the public/images directory
             
        }
        
        $post = new Blog();
        $post->admin_id =  auth()->id();
        $post->posttitle = $request->post_title;
        $post->shortwriteup = $request->post_shortwriteup;
        $post->content = $request->post_content;
        $post->reference = $request->reference;
        $post->author = $request->reference;
        $post->featured_image = 'blogs/' . $postimage;
        $post->status = 1;
        $saved = $post->save(); 

        if($saved){
            return response()->json(['code'=>1, 'msg'=>'New Blog has been successfully created.']);
            //return redirect()->back()->withSuccess('New Blog has been successfully created. ');
        }else{
            return response()->json(['code'=>3, 'msg'=>'Somthing went wrong in saving blog data.']);
          // return redirect()->back()->withSuccess('Somthing went wrong in saving blog data.');
        }
    }

    public function editblog(Request $request){
        if(!request()->blog_id){
            return abort(404);
        }else{
            $blog = Blog::find(request()->blog_id);
            $data = [
                'blog' => $blog,
                'pageTitle' => 'Edit Blog',
            ];
            return view('pages.admin.blog.edit_blog', $data);
        }
    }
    
    public function updateblog(Request $request){
        //dd($request->product_id);
        if($request->hasFile('featured_image')){
            $request->validate([
                'post_title' => 'required',
                'post_content' => 'required',
                'post_shortwriteup' => 'required',
                'post_category' => 'required',
                'reference' => 'required',
                'featured_image' => 'required|image|mimes:jpeg,png,jpg|max:3024',
            ],[
                'post_title.required' => 'The Post title is required.',
                'post_content.required' => 'The Post Content is required',
                'post_shortwriteup.required' => 'The Post Content is required',
                'post_category' => 'The Post Category is required',
                'reference' => 'The Reference is required',
                'featured_image.required' => 'Upload the correct format jpeg, jpg, png'
            ]);

            if ($request->hasFile('featured_image')) {

                $image = $request->file('featured_image');
                $postimage = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/blogs', $postimage);

                $upload = Blog::find($request->blog_id);
                if (!$upload) {
                    return redirect()->back()->withError('Blog not found.');
                }
            
                // Delete the existing image if it exists
                if (!empty($upload->gallery_image)) {
                    $existingImagePath = public_path('assets/blogs/') . $upload->postimage;
                    if (file_exists($existingImagePath)) {
                        unlink($existingImagePath);
                    }
                }
            
                $uploadedImage = $request->file('featured_image');
                // Generate a unique name for the image using a timestamp and original extension
                $postimage = time() . '.' . $uploadedImage->getClientOriginalExtension();
                // Use Intervention Image to resize and save the image to the public directory
                $image = Image::make($uploadedImage->getRealPath());
                $image->resize(600, 400); // You can customize the size as per your requirements
                $image->save(public_path('assets/blogs/' . $postimage)); // Save the image to the public/assets/products directory
            
            }
             // Update the product's image name in the database
            $upload->featured_image = 'blogs/'. $postimage;
            $upload->posttitle = $request->post_title;
            $upload->shortwriteup = $request->post_shortwriteup;
            $upload->content = $request->post_content;
            $upload->category = $request->post_category;
            $upload->reference = $request->reference;
            $upload->author = $request->author;
            $upload->status = 1;
            $update = $upload->save();
            if($update){
                return redirect('admin.blog')->withSuccess('Blog Image has been successfully updated. ');
            }else{
                return redirect()->back()->withError('Something went wrong for updating post. ');
            }
        }else{
            $request->validate([
                'post_title' => 'required|exists:blogs,posttitle',
                'post_content' => 'required',
                'post_category' => 'required',
                'reference' => 'required',
            ],[
                'post_title.required' => 'The Post title is required.',
                'post_title.exists' => 'The Post Title already exists',
                'post_content.required' => 'The Post Content is required',
                'post_category' => 'The Post Category is required',
                'reference' => 'The Reference is required',
            ]);

            $update = Blog::where('id', $request->blog_id)->update([
                'admin_id' => auth()->id(),
                'posttitle' =>  $request->post_title,
                'shortwriteup' =>  $request->post_shortwriteup,
                'content' =>  $request->post_content,
                'category' => $request->post_category,
                'reference' => $request->reference,
                'author' => $request->reference,
                'status' => 1,
            ]);
           
            if($update){
                return redirect('admin.blog')->withSuccess('Blog has been successfully updated. ');
            }else{
                return redirect()->back()->withError('Something went wrong for updating post. ');
            }

        }
    }

    public function deleteblog(Request $request){
        Blog::find($request->blog_id)->delete();
        return redirect()->back()->withSuccess('Blog Deleted ');
    }

    public function event(){
        if (!Auth::check()) {
            return redirect('/admin'); // Change this to your desired home page URL
        }
        $events = auth()->user()->type == 1 ? Event::all() : Event::where('admin_id', auth()->id())->get();
        return view('pages.admin.event.index', compact('events'));
    }

    public function postevent(Request $request){

        if ($request->hasFile('event_image')) {
            $image = $request->file('event_image');
            $postimage = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/events', $postimage);
        }else{
            $postimage = null;
        }
       
        $uploadedImage = $request->file('event_image');

        // Generate a unique name for the image using a timestamp and original extension
        $productimage = time() . '.' . $uploadedImage->getClientOriginalExtension();

        // Use Intervention Image to resize and save the image to the public directory
        $image = Image::make($uploadedImage->getRealPath());
        $image->resize(300, 200); // You can customize the size as per your requirements
        $image->save(public_path('assets/events/' . $productimage)); // Save the image to the public/images directory


        $saved = Event::create([
            'admin_id' => auth()->id(),
            'event_title' => $request->event_title,
            'event_content' => $request->event_content,
            'event_date' => $request->event_date,
            'event_time' => $request->event_time,
            'event_venue' => $request->event_venue,
            'event_image' => 'events/' . $productimage,
            'status' => 1,
        ]);
 
        if($saved){
            return redirect()->back()->withSuccess('New Event has been successfully created. ');
        }else{
            return redirect()->back()->withSuccess('Somthing went wrong in saving blog data.');
            
        }
    }

    public function editevent(Request $request){
        if(!request()->event_id){
            return abort(404);
        }else{
            $event = Event::find(request()->event_id);
            $data = [
                'event' => $event,
                'pageTitle' => 'Edit Event',
            ];
            return view('pages.admin.event.editevent', $data);
        }
    }

     
    public function updateevent(Request $request){
        //dd($request->product_id);
        if($request->hasFile('featured_image')){
            $request->validate([
                'event_title' => 'required',
                'event_content' => 'required',
                'event_date' => 'required',
                'event_time' => 'required',
                'event_venue' => 'required',
                'featured_image' => 'required|image|mimes:jpeg,png,jpg|max:3024',
            ],[
                'event_title.required' => 'The Event title is required.',
                'event_content.required' => 'The Event Content is required',
                'event_date.required' => 'The Event Date is required',
                'event_time.required' => 'The Event Time is required',
                'event_venue' => 'The Event Venue is required',
                'featured_image.required' => 'Upload the correct format jpeg, jpg, png'
            ]);

            if ($request->hasFile('featured_image')) {

                $image = $request->file('featured_image');
                $postimage = uniqid() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/events', $postimage);

                $upload = Event::find($request->event_id);
                if (!$upload) {
                    return redirect()->back()->withError('Event not found.');
                }
            
                // Delete the existing image if it exists
                if (!empty($upload->featured_image)) {
                    $existingImagePath = public_path('assets/events/') . $upload->postimage;
                    if (file_exists($existingImagePath)) {
                        unlink($existingImagePath);
                    }
                }
            
                $uploadedImage = $request->file('featured_image');
                // Generate a unique name for the image using a timestamp and original extension
                $postimage = time() . '.' . $uploadedImage->getClientOriginalExtension();
                // Use Intervention Image to resize and save the image to the public directory
                $image = Image::make($uploadedImage->getRealPath());
                $image->resize(600, 400); // You can customize the size as per your requirements
                $image->save(public_path('assets/events/' . $postimage)); // Save the image to the public/assets/products directory
            
            }
             // Update the product's image name in the database
            $upload->event_image = 'events/'. $postimage;
            $upload->event_title = $request->event_title;
            $upload->event_content = $request->event_content;
            $upload->event_date = $request->event_date;
            $upload->event_time = $request->event_time;
            $upload->event_venue = $request->event_venue;
            $upload->status = 1;
            $update = $upload->save();
            if($update){
                return redirect('admin.event')->withSuccess('Blog Image has been successfully updated. ');
            }else{
                return redirect()->back()->withError('Something went wrong for updating post. ');
            }
        }else{
            $request->validate([
                'event_title' => 'required',
                'event_content' => 'required',
                'event_date' => 'required',
                'event_time' => 'required',
                'event_venue' => 'required',
            ],[
                'event_title.required' => 'The Event title is required.',
                'event_content.required' => 'The Event Content is required',
                'event_date.required' => 'The Event Date is required',
                'event_time.required' => 'The Event Time is required',
                'event_venue' => 'The Event Venue is required',
            ]);

            $update = Event::where('id', $request->event_id)->update([
                'admin_id' => auth()->id(),
                'event_title' =>  $request->event_title,
                'event_content' =>  $request->event_content,
                'event_date' =>  $request->event_date,
                'event_time' => $request->event_time,
                'event_venue' => $request->event_venue,
                'status' => 1,
            ]);
           
            if($update){
                return redirect('admin.event')->withSuccess('Event has been successfully updated. ');
            }else{
                return redirect()->back()->withError('Something went wrong for updating post. ');
            }

        }
    }

    public function deleteevent (Request $request){
        Event::find($request->event_id)->delete();
        return redirect()->back()->withSuccess('Event Deleted ');
    }

    public function gallery(){
        if (!Auth::check()) {
            return redirect('/admin'); // Change this to your desired home page URL
        }
        $gallery = auth()->user()->type == 1 ? Gallery::all() : Gallery::where('admin_id', auth()->id())->get();
        return view('pages.admin.gallery.index', compact('gallery'));
    }
 
    public function postgallery(Request $request){
        $request->validate([
            'galleryimage' => 'required|file|mimes:jpeg,jpg,png|max:2048',   
            'gallerytitle' => 'required',
        ]);

        if ($request->hasFile('galleryimage')) {
            // Get the uploaded file from the request
            $uploadedImage = $request->file('galleryimage');

            // Generate a unique name for the image using a timestamp and original extension
            $galleryimage = time() . '.' . $uploadedImage->getClientOriginalExtension();

            // Use Intervention Image to resize and save the image to the public directory
            $image = Image::make($uploadedImage->getRealPath());
            $image->resize(600, 401); // You can customize the size as per your requirements
            $image->save(public_path('assets/gallery/' . $galleryimage)); // Save the image to the public/images directory
           
        }else{
            $galleryimage = null;
        }
       // dd( $galleryimage);
        
        $post = new Gallery();
     //   $post->admin_id =  auth()->id();
        $post->gallerytitle = $request->gallerytitle;
        $post->gallery_image = 'gallery/'.$galleryimage;
        $saved = $post->save(); 

        if($saved){
            return redirect()->back()->withSuccess('New Gallery has been successfully created. ');
        }else{
            return redirect()->back()->withSuccess('Somthing went wrong in saving Gallery data.');
            
        }
    }

    public function editgallery(Request $request){
        if(!request()->gallery_id){
            return abort(404);
        }else{
            $gallery = Gallery::find(request()->gallery_id);
            $data = [
                'gallery' => $gallery,
                'pageTitle' => 'Edit Gallery',
            ];
            return view('pages.admin.gallery.editgallery', $data);
        }
    }

    public function updategallery(Request $request){
      
        // dd($request->product_id);
        if ($request->hasFile('galleryimage')) {
         $request->validate([
            'gallerytitle' => 'required|unique:galleries,gallerytitle,'.$request->gallery_id,
             'galleryimage' => 'required|image|mimes:jpeg,jpg,png|max:4024',
         ], [
             'gallerytitle.exists' => 'The Product Name already exists',
             'galleryimage.required' => 'Please select an image to upload.',
         ]);
     
         $upload = Gallery::find($request->gallery_id);
         if (!$upload) {
             return redirect()->back()->withError('Gallery not found.');
         }
     
         // Delete the existing image if it exists
         if (!empty($upload->gallery_image)) {
             $existingImagePath = public_path('assets/gallery/') . $upload->gallery_image;
             if (file_exists($existingImagePath)) {
                 unlink($existingImagePath);
             }
         }
     
         $uploadedImage = $request->file('galleryimage');
     
         // Generate a unique name for the image using a timestamp and original extension
         $galleryimage = time() . '.' . $uploadedImage->getClientOriginalExtension();
     
         // Use Intervention Image to resize and save the image to the public directory
         $image = Image::make($uploadedImage->getRealPath());
         $image->resize(600, 400); // You can customize the size as per your requirements
         $image->save(public_path('assets/gallery/' . $galleryimage)); // Save the image to the public/assets/products directory
     
         // Update the product's image name in the database
         $upload->gallery_image = 'gallery/'. $galleryimage;
         $upload->gallerytitle = $request->gallerytitle;
         $update = $upload->save();
     
         if ($update) {
             return redirect('admin.gallery')->with('success', 'Product information and image have been successfully updated.');
         } else {
             return redirect()->back()->with('error', 'Something went wrong while updating the product.');
         }
     } 
     else{
             $request->validate([
                 'gallerytitle' => 'required|unique:galleries,gallerytitle,'.$request->gallery_id,
             ]);
 
             $update = Gallery::where('id', $request->gallery_id)->update([
                 'gallerytitle' =>  $request->gallerytitle,
             ]); 
             if($update){
                 return redirect('admin.gallery')->withSuccess('Product has been successfully updated. ');
             }else{
                 return redirect()->back()->withError('Something went wrong for updating post. ');
             }
 
         }
     }
 

    public function deletegallery(Request $request){
        Gallery::find($request->gallery_id)->delete();
        return redirect()->back()->withSuccess('Gallery Deleted ');
    }

    public function podcast(){
        if (!Auth::check()) {
            return redirect('/admin'); // Change this to your desired home page URL
        }
        return view('pages.admin.podcast.index');
    }

    public function postpodcast(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'audio_file' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'podcast_venue' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

       // $audioFileName = $request->file('sources')->store('public/podcast');
       if ($request->hasFile('audio_file')) {
            $image = $request->file('audio_file');
            $audioFileName = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/podcastaudio', $audioFileName);
            //$podcast->audio_file = $audioFileName;
        }else{
            $audioFileName = null;
        }
       
        $podcast = new Podcast();
        $podcast->title = $validatedData['title'];
        $podcast->description = $validatedData['description'];
        $podcast->audio_file = $audioFileName;
        $podcast->start_time = $validatedData['start_time'];
        $podcast->end_time = $validatedData['end_time'];
        $podcast->venue = $validatedData['podcast_venue'];

        if ($request->hasFile('postcast_image')) {
            $image = $request->file('postcast_image');
            $postcastimage = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/podcast', $postcastimage);
            $podcast->image = 'podcast/' .$postcastimage;
        }

        $podcast->save();
 
        return redirect()->back()->with('success', 'Podcast created successfully!');       
    }

    public function Logout() { 
        Auth::logout();
        Session::invalidate();
        Session::flush();
        return redirect('admin');
    }
}
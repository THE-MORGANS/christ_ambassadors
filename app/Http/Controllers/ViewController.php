<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use Illuminate\Support\Facades\Crypt;
use App\Models\Product;
use App\Models\Productcategory;
use App\Models\Blogcategory;
use App\Models\Blog;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Comment;


class ViewController extends Controller
{

    public function index(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
        $eventsindex = Event::inRandomOrder()->limit(4)->get();
        $blogsindex = Blog::inRandomOrder()->limit(4)->get();
        return view('pages.user.index', compact('sixItemsgallery', 'eventsindex', 'blogsindex' ));
    }

    public  function blogs(SearchRequest $request){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
        $blog = $this->blog->all()->toArray();
        $page = 1;
        $pagdata =  $this->paginate($blog, 6, $page);
        $result = $this->blog->search($request->get('search'))->take(5)->get();
        // return view('');
    }

    public function aboutus(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
        return view('pages.user.aboutus', compact('sixItemsgallery'));
    }

    public function podcast(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.podcast', compact('sixItemsgallery'));
    }

    public function blog(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
        $blogs = Blog::orderBy('created_at', 'asc')->paginate(10);
        
        return view('pages.user.blog',  compact('blogs','sixItemsgallery', ));
    }

    public function show(Request $request){ 
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();
       
        $encrypted_id = $request->encrypted_id;
        $blogId = Crypt::decrypt($encrypted_id);


        $blog = Blog::findOrFail($blogId);
        $comments = $blog->comments()->with('replies')->get();
        $recentPosts = Blog::latest()->take(4)->get();
        $nextevents = Event::latest()->take(3)->get();
      
        return view('pages.user.blog-details', compact('blog', 'comments', 'recentPosts','sixItemsgallery','nextevents'));
    }

    public function submitComment(Request $request){
   
        $validatedData = $request->validate([
            'commenter_name' => 'required|max:255',
            'commenter_email' => 'required|max:255',
            'content' => 'required|max:255',
            'blog_id' => 'exists:blogs,id',
        ]);
        $comment = new Comment();
        $comment->content = $validatedData['content'];
        $comment->commenter_name = $validatedData['commenter_name'];
        $comment->commenter_email = $validatedData['commenter_email'];
        $comment->blog_id = $validatedData['blog_id'];
        $comment->save();
        
        session()->flash('toast_message', 'Comment posted successfully!');
       
        return redirect()->back()->with('success', 'Comment posted successfully!');       
    }

    public function submitReply(Request $request){
     
        $validatedData = $request->validate([
            'parent_id' => 'required|exists:comments,id',
            'reply_name' => 'required|max:255',
            'reply_email' => 'required|max:255',
            'reply_content' => 'required|max:255',
        ]);
       // dd($validatedData);
        $reply  = new Comment();
        $reply->content = $validatedData['reply_content'];
        $reply->commenter_name = $validatedData['reply_name'];
        $reply->commenter_email = $validatedData['reply_email'];
        $reply->parent_id = $validatedData['parent_id'];
        $reply->save();
        //dd($validatedData);
        return redirect()->back()->with('success', 'Reply posted successfully!'); 
    }

    public function ecommerce(){
        $products = Product::all();
        $categories = Productcategory::all();
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.ecommerce', compact('products', 'categories', 'sixItemsgallery' ));
    }

    public function event(){
        $events = Event::all();
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.event', compact('events','sixItemsgallery'));
    }

    public function gallery(){
        $gallery = Gallery::all();
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.gallery', compact('gallery', 'sixItemsgallery'));
    }  

    public function contactus(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.contactus', compact('sixItemsgallery'));
    }

    public function supportus(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.supportus', compact('sixItemsgallery'));
    }

    public function activities(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.activities', compact('sixItemsgallery'));
    }

    public function team01(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.team01', compact('sixItemsgallery'));
    }

    public function team02(){
        $sixItemsgallery = Gallery::inRandomOrder()->limit(6)->get();

        return view('pages.user.team02', compact('sixItemsgallery'));
    }
}
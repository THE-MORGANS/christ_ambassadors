@php
    use Carbon\Carbon;
@endphp

@extends('layouts.user')

@section('title', 'Christ Ambassadors - No. 1 Site for Christian Podcasts')
 
@section('style')
<style>
    /* nav{
          background-color: #022147;
      } */
    .sa-header li a {
        color: #555b62;
    }

    #header.sticky.sa-header li a {
        color: #fff;
    }

    header {
        background-color: white;
    }
</style>
@endsection
@stack('stylesheet')
@livewireStyles
@section('content')


  <!--start section-->
  <section id="nicdark_parallax_title" class="nicdark_section nicdark_imgparallax nicdark_parallaxx_img8">
    <div class="nicdark_filter greydark">
        <!--start nicdark_container-->
        <div class="nicdark_container nicdark_clearfix">
            <div class="grid grid_12">
                <div class="nicdark_space100"></div>
                <div class="nicdark_space100"></div>
                <h1 class="white subtitle">Blog Details</h1>
                <div class="nicdark_space10"></div>
                <h3 class="subtitle white"></h3>
                <div class="nicdark_space20"></div>
                <div class="nicdark_divider left big"><span class="nicdark_bg_white nicdark_radius"></span></div>
                <div class="nicdark_space40"></div>
                <div class="nicdark_space50"></div>
            </div>

        </div>
        <!--end nicdark_container-->
    </div>
  </section>
  <!--end section-->

  <!--start section-->
<section class="nicdark_section">

  <!--start nicdark_container-->
  <div class="nicdark_container nicdark_clearfix">

      <div class="nicdark_space50"></div>

  <div class="grid grid_8">
    <img alt="" class="nicdark_radius nicdark_opacity" style="float:left;width:100%;" src="{{ asset('assets/'.$blog->featured_image)}}">

    <div class="nicdark_space20"></div>

    <div class="nicdark_textevidence nicdark_bg_orange nicdark_radius nicdark_shadow">
              <div class="nicdark_size_big">
                  <p class="white"><i class="icon-calendar-1 nicdark_marginright10"></i>
                    @php
                        $originalDate =  $blog->created_at;
                        // Create a Carbon instance from the original date string
                        $date = \Carbon\Carbon::parse( $originalDate);

                        // Format the date into the desired format
                        $formattedDate = $date->format('M d, Y');
                    @endphp       
                   {{ $formattedDate}} <span class="nicdark_margin010">·</span> <i class="icon-user-1 nicdark_marginright10"></i>
                    {{ $blog->reference}} <span class="nicdark_margin010">·</span> <i class="icon-chat nicdark_marginright10"></i>
                    
                    @if (  $comments->count() == 1 || $comments->count() == 0 )
                      {{ $comments->count()}} COMMENT
                      @else
                      {{ $comments->count()}} COMMENTS
                    @endif 
                  </p>
              </div>
              <i class="icon-info-outline nicdark_iconbg right medium orange"></i>
          </div>

          <div class="nicdark_space50"></div>

          <h1 class="subtitle greydark">{{ $blog->posttitle}}</h1>
          <div class="nicdark_space20"></div>
          <div class="nicdark_divider left small"><span class="nicdark_bg_yellow nicdark_radius"></span></div>
          <div class="nicdark_space20"></div>
         
          <p>
             <?= $blog->content ?> 
          </p>

          <div class="nicdark_space50"></div>

        
          <h3 class="subtitle greydark">
            @if (  $comments->count() == 1 || $comments->count() == 0 )
            {{ $comments->count()}} COMMENT
            @else
            {{ $comments->count()}} COMMENTS
            @endif 
          </h3>
          <div class="nicdark_space20"></div>
          <div class="nicdark_divider left small"><span class="nicdark_bg_orange nicdark_radius"></span></div>
          <div class="nicdark_space20"></div>

          <ul class="nicdark_list border">
              <!--comment-->
              @if ($comments->count() > 0)
                @foreach ($comments as $comment)
                  <li class="nicdark_border_grey">
                    <div class="nicdark_archive1 nicdark_relative">
                        <div class="nicdark_margin100 nicdark_relative">
                          {{-- <img alt="" class="nicdark_displaynone_ipadpotr nicdark_radius_circle nicdark_absolute" style="width:50px;" src=""> --}}
                          <div class="nicdark_activity nicdark_disable_marginleft_ipadpotr">
                              <h4 class="subtitle greydark">
                                {{ $comment->commenter_name}} ({{ $comment->commenter_email}})  
                                @php
                                    $originalDate =  $comment->created_at;
                                    // Create a Carbon instance from the original date string
                                    $date = \Carbon\Carbon::parse( $originalDate);
    
                                    // Format the date into the desired format
                                    $formattedDate = $date->format('d M, Y');
                                @endphp         
                                {{ $formattedDate}}
                              </h4>                     
                          </div>
                        </div>
                        <p>{{ $comment->content}}</p>
                        <div class=" nicdark_marginleft120 ">
                          <div class=" nicdark_disable_marginleft_ipadpotr ">
                             
                            <!-- Display the replies (child comments) -->
                            @if ($comment->replies->count() > 0)
                              @foreach ($comment->replies as $reply)
                                <span class="comment-author nicdark_margin20"> 
                                  <p class="url">{{$reply->commenter_name}} ({{$reply->commenter_email}})</p>
                                </span>
                                <span class="comment-span"></span>
                                <p>{{$reply->content}}</p>
                              @endforeach
                            @endif
                          </div>                   
                        </div>
                        
                        <div class="nicdark_space20"></div>
                        <!-- Display the replies (child comments) -->
                          
                        <a href="#" id="replyLink{{ $comment->id }}" class="nicdark_btn nicdark_bg_orange small nicdark_shadow nicdark_radius white">
                          <i class="icon-reply-outline"></i>&nbsp;&nbsp;&nbsp;REPLY</a>
                      <div class="nicdark_space20"></div>

                      <div id="replyForm{{ $comment->id }}" class="comment-respond" style="display: none">
                        <h3 class="subtitle greydark">LEAVE A REPLY</h3>
                        <form  action="{{ route('submit_reply') }}" method="POST" class="comment-form" >
                          @csrf
                          <div class="nicdark_space20"></div>
                          <div class="nicdark_divider left small"><span class="nicdark_bg_red nicdark_radius"></span></div>
                          <div class="nicdark_space20"></div>
              
                          <input name="reply_name" class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="Your Name (required)" required>
                          <div class="nicdark_space20"></div>
                          <input class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" name="reply_email" placeholder="Your Email (required)" required>
                          <div class="nicdark_space20"></div>
                          <textarea name="reply_content" class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" placeholder="Write your reply here" required rows="9"></textarea>
                          <div class="nicdark_space20"></div>
                          <input type="hidden" name="parent_id"  class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" value="{{ $comment->id }}">
                          <input class="nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white left" type="submit" value="Submit Reply">
                        </form>
                      </div>
                    </div>
                    <!--comment-->

                  </li>

                  @endforeach
              @else
                <p>No comments yet. </p>
              @endif
              
                  
          </ul>
          <!-- /Blog-Detail -->
          <script>
          
            // Add an event listener to each "Reply" link
            @foreach ($comments as $comment)
                document.getElementById("replyLink{{ $comment->id }}").addEventListener("click", function (event) {
                  
                    event.preventDefault();
                  
                    // Toggle the visibility of the corresponding form 
                    document.getElementById("replyForm{{ $comment->id }}").style.display =
                        document.getElementById("replyForm{{ $comment->id }}").style.display === "none" ? "block" : "none";
                        //alert('ok');
                });
            @endforeach
        </script>


          <div class="nicdark_space50"></div>
         <div>
            <h3 class="subtitle greydark">LEAVE A REPLY</h3>
            <div class="nicdark_space20"></div>
            <div class="nicdark_divider left small"><span class="nicdark_bg_red nicdark_radius"></span></div>
            
            <div class="nicdark_space20"></div>

            <form  class="comment-form" method="POST" action="{{ route('submit_comment') }}" >
              @csrf

              <input class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" type="text" value="" placeholder="Your Name (required)" required name="commenter_name">
              <div class="nicdark_space20"></div>
              <input class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle" type="text" value=""name="commenter_email" placeholder="Your Email (required)" required>
              
              <div class="nicdark_space20"></div>
              <textarea name="content" class="nicdark_bg_grey nicdark_radius nicdark_shadow grey small subtitle"  placeholder="Your Message" required rows="9"></textarea>
              <div class="nicdark_space20"></div>
              <input type="hidden" name="blog_id" value="{{ $blog->id}}">
              <input class="nicdark_btn nicdark_bg_red medium nicdark_shadow nicdark_radius white left" type="submit" value="POST COMMENT">

            </form>
          </div>

      </div>
  
        <!--sidebar-->
        <div class="grid grid_4">
            
            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_violet nicdark_radius_top">
                    <h4 class="white nicdark_margin20">LATEST POSTS</h4>
                    <i class="icon-doc-1 nicdark_iconbg right medium violet"></i>
                </div>
                <ul class="nicdark_list border">
                    @forelse ($recentPosts as $item)
                      <?php
                        $encrypted_id = encrypt($item->id);
                      ?>
                      <a href="{{ route('blog_detail', ['encrypted_id'=> $encrypted_id]) }}">
                        <li class="nicdark_border_grey">
                            <div class="nicdark_margin20 nicdark_relative">
                            <img alt="" class="nicdark_absolute nicdark_radius" style="width:60px; height:40px" src="{{ asset('assets/'.$item->featured_image) }}">
                            <div class="nicdark_activity nicdark_marginleft80">
                                <h5 class="grey">{{ $item->posttitle}}</h5>                        
                                <div class="nicdark_space10"></div>
                                <p>
                                    {{ \Illuminate\Support\Str::limit($item->shortwriteup, 60, '...') }}
                                </p>
                            </div></div>
                        </li>
                      </a>
                    @empty
                        <p class="text-danger">No Post Found</p>
                    @endforelse
                </ul>
            </div>

          <div class="nicdark_space20"></div>

            <div class="nicdark_archive1 nicdark_bg_grey nicdark_radius nicdark_shadow">
                <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_top">
                    <h4 class="white nicdark_margin20">NEXT EVENTS</h4>
                    <i class="icon-calendar-1 nicdark_iconbg right medium blue"></i>
                </div>
                <ul class="nicdark_list border">
                    @forelse ($nextevents as $event)
                      <?php
                        $encrypted_id = encrypt($event->id);
                      ?>
                      <a href="#">
                        <li class="nicdark_border_grey">
                            <div class="nicdark_margin20 nicdark_relative">
                                <div style="width:60px;" class="nicdark_absolute nicdark_activity center">    
                                    @php
                                        $formatted_date = date('Y-m-d', strtotime($event->event_date));
                                        // Split the day, month, and year
                                        $date = new DateTime($formatted_date);
                                        list($year, $month, $day) = explode('-', $formatted_date);

                                    @endphp     
                                    <div class="nicdark_textevidence nicdark_bg_greydark nicdark_radius_top">
                                        <h2 class="white nicdark_margin5">{{$day}}</h2>
                                    </div>
                                    <div class="nicdark_textevidence nicdark_bg_blue nicdark_radius_bottom">
                                        <h6 class="white nicdark_margin5">
                                            {{$date->format('M')}}
                                        </h6>
                                    </div>
                                </div>
                                <div class="nicdark_activity nicdark_marginleft80">
                                    <h5 class="grey">{{ $event->event_title}}</h5>                        
                                    <div class="nicdark_space10"></div>
                                    <p>
                                        {{ $event->event_venue}}
                                    </p>
                                </div>
                            </div>
                        </li>
                      </a>
                    @empty
                        <p class="text-danger">No Post(s) Found</p>
                    @endforelse
                </ul>
            </div>

          <div class="nicdark_space20"></div>

  </div>
  <!--sidebar-->

  <div class="nicdark_space50"></div>

  </div>
  <!--end nicdark_container-->
          
</section>
<!--end section-->
<div class="container mt-5">
  <button id="showToastBtn" class="btn btn-primary">Show Toast</button>
</div>

<script>
  // Show the toast when the button is clicked
  document.getElementById('showToastBtn').addEventListener('click', function () {
      toastr.success('{{ session('toast_message') }}', 'Success');
  });
</script>

@endsection
@section('scripts')
@endsection

 
@stack('scripts')

@livewireScripts
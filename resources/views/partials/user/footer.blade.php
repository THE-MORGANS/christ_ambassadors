 <!--start section-->
        <section class="nicdark_section nicdark_bg_greydark">

            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">

                <div class="nicdark_space30"></div>

                <div class="grid grid_3 nomargin percentage">

                    <div class="nicdark_space20"></div>

                    <div class="nicdark_margin10">
                        <h4 class="white">CHRIST AMBASSADORS </h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <p class="white" style="text-align: justify;                        ">
                            We are the Christ Ambassadors; a ministry for Children, teenagers and young adults.
                            We gloriously represent and manifest Jesus Christ in everyplace.
                            We come to together to learn, live and practise the truth of the Living Word of God as contained in the Holy Bible.

                        </p>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        <a href="contact-1.html" class="nicdark_btn_icon nicdark_bg_orange small nicdark_shadow nicdark_radius white">
                            <i class="icon-mail-1 nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="contact-1.html" class="nicdark_btn_icon nicdark_bg_yellow small nicdark_shadow nicdark_radius white">
                            <i class="icon-home nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="contact-1.html" class="nicdark_btn_icon nicdark_bg_red small nicdark_shadow nicdark_radius white">
                            <i class="icon-phone-outline nicdark_rotate"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                </div>

                <div class="grid grid_3 nomargin percentage">
                    
                    <div class="nicdark_space30"></div>

                    <div class="nicdark_marginleft10">
                        <h4 class="white">LINKS</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    </div>
                    <div class="nicdark_space10"></div>

                    <a href="{{ route('aboutus')}}" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">About us</a>
                    <a href="{{ route('blog')}}" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Blog</a>
                    <a href="{{ route('ecommerce')}}" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Ecommerce</a>
                    <a href="{{ route('activities')}}" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Our Activities</a>
                    <a href="{{ route('event')}}" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Events</a>
                    <a href="{{ route('gallery')}}" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Gallery</a>
                    <a href="{{ route('contactus')}}" class="nicdark_btn nicdark_bg_greydark2 small nicdark_shadow nicdark_radius white subtitle nicdark_margin10">Contact</a>

                </div>

                <div class="grid grid_3 nomargin percentage">

                    <div class="nicdark_space20"></div>
                    
                    <div class="nicdark_margin10">
                        <h4 class="white">GALLERY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                    </div>
                    
                    @forelse ($sixItemsgallery as $item)
                        <div class="grid nomargin grid_4 percentage">
                            <div class="nicdark_margin10">
                                <img alt="" style="width: 80px" height="60px" class="nicdark_radius nicdark_opacity nicdark_focus" src=" {{ asset('assets/'.$item->gallery_image) }}">
                                
                            </div>
                        </div>
                    @empty
                        <p class="text-danger">No Image</p>
                    @endforelse
                    
                    

                </div>

                <div class="grid grid_3 nomargin percentage">

                    <div class="nicdark_space20"></div>

                    <div class="nicdark_margin10">
                        <h4 class="white">CONTACT US</h4>
                        <div class="nicdark_space20"></div>
                        <div class="nicdark_divider left small"><span class="nicdark_bg_white nicdark_radius"></span></div>
                        <div class="nicdark_space20"></div>
                        

                        <input class="nicdark_bg_greydark2 nicdark_radius nicdark_shadow white small subtitle" type="text" value="" placeholder="EMAIL">
                        <div class="nicdark_space20"></div>
                        <textarea rows="3" class="nicdark_bg_greydark2 nicdark_radius nicdark_shadow white small subtitle" placeholder="MESSAGE"></textarea>
                        <div class="nicdark_space20"></div>
                        <!--<input class="nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_press" type="submit" value="SEND">-->
                        <a href="#" class="nicdark_mpopup_ajax nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white nicdark_press">SEND</a>
                    </div>
                </div> 

                <div class="nicdark_space50"></div> 

            </div>
            <!--end nicdark_container-->
                    
        </section>
        <!--end section-->


        <!--start section-->
        <div class="nicdark_section nicdark_bg_greydark2 nicdark_copyrightlogo">

            <!--start nicdark_container-->
            <div class="nicdark_container nicdark_clearfix">

                <div class="grid grid_6 nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                    <div class="nicdark_space20"></div>
                    <p class="white">&copy; 2023 Christ Ambassadors | All Rights Reserved</p>
                </div>


                <div class="grid grid_6">
                    <div class="nicdark_focus right nicdark_aligncenter_iphoneland nicdark_aligncenter_iphonepotr">
                        <div class="nicdark_margin10">
                            <a href="#" class="nicdark_facebook nicdark_press right nicdark_btn_icon small nicdark_radius white"><i class="icon-facebook-1"></i></a>
                        </div>
                        <div class="nicdark_margin10">
                            <a href=" https://www.youtube.com/@TheChristAmbassadors" class="nicdark_press right nicdark_btn_icon nicdark_bg_red nicdark_shadow small nicdark_radius white">
                                <i class="icon-youtube"></i></a>
                        </div>
                        <div class="nicdark_margin10">
                            <a href="#" class="nicdark_press right nicdark_btn_icon nicdark_bg_blue nicdark_shadow small nicdark_radius white">
                                <i class="icon-instagram"></i></a>
                        </div>
                        <div class="nicdark_margin10">
                            <a href="#start_nicdark_framework" class="nicdark_zoom nicdark_internal_link right nicdark_btn_icon nicdark_bg_greydark2 small nicdark_radius white"><i class="icon-up-outline"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <!--end nicdark_container-->
                    
        </div>

        <!--end section-->  
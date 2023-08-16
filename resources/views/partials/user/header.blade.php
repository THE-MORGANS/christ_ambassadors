<style>
    .nicdark_btn_icon span {
        position: absolute;
        font-size: 10px;
        background: #fd4339;
        height: 15px;
        width: 15px;
        display: inline-block;
        text-align: center;
        line-height: 15px;
        color: #fff;
        border-radius: 50%;
        margin-left: -9px;
    }
</style>
{{-- <div class="nicdark_section nicdark_bg_grey nicdark_shadow nicdark_radius_bottom fade-down"> --}}
<div class="nicdark_section nicdark_bg_grey nicdark_shadow  nicdark_radius_bottom fade-down">
    <div class="nicdark_container nicdark_clearfix">
        <div class="grid grid_12 percentage">
                <div class="nicdark_space10"></div>
                <div class="nicdark_logo ">
                    <a href="{{ url('/')}}">
                        <img width="270px" height="43px" alt="" src="{{ asset('assets/img/ca_logo.svg')}}">
                    </a>
                </div>

                <a href="{{ url('cart') }}" class="nicdark_btn_icon nicdark_zoom nicdark_bg_yellow_hover nicdark_right_sidebar_btn_open nicdark_marginright10 nicdark_bg_orange extrasmall nicdark_radius white right">
                    <i class="icon-basket-1"></i>
                    @if (Cart::count() > 0)
                        <span> {{Cart::count() }}</span></a>
                    @elseif(Cart::count() == 0)
                        <span > 0</span></a>
                    @endif
                </a>
               
                <nav>
                    <ul class="nicdark_menu nicdark_margin010 nicdark_padding50">

                        <li class="yellow">
                            <a href="{{ route('index')}}">HOME</a>
                        </li>
                        <li class="yellow">
                            <a href="{{ route('aboutus')}}">ABOUT US</a>
                        </li>
                        <li class="orange">
                            <a href="{{ route('supportus')}}">SUPPORT US</a>
                        </li>
                        <li class="red">
                            <a href="{{ route('blog')}}">BLOG</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('activities')}}">Our Actvities</a></li>
                            </ul>
                        </li>
                        <li class="blue nicdark_megamenu">
                            <a href="{{ route('gallery') }}">GALLERY</a>
                            
                        </li>
                        <li class="green">
                            <a href="{{ route('event')}}">EVENTS</a>
                           
                        </li>
                        <li class="yellow">
                            <a href="{{ route('ecommerce')}}">ECOMMERCE</a>
                        </li>
                        <li class="grey">
                            <a href="{{ route('contactus')}}">CONTACTS</a>
                        </li>
                    </ul>
                </nav>

                <div class="nicdark_space20"></div>
                
        </div>

    </div>
    <!--end container-->

</div>
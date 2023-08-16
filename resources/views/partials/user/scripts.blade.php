<!--main-->
<script src="{{ asset('assets/js/main/jquery.min.js')}}"></script> <!--Jquery-->
<script src="{{ asset('assets/js/main/jquery-ui.js')}}"></script> <!--Jquery UI-->
<script src="{{ asset('assets/js/main/excanvas.js')}}"></script> <!--canvas need for ie-->

<!--plugins-->
<script src="{{ asset('assets/js/plugins/revslider/jquery.themepunch.tools.min.js')}}"></script> <!--revslider-->
<script src="{{ asset('assets/js/plugins/revslider/jquery.themepunch.revolution.min.js')}}"></script> <!--revslider-->

<!--menu-->
<script src="{{ asset('assets/js/plugins/menu/superfish.min.js')}}"></script> <!--superfish-->
<script src="{{ asset('assets/js/plugins/menu/tinynav.min.js')}}"></script> <!--tinynav-->

<!--other-->
<script src="{{ asset('assets/js/plugins/isotope/isotope.pkgd.min.js')}}"></script> <!--isotope-->
<script src="{{ asset('assets/js/plugins/mpopup/jquery.magnific-popup.min.j')}}s"></script> <!--mpopup-->
<script src="{{ asset('assets/js/plugins/scroolto/scroolto.js')}}"></script> <!--Scrool To-->
<script src="{{ asset('assets/js/plugins/nicescrool/jquery.nicescroll.min.j')}}"></script> <!--Nice Scroll-->
<script src="{{ asset('assets/js/plugins/inview/jquery.inview.min.js')}}"></script> <!--inview-->
<script src="{{ asset('assets/js/plugins/parallax/jquery.parallax-1.1.3.js')}}"></script> <!--parallax-->
<script src="{{ asset('assets/js/plugins/countto/jquery.countTo.js')}}"></script> <!--jquery.countTo-->
<script src="{{ asset('assets/js/plugins/countdown/jquery.countdown.js')}}"></script> <!--countdown-->

<!--settings-->
<script src="{{ asset('assets/js/settings.js')}}"></script> <!--settings-->
<!--custom js-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        //START SLIDE
        jQuery('.nicdark_slide1').show().revolution(
        {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:650,
            hideThumbs:200,
            
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,
            
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview2",
            
            touchenabled:"on",
            onHoverStop:"on",
            
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,
                                    
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                    
            keyboardNavigation:"off",
            
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,

            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,

            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,
                    
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",

            spinner:"spinner4",
            
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,

            shuffle:"off",
            
            autoHeight:"off",						
            forceFullWidth:"off",						
                                    
            hideTimerBar: "on",					
                                    
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,						
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            videoJsPath:"rs-plugin/videojs/",
            fullScreenOffsetContainer: ""	
        });
        //END SLIDE
        
        

        //START PARALLAX SECTIONS
        $('#nicdark_parallax_big_image').parallax("50%", 0.3);
        $('#nicdark_parallax_2_btns').parallax("50%", 0.3);
        $('#nicdark_parallax_countdown').parallax("50%", 0.3);
        $('#nicdark_parallax_counter').parallax("50%", 0.3);
        //END PARALLAX SECTIONS

        

        //START COUNTDOWN GRID SECTION
        //variables
        var endDate = "June 06, 2016 10:30:00";
        var grid = "grid_3";
        //insert the class nicdark_displaynone in the var if you wnat to hide the visualization
        var display_years = "nicdark_displaynone";
        var display_days = "";
        var display_hours = "";
        var display_minutes = "";
        var display_seconds = "";
        //call
        $(".nicdark_countdown").countdown({
        date: endDate,
        render: function(data) {
            $(this.el).html("<div class=\"grid "+ grid +" "+ display_years +" \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.years, 4) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">YEARS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_days +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.days, 3) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_blue small nicdark_shadow nicdark_radius white\">DAYS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_hours +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.hours, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_yellow small nicdark_shadow nicdark_radius white\">HOURS</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_minutes +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.min, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_green small nicdark_shadow nicdark_radius white\">MINUTES</a><div class=\"nicdark_space5\"></div></div></div><div class=\"grid "+ grid +" "+ display_seconds +"  \"><div class=\"nicdark_textevidence center\"><h1 class=\"subtitle white extrasize\">"+ this.leadingZeros(data.sec, 2) +"</h1><div class=\"nicdark_space20\"></div><a class=\"nicdark_btn nicdark_bg_violet small nicdark_shadow nicdark_radius white\">SECONDS</a><div class=\"nicdark_space5\"></div></div></div>");
        }
        });
        //END COUNTDOWN GRID SECTION

    });
</script>
<!--custom js-->


<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','.www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-49425562-7', 'auto');
ga('send', 'pageview');
 
</script>
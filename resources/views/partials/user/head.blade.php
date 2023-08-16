
    <meta charset="utf-8">  
    <title>@yield('title', 'Christ Ambassadors - No. 1 Site for Christian Podcasts')</title>
    <meta name="description" content="nicdark Framework"> <!--insert your description here-->  
    <meta name="author" content="nicdark"> <!--insert your name here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--meta responsive-->
    
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--START CSS--> 
    <link rel="stylesheet" href="{{ asset('assets/css/nicdark_style.css')}}"> <!--style-->
    <link rel="stylesheet" href="{{ asset('assets/css/nicdark_responsive.css')}}"> <!--nicdark_responsive-->

    <!--revslider-->
    <link rel="stylesheet" href="{{ asset('assets/css/revslider/settings.css')}}"> <!--revslider-->

    <!--END CSS-->
    
    <!--google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> <!-- font-family: 'Montserrat', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'> <!-- font-family: 'Raleway', sans-serif; -->
    <link href='http://fonts.googleapis.com/css?family=Montez' rel='stylesheet' type='text/css'> <!-- font-family: 'Montez', cursive; -->

    <!--[if lt IE 9]>  
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>  
    <![endif]-->  
    
    <!--FAVICONS-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-touch-icon-114x114.png')}}">
    <!--END FAVICONS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <style>
        p {
           
            font-size: 16px;
        }
    </style>
@yield('style') 
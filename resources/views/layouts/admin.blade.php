<!doctype html>
<html lang="en">
  <head> 
    @include('partials.admin.head')
    @stack('stylesheet');
    @livewireStyles
    
  </head>
  <body >
    <script src="admin_assets/dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
        
        
      
        <div class="page-wrapper">
            
            @yield('content')
            
            <!-- Footer -->
            @include('partials.admin.footer')
            <!-- /End Footer -->

        </div>

    </div>
    <!-- Scripts -->
    @include('partials.admin.scripts')
    @stack('scripts')
    @livewireScripts
  </body>
</html>
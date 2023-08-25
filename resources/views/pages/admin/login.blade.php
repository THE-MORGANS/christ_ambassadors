@extends('layouts.admin')

@section('title', 'Christ Ambassadors - No. ! Site for Christian Podcasts')
    


@section('content')
    <div class="page page-center">
        <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="#" class="navbar-brand navbar-brand-autodark"><img src="{{ asset('assets/img/ca_logo.svg')}}" height="36" alt=""></a>
        </div>
        <div class="card card-md">
            <div class="card-body">
            <img width="270px" height="43px" alt="" src="{{ asset('assets/img/ca_logo.svg')}}">
            <h2 class="h2 text-center mb-4">Admin Login to your account</h2>
                
           
                @if (session('error'))
                    <div class="col-sm-12 mb-3">
                        <div class="alert alert-error alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
            
                    </div>
                @endif
                {{-- wire:submit.prevent="LoginHandler()"  --}}
                <form action="{{ url('adminlogin')}}" method="post" autocomplete="off" >
                    @csrf
                    <div class="mb-3">
                      <label class="form-label">Email or Username</label>
                      <input type="text" name="email" class="form-control" placeholder=" " autocomplete="off" >
                      @error('email')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
                    <div class="mb-2">
                      <label class="form-label">
                        Password
                        <span class="form-label-description">
                         
                        </span>
                      </label>
                      <div class="input-group input-group-flat">
                        <input type="password" class="form-control" name="password"  placeholder="Your password"  autocomplete="off" >
                        <span class="input-group-text">
                          <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                          </a>
                        </span>
                      </div>
                      @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                      <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Remember me on this device</span>
                      </label>
                    </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    </div>
                  </form>
            
             
            
        
        </div>
        <div class="text-center text-muted mt-3">
            Don't have account yet? <a href="./sign-up.html" tabindex="-1">Sign up</a>
        </div>
        </div>
    </div>

@endsection


@section('scripts')

@endsection
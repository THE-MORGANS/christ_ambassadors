@extends('layouts.admin')
@section('title', 'Christ Ambassadors - No. ! Site for Christian Podcasts')
    


@section('content')
    @include('partials.admin.sidebar') 
    @include('partials.admin.topheader') 
    
    <div class="page page-center">
         <!-- Page header -->
         <div class="mb-5 page-header d-print-none"> 
            <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                <!-- Page pre-title -->
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    {{ $pageTitle }}
                </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    
                    <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                        Create new Event
                    </a>
                    <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal" data-bs-target="#modal-report" aria-label="Create new report">
                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 5l0 14" /><path d="M5 12l14 0" /></svg>
                    </a>
                </div>
                </div>
                </div>
            </div>
        </div>
   

    
        <div class="container-xl">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    @if (session('success'))
                        <div class="col-sm-12 mb-3">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
            
                        </div>
                    @endif
                    @if (session('error'))
                    <div class="col-sm-12 mb-3">
                        <div class="alert alert-error alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
        
                    </div>
                @endif
                </div>
                <div class="col-md-1"></div>
            </div>
        
            
            <div class="row">
                <div class="col-md-1"></div>
                <div class="card col-md-10" role="document">
                    <div class="card-body">
                        <form action="{{ route('update-gallery', ['gallery_id' =>Request('gallery_id') ]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label">Gallery Title</label>
                                        <input required name='gallerytitle' type="text" class="form-control" id="imageInput" value="{{$gallery->gallerytitle}}">
                                        @error('gallerytitle')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="image_holder col-md-4 mb-2" style="max-width:250px">
                                        <img class="border" id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px; max-height: 200px;">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label">Featured Image</label>
                                        <input  name='galleryimage' type="file" class="form-control" id="imageInput">
                                        @error('galleryimage')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="image_holder col-md-4 mb-2" style="max-width:250px">
                                        <img class="border" id="imagePreview" src="{{ asset('assets/'.$gallery->gallery_image) }}" alt="Image Preview" style=" max-width: 200px; max-height: 200px;">
                                    </div>
                                </div>
                        
                            </div>
                        
                            <div class="modal-footer">
                                <button type="reset" class="btn me-auto">Close</button>
                                <button type="submit" class="btn btn-primary" >Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
               
            

        

            <script>
                document.getElementById("imageInput").addEventListener("change", function(event) {
                    var image = event.target.files[0];
                    var imagePreview = document.getElementById("imagePreview");
        
                    if (image) {
                        var reader = new FileReader();
        
                        reader.onload = function() {
                            imagePreview.src = reader.result;
                            imagePreview.style.display = "block";
                        }
        
                        reader.readAsDataURL(image);
                    } else {
                        imagePreview.style.display = "none";
                    }
                });
            </script>
        
        </div>
    
    </div>
 @endsection

@section('scripts')

@endsection

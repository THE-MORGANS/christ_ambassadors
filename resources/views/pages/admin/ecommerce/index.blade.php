@extends('layouts.admin')

@section('title', 'Christ Ambassadors - No. ! Site for Christian Podcasts')
    


@section('content')
    @include('partials.admin.sidebar') 
    @include('partials.admin.topheader') 

    <div class="page page-center">
        @livewire('products')
    </div>

    <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="{{ route('postecommerce') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title">New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input  type="text" class="form-control" name="productname" placeholder="Your Product Name">
                    @error('productname')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="row">
                    <div class="col-lg-12">
                    <div class="mb-3">
                        <label class="form-label">Product Amount</label>
                        <div class="input-group input-group-flat">
                            <input  type="number" placeholder="Product Amount" name="productamount"  class="form-control "  autocomplete="off">
                        </div>
                        @error('productamount')
                            <span class="text-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    </div>
                   
                </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">Product Image</label>
                                <input  type="file" name="productimage" id="imageInput" class="form-control" @error('productimage') is-invalid @enderror accept="image/*">
                            </div>
                            @error('productimage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-lg-4">
                        <div>
                            <label class="form-label">Image Preview</label>
                        
                            <img class="border" id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px; max-height: 200px;">
        
                        
                        </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" >Save</button>
                </div>
            </div>
            </div>
        </form>
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
 @endsection

@section('scripts')

@endsection


@push('script')
<script>
    $(welcome).on('hidden.bs.modal', function(){
        Livewire.emit('type');
    });

    window.addEventListener('hide_add_author_modal', function(event){
        $('modal-report').modal('hide');
    })
</script>

@endpush
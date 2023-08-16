<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('post.gallery') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">New Gallery</h5> 
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <small style="color: red">Please upload the correct image format jpeg,jpg,png.</small>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Gallery Title</label>
                        <input required name='gallerytitle' type="text" class="form-control" id="imageInput">
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
                        <label class="form-label">Gallery Image</label>
                        <input required name='galleryimage' type="file" class="form-control" id="imageInput">
                        @error('gallery_image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="image_holder col-md-4 mb-2" style="max-width:250px">
                        <img class="border" id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px; max-height: 200px;">
                    </div>
                </div>
           
            </div>
            
            <div class="modal-footer">
                <button type="reset" class="btn me-auto" data-bs-dismiss="modal">Close</button>
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
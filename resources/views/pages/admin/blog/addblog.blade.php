
<!-- Add this inside your 'head' section of the blade layout -->
<script src="https://cdn.jsdelivr.net/npm/tinymce@5.9.1/tinymce.min.js"></script>

<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('create_blog') }}" id="addPostForm" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">New Blog</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Post title</label>
                        <input name='post_title' type="text" class="form-control"  placeholder="Enter Post title">
                        <span class="text-danger error-text post_title_error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Post Short Writeup</label>
                        <textarea name='post_shortwriteup'  class=" form-control"  placeholder="Shortwriteup..."></textarea>
                        <span class="text-danger error-text post_description_error"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Post Content</label>
                        <textarea name='post_content' id="post_content" class="ckeditor form-control"  placeholder="Content..."></textarea>
                        <span class="text-danger error-text post_content_error"></span>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Reference</label>
                        <select class="form-select mb-3" name='reference'> 
                            <option selected disabled> No Selected </option>
                            <option>Admin</option>
                        </select>
                       
                        <span class="text-danger error-text reference_error"></span>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Featured Image</label>
                        <input name='featured_image' type="file" class="form-control" id="imageInput">
                       
                        <span class="text-danger error-text featured_image_error"></span>
                       
                    </div>
                    <div class="image_holder col-md-4 mb-2" style="max-width:250px">
                        <img class="border" id="imagePreview" src="#" alt="Image Preview" style="display: none; max-width: 200px; max-height: 200px;">
                    </div>
                </div>
           
            </div>
            
            <div class="modal-footer">
                <button type="reset" class="btn me-auto" data-bs-dismiss="modal">Close</button>
                <button id="submitBtn" type="submit" class="btn btn-primary" >Save</button>
            </div>
        </div>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        
        
        $('form#addPostForm').on('submit', function(e) {
           // alert('l')
            e.preventDefault();
            var form = this;
            var formData = new FormData(form);
            
            $.ajax({
                url: $(form).attr('action'),
                method: $(form).attr('method'),
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $(form).find('span.error-text').text('');
                },
                success: function(response) {
                    if (response.code == 1) {
                        $(form)[0].reset();
                        CKEDITOR.instances.post_content.setData('');
                        imagePreview.style.display = "none";
                       // modal.style.display = "none";
                        alert('Post added successfully!');
                        setTimeout(function () {
                            location.reload();
                        }, 100); 
                    } else {
                        alert('Error occurred while adding the post.');
                    }
                },
                error: function(response) {
                    $.each(response.responseJSON.errors, function(prefix, val) {
                        $(form).find('span.' + prefix + '_error').text(val[0]);
                    });
                }
            });
        });
    </script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>

</div>
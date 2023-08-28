
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('post.event') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">New Event</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Event title</label>
                        <input required name='event_title' type="text" class="form-control"  placeholder="Enter Post title">
                        @error('post_title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Event Content</label>
                        <textarea required name='event_content' rows="6" class="form-control"  placeholder="Content..."></textarea>
                        @error('post_content')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Event Date</label>
                        <input required type="text" name="event_date" class="form-control" data-mask="00/00/0000" data-mask-visible="true" placeholder="00/00/0000" autocomplete="off">
                        @error('post_content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Event Time</label>
                        <input required type="text" name="event_time" class="form-control" data-mask="00:00:00" data-mask-visible="true" placeholder="00:00:00" autocomplete="off">
                        @error('post_content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Event Venue</label>
                        <input required type="text" class="form-control" name="event_venue" placeholder="Event Address" value="">
                        @error('post_content')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Featured Image</label>
                        <input name='event_image' type="file" class="form-control" id="imageInput">
                        @error('featured_image')
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
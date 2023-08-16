
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <form action="{{ route('post.podcast') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title">New Podcast</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            
                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Podcast Title</label>
                        <input required name='title' type="text" class="form-control"  placeholder="Enter Post title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Podcast Description</label>
                        <textarea required name='description' rows="6" class="form-control"  placeholder="Content..."></textarea>
                    </div>
                    <div class="card">
                        <h3>Duration</h3>
                        <div class="mb-3">
                            <label class="form-label">Start Time</label>
                            <input type="time" name="start_time" class="form-control" placeholder="00:00:00" autocomplete="off">
                            @error('start_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">End Time</label>
                            <input type="time" name="end_time" class="form-control" placeholder="00:00:00" autocomplete="off">
                            @error('end_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Podcast Venue</label>
                        <input required type="text" class="form-control" name="podcast_venue" placeholder="Vrnue" >
                        @error('podcast_venue')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Audio file </label>
                        <input required type="file" class="form-control" name="audio_file" accept="audio/*" value="">
                        @error('audio_file')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-8 mb-3">
                        <label class="form-label">Featured Image</label>
                        <input name='postcast_image' type="file" class="form-control" id="imageInput">
                        @error('postcast_image')
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
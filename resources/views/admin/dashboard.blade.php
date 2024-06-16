@include('admin.header')
@include('admin.navbar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Projects</h1>
                </div>
                 <div class="col-sm-6 text-right">
                    <button class="btn btn-sm btn-success mt-2" data-toggle="modal" data-target="#projectModal">Add Project</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-header -->

    @if(session('success'))
    <div id="success-alert" class="alert alert-success" style="font-size: 18px; padding: 20px;">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 5000);
    </script>
    @endif

    <!--Main Content Here --->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Image</th>
                                <th>Name of Project</th>
                                <th>Project Category</th>
                                <th>Summary</th>
                                <th>Website Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($projects)
                                @foreach ($projects as $project) 
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td><img src="{{ asset('upload-profile/' . $project->image) }}" alt="Featured Image" style="width: 100px; height: 70px; object-fit: cover;"></td>
                                        <td>{{ $project->project }}</td>
                                        <td>{{ $project->category }}</td>
                                        <td>
                                            <div class="summary-text">{{ Str::limit($project->summary, 50) }}</div>
                                            @if(strlen($project->summary) > 100)
                                                <a href="#" class="read-more" data-summary="{{ $project->summary }}">Read more</a>
                                            @endif
                                        </td>
                                        <td><a href="{{ $project->link }}" target="_blank">{{ $project->link }}</a></td>
                                        <td>
                                            <button class="btn btn-sm btn-info add-btn" data-id="{{ $project->id }}">Add Images</button>
                                            <button class="btn btn-sm btn-warning view-btn" data-id="{{ $project->id }}">View</button>
                                            <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $project->id }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach  
                            @endif 
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!--/.Main Content Here--->
</div>
<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2023.</strong> Prince E. Sanguan
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.1.2
    </div>
</footer>
<!-- Main Footer -->

  <!-- View Module Modal -->
  <div class="modal fade" id="viewModuleModal" tabindex="-1" role="dialog" aria-labelledby="viewModuleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewModuleModalLabel">View Module</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="moduleCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Carousel items will be dynamically added here -->
                    </div>
                    <a class="carousel-control-prev" href="#moduleCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#moduleCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- Page numbering -->
                    <div class="carousel-page-number text-center mt-2"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
  </div>
  <!-- View Module Modal -->

<!-- The Modal -->
<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('add.project')}}" method="post" enctype="multipart/form-data">
                  @csrf
                    <div class="form-group">
                        <label>Project Image</label>
                        <input type="file" class="form-control-file" name="file" required>
                    </div>

                    <div class="form-group">
                        <label>Project Name</label>
                        <input type="text" class="form-control" name="project" placeholder="Enter Project Name" required>
                    </div>

                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" name="category" placeholder="Enter Project Category" required>
                    </div>

                    <div class="form-group">
                        <label>Summary</label>
                        <textarea class="form-control" name="summary" placeholder="Enter Project Summary" required></textarea>
                    </div>

                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter Project Link" required>
                    </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>

                </form>
            </div>
  
        </div>
    </div>
  </div>
  <!-- The Modal -->

  <!-- Upload Images -->
<div class="modal fade" id="uploadImageModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadImageModalLabel">Upload Images of Your Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <!-- Form inside the modal -->
               <form method="post" action="{{ route('add.image') }}" enctype="multipart/form-data"> 
                  @csrf
                  <input type="hidden" name="project_id" id="imageID" readonly>
                  <input type="file" name="files[]" required multiple> 
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                  </div>
              </form>
              <!-- Form inside the modal -->
        </div>
    </div>
  </div>
  <!-- Upload Images -->
  

<script>
    $(document).ready(function() {
        // Event delegation for dynamically loaded elements
        $(document).on('click', '.delete-btn', function() {
            var projectId = $(this).data('id'); 
            $.ajax({
                type: 'POST',
                url: '/admin/dashboard/' + projectId + '/delete',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                success: function(response) {
                    // Handle success response
                    alert('Product deleted successfully.');
                    location.reload(); // Refresh the page after successful deletion
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    alert('Error: ' + xhr.responseText);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.add-btn').click(function() {
            var imageID = $(this).data('id');
            $('#imageID').val(imageID); // Set the image ID in the hidden input field
            $('#uploadImageModal').modal('show');
        });

    // View the Images associated in the Project
    $('.view-btn').click(function() {
        $('#viewModuleModal').modal('show');
    });
    });
  </script>

<script>
    $(document).ready(function() {
        var totalImages = 0;
        var currentImageIndex = 0;
  
        // Show the Image modal when View Modal button is clicked
        $(document).on('click', '.view-btn', function() {
            var imageId = $(this).data('id');
  
            // Perform an AJAX request to fetch images based on the module ID
            $.ajax({
                url: '/admin/dashboard/' + imageId,
                type: 'GET',
                success: function(response) {
                    totalImages = response.images.length;
                    currentImageIndex = 0;
  
                    // Clear existing carousel items
                    $('#moduleCarousel .carousel-inner').empty();
  
                    // Loop through the fetched images and populate the carousel
                    $.each(response.images, function(index, image) {
                        var extension = image.image.split('.').pop().toLowerCase();
                        var item = $('<div class="carousel-item">');
  
                        if (extension === 'jpg' || extension === 'jpeg' || extension === 'png' || extension === 'gif') {
                            item.append($('<img class="d-block w-100" alt="Image">').attr('src', "{{ asset('upload-profile/') }}/" + image.image));
                        } else if (extension === 'pdf') {
                            var pdfUrl = "{{ asset('upload-profile/') }}/" + image.image;
                            var canvas = $('<canvas class="d-block w-100">')[0];
                            item.append(canvas);
  
                            // Use PDF.js to render the PDF to the canvas
                            var loadingTask = pdfjsLib.getDocument(pdfUrl);
                            loadingTask.promise.then(function(pdf) {
                                pdf.getPage(1).then(function(page) {
                                    var viewport = page.getViewport({ scale: 1.5 });
                                    canvas.height = viewport.height;
                                    canvas.width = viewport.width;
                                    var renderContext = {
                                        canvasContext: canvas.getContext('2d'),
                                        viewport: viewport
                                    };
                                    page.render(renderContext);
                                });
                            });
                        } else {
                            item.append($('<div class="d-block w-100 text-center">No image available</div>'));
                        }
  
                        // Add active class to the first item
                        if (index === 0) {
                            item.addClass('active');
                        }
  
                        $('#moduleCarousel .carousel-inner').append(item);
                    });
  
                    // Update page numbering
                    updatePageNumber();
  
                    // Show the modal
                    $('#viewModuleModal').modal('show');
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching images:', error);
                }
            });
        });
  
        // Update page numbering
        function updatePageNumber() {
            var pageNumberText = (currentImageIndex + 1) + ' out of ' + totalImages;
            $('.carousel-page-number').text(pageNumberText);
  
            // Disable next button if on the last page
            if (currentImageIndex === totalImages - 1) {
                $('.carousel-control-next').addClass('disabled');
            } else {
                $('.carousel-control-next').removeClass('disabled');
            }
  
            // Disable prev button if on the first page
            if (currentImageIndex === 0) {
                $('.carousel-control-prev').addClass('disabled');
            } else {
                $('.carousel-control-prev').removeClass('disabled');
            }
        }
  
        // Handle carousel slide event
        $('#moduleCarousel').on('slid.bs.carousel', function() {
            currentImageIndex = $('#moduleCarousel .carousel-item.active').index();
            updatePageNumber();
        });
  
        // Handle next button click
        $('.carousel-control-next').click(function() {
            if (currentImageIndex < totalImages - 1) {
                currentImageIndex++;
                $('#moduleCarousel').carousel('next');
            } else {
                $('#viewModuleModal').modal('hide');
            }
        });
  
        // Handle previous button click
        $('.carousel-control-prev').click(function() {
            if (currentImageIndex > 0) {
                currentImageIndex--;
                $('#moduleCarousel').carousel('prev');
            }
        });
    });
</script>
  




<!-- Ensure you have jQuery and Bootstrap JS included -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

@include('admin.footer')

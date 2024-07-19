
    @extends('layouts.app')
    <!-- NAVBAR -->
    @section('content')
    @include('navbar.nav-auth')


    <div class="container mt-4">
        @include('components.breadcrumb')

        <div class="d-flex justify-content-between align-items-center">
            <h2>Acer Aspire 5 with Core i5</h2>
            <div>
                <button class="btn btn-outline-primary mr-5">Message<i class="fas fa-message-alt"></i></button>
                <button class="btn btn-primary mr-1" data-toggle="modal" data-target="#shareModal"><i
                        class="fas fa-share"></i> Share</button>
                <button class="btn btn-danger" data-toggle="modal" data-target="#reportModal"><i
                        class="fas fa-flag"></i> Report</button>
            </div>
        </div>


        <div class="row">
            
            @include('product.product-action')
            @include('product.product-info')
        </div>
    </div>

    <!-- Share Modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="shareModalLabel">Share to Socials</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <a href="#" class="text-primary"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-info"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-danger"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-success"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Report Modal -->
    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="reportModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel">Report this listing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="reportForm">
                        <div class="form-group">
                            <label for="reportReason">Reason for report:</label>
                            <select class="form-control" id="reportReason" required="">
                                <option value="">Select a reason</option>
                                <option value="inappropriate">Inappropriate content</option>
                                <option value="spam">Spam</option>
                                <option value="fraud">Fraudulent listing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="reportDescription">Description:</label>
                            <textarea class="form-control" id="reportDescription" rows="2" required=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Report</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-image');
        const dots = document.querySelectorAll('.image-nav span');

        function showSlide(n) {
            slides[currentSlide].style.display = 'none';
            dots[currentSlide].classList.remove('active');
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].style.display = 'block';
            dots[currentSlide].classList.add('active');
        }

        function moveCarousel(n) {
            showSlide(currentSlide + n);
        }

        function toggleWishlist(button) {
            button.classList.toggle('active');
        }

        // Initialize the carousel
        showSlide(0);

        // Handle report form submission
        document.getElementById('reportForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Here you would typically send the form data to your server
            alert('Report submitted. Thank you for your feedback.');
            $('#reportModal').modal('hide');
        });
    </script>
    
@endsection
<!-- resources/views/product_details.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <div class="product-images position-relative">
                    <!-- Heart icon inside the image -->
                    <div class="wishlist-icon position-absolute" style="top: 10px; right: 10px;">
                        <i id="wishlist-heart" class="far fa-heart" style="font-size: 24px; cursor: pointer; color: white;"></i>
                    </div>
                    <div class="image-wrapper text-center">
                        <img id="product-image" src="https://via.placeholder.com/500" alt="Product Image" class="img-fluid">
                    </div>
                    <div class="image-controls text-center mt-3">
                        <button id="prev-image" class="btn btn-secondary">Previous</button>
                        <button id="next-image" class="btn btn-secondary">Next</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="product-details">
                    <h2>Product Name</h2>
                    <p><strong>Category:</strong> Electronics</p>
                    <p><strong>Posted by:</strong> <a href="#">User Name</a></p>
                    <p><strong>Posted on:</strong> July 16, 2024</p>
                    <div class="icons mt-3">
                        <a href="#" class="btn btn-outline-primary"><i class="fas fa-envelope"></i> Message</a>
                        <a href="#" class="btn btn-outline-secondary"><i class="fas fa-share"></i> Share</a>
                        <a href="#" class="btn btn-outline-danger" id="report-listing"><i class="fas fa-flag"></i> Report</a>
                    </div>
                    <form id="report-form" class="mt-3" style="display: none;">
                        <textarea class="form-control" rows="3" placeholder="Describe the issue"></textarea>
                        <button type="submit" class="btn btn-danger mt-2">Submit Report</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let images = [
                'https://via.placeholder.com/500',
                'https://via.placeholder.com/500?text=Image+2',
                'https://via.placeholder.com/500?text=Image+3'
            ];
            let currentIndex = 0;

            document.getElementById('next-image').addEventListener('click', function () {
                currentIndex = (currentIndex + 1) % images.length;
                document.getElementById('product-image').src = images[currentIndex];
            });

            document.getElementById('prev-image').addEventListener('click', function () {
                currentIndex = (currentIndex - 1 + images.length) % images.length;
                document.getElementById('product-image').src = images[currentIndex];
            });

            document.getElementById('report-listing').addEventListener('click', function (e) {
                e.preventDefault();
                document.getElementById('report-form').style.display = 'block';
            });

            document.getElementById('wishlist-heart').addEventListener('click', function () {
                this.classList.toggle('fas');
                this.classList.toggle('far');
                if (this.classList.contains('fas')) {
                    // Add to wishlist logic here
                    console.log('Added to wishlist');
                } else {
                    // Remove from wishlist logic here
                    console.log('Removed from wishlist');
                }
            });
        });
    </script>
@endsection

<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <style>
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }

        .input-icons i {
            position: absolute;
        }
    </style>

    @include('search-bar')

    <div class="row">
        <!-- Product Card 1 -->
        <div class="col-md-4">
            <div class="card mb-3"> {{-- margin button --}}
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Acer Aspire 5 with Core i5</h5>
                    <p>Category</p>
                    <p>Posted By: Shan Rey</p>
                    <p>₱20,000</p>
                    <p>Commission Fee: ₱1500</p>
                    <p>Location: Lapu-Lapu</p>
                    <a href="/product_details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Crochet Dancing Toothless</h5>
                    <p>Category</p>
                    <p>Posted By: Ralph</p>
                    <p>₱350</p>
                    <p>Commission Fee: N/A</p>
                    <p>Location: Mandaue</p>
                    <a href="/product_details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Crochet Dancing Toothless</h5>
                    <p>Category</p>
                    <p>Posted By: Ralph</p>
                    <p>₱350</p>
                    <p>Commission Fee: N/A</p>
                    <p>Location: Mandaue</p>
                    <a href="/product_details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Crochet Dancing Toothless</h5>
                    <p>Category</p>
                    <p>Posted By: Ralph</p>
                    <p>₱350</p>
                    <p>Commission Fee: N/A</p>
                    <p>Location: Mandaue</p>
                    <a href="/product_details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>

        <!-- Product Card 2 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Crochet Dancing Toothless</h5>
                    <p>Category</p>
                    <p>Posted By: Ralph</p>
                    <p>₱350</p>
                    <p>Commission Fee: N/A</p>
                    <p>Location: Mandaue</p>
                    <a href="/product_details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
        <!-- Product Card 3 -->
        <div class="col-md-4">
            <div class="card">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">361 Aaron Gordon</h5>
                    <p>Category</p>
                    <p>Posted By: Percimel</p>
                    <p>₱2000</p>
                    <p>Commission Fee: ₱200</p>
                    <p>Location: Mandaue</p>
                    <a href="/product_details" class="btn btn-primary">View Details</a>
                </div>
            </div>
        </div>
    </div>
@endsection

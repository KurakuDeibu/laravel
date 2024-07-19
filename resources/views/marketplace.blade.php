<!-- resources/views/home.blade.php -->
@extends('layouts.app')
@section('title', 'Marketplace')

@section('content')

@include('search-bar')
@include('components.sidebar')

            <div class="row">
                <!-- Product Card 1 -->
                <div class="col-md-4">
                    <div class="card mb-3"> {{-- margin button --}}
                        <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Acer Aspire 5 with Core i5</h5>
                            <div class="d-flex justify-content-between"><span>Category</span><span>Want a Buyer</span></div>
                            <div class="d-flex justify-content-between"><span>Posted By : </span><span>Shan Rey</span></div>
                            <div class="d-flex justify-content-between"><span>Budget :</span><span>$1,000</span></div>
                            <div class="d-flex justify-content-between"><span>Commission Fee :</span><span>N/A</span></div>
                            <a class="btn btn-primary mt-2" href="/product_details">View Details</a>
                        </div>
                    </div>
                </div>

            </div> <!--- End of Div--->

        @endsection

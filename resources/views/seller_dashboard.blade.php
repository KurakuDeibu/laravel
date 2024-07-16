<!-- resources/views/seller_dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center mt-5">
                <img src="https://via.placeholder.com/150" alt="Empty Icon" class="mb-3">
                <h4>Listings you're selling will appear here.</h4>
                <a href="/newlisting" class="btn btn-primary mt-3">Create New Listing</a>
            </div>
        </div>
    </div>
@endsection

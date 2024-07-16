<!-- resources/views/newlisting.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center my-5">Choose Listing Type</h2>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card listing-option h-100" id="single-listing">
                    <div class="card-body text-center">
                        <i class="fas fa-shopping-cart fa-3x mb-3"></i>
                        <h5 class="card-title">Single Listing</h5>
                        <p class="card-text">Create a single product listing.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card listing-option h-100" id="commission-listing">
                    <div class="card-body text-center">
                        <i class="fas fa-money-bill-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Commission Listing</h5>
                        <p class="card-text">Create a product listing with commission.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-end mt-4" id="continue-btn-container" style="display: none;">
            <div class="col-md-4 text-right">
                <a href="#" class="btn btn-primary" id="continue-btn">Continue</a>
            </div>
        </div>
    </div>

    <style>
        .listing-option {
            border: 2px solid transparent;
            transition: all 0.3s ease;
            cursor: pointer;
            height: 100%;
        }

        .listing-option:hover {
            border-color: #007bff;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }

        .listing-option.selected {
            border-color: #007bff;
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.75);
        }

        .profile-actions a.selected {
            background-color: #007bff;
            color: white;
            border-color: #007bff;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var selectedOption = null;

            document.querySelectorAll('.listing-option').forEach(function (card) {
                card.addEventListener('click', function () {
                    document.querySelectorAll('.listing-option').forEach(function (c) {
                        c.classList.remove('selected');
                    });
                    card.classList.add('selected');
                    selectedOption = card.id;

                    document.getElementById('continue-btn-container').style.display = 'block';

                    // Change the color of the selling sidebar card
                    document.querySelectorAll('.profile-actions a').forEach(function (link) {
                        link.classList.remove('selected');
                    });
                    document.querySelector('.profile-actions .selling').classList.add('selected');
                });
            });

            document.getElementById('continue-btn').addEventListener('click', function () {
                if (selectedOption === 'single-listing') {
                    window.location.href = '/single-listing';
                } else if (selectedOption === 'commission-listing') {
                    window.location.href = '/commission-listing';
                }
            });
        });
    </script>
@endsection

<!-- resources/views/product-detail.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Detail</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .heart-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: #fff;
            font-size: 24px;
        }
        .heart-icon.red {
            color: red;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: black;
        }
        .action-icons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .action-icons .btn {
            padding: 5px 10px;
        }
        .product-details {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    @include('navbar.nav-auth')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 col-lg-6 position-relative">
                <div id="productCarousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://via.placeholder.com/300x200" class="d-block w-100" alt="Acer Aspire 5">
                        </div>
                        <!-- Add more carousel items here if needed -->
                    </div>
                    <a class="carousel-control-prev" href="#productCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#productCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <span class="fas fa heart-icon" id="wishlist-heart">&#1;</span>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="product-details">
                    <div class="action-icons">
                        <button class="btn btn-primary" onclick="window.location.href='{{ url('chatui') }}'"><i class="fas fa-envelope"></i></button>
                        <button class="btn btn-secondary" id="share-btn"><i class="fas fa-share-alt"></i></button>
                        <button class="btn btn-danger" id="report-btn"><i class="fas fa-exclamation-triangle"></i></button>
                    </div>
                    <h3>Acer Aspire 5 with Core i5</h3>
                    <p><strong>Condition:</strong> Likely Used</p>
                    <p><strong>Budget:</strong> ₱20,000</p>
                    <p><strong>Commission Fee:</strong> ₱1500</p>
                    <p><strong>Location:</strong> Lapu-Lapu</p>
                    <p>Good as new! only for 20k, pang gatas lang sa anak ko...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="reportModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Report Product</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <textarea class="form-control" rows="3" placeholder="Enter your report here..."></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Submit Report</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        document.getElementById('wishlist-heart').addEventListener('click', function() {
            this.classList.toggle('red');
        });

        document.getElementById('share-btn').addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: 'Acer Aspire 5 with Core i5',
                    text: 'Check out this Acer Aspire 5 with Core i5 on ThriftyTrade!',
                    url: window.location.href
                }).catch(console.error);
            } else {
                alert('Sharing is not supported in this browser. Please copy the URL manually.');
            }
        });

        document.getElementById('report-btn').addEventListener('click', function() {
            $('#reportModal').modal('show');
        });
    </script>
</body>
</html>

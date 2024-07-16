<!-- resources/views/partials/navbar.blade.php -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="#">
        <img src="https://via.placeholder.com/150x50" alt="ThriftyTrade Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/marketplace"><i class="fas fa-store m-2"></i> Marketplace</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-heart m-2"></i> Wishlists</a>
            </li>
        </ul>
    </div>
    <div class="ml-auto d-flex align-items-center">
        <a href="/newlisting" class="btn btn-primary mr-2">New Listing</a>
        <a href="/chatui"> <i class="fas fa-comments fa-lg m-3"></i></a>
        <i class="fas fa-bell fa-lg m-3"></i>
        <img src="https://via.placeholder.com/50" alt="Profile Image" class="profile-img">
    </div>
</nav>

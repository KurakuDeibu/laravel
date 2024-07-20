  <style>
      body {
          background-color: #f8f9fa;
      }

      .navbar-brand {
          font-weight: bold;
          color: #4267b2 !important;
      }

      .profile-picture {
          width: 150px;
          height: 150px;
          object-fit: cover;
          border-radius: 50%;
          border: 3px solid #4267b2;
      }

      .btn-primary {
          background-color: #4267b2;
          border-color: #4267b2;
      }

      .btn-primary:hover {
          background-color: #4267b2;
          border-color: #4267b2;
      }

      .rating {
          color: #ffc107;
      }
  </style>

  <!-- NAVBAR -->

  @extends('layouts.app')
  @section('title', 'Profile')
  @include('navbar.nav-auth')

  @section('content')

      <div class="container py-4">
          <!-- BREADCRUMB -->
       <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="/profile">Profile</a></li>
                </ol>
            </nav> 

          <div class="row">
              <div class="col-md-4 text-center">

                  <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-picture mb-3">
                  <h4>John Doe</h4>
                  <p class="text-muted">@thriftyshopperist</p>
                  <p><i class="bi bi-geo-alt-fill"></i> Mandaue, Cebu</p>
                  <p><i class="bi bi-calendar3"></i> Joined June 2024</p>
                  <div class="rating mb-3">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>
                      <span class="ms-2">4.5 (42 reviews)</span>
                  </div>
                  <button class="btn btn-primary"><i class="bi bi-pen"></i> Edit Profile</button>
              </div>
              <div class="col-md-8">
                  <h3>About Me</h3>
                  <p>Hi there! I'm John, a passionate thrift shopper and seller. I love finding unique items and giving
                      them a
                      new home. Always on the lookout for vintage treasures and gently used modern pieces. Let's trade!
                  </p>

                  <h4 class="mt-4">Recent Listings</h4>
                  <div class="row">
                      <div class="col-md-4 mb-3">
                          <div class="card">
                              <img src="https://via.placeholder.com/150" class="card-img-top" alt="Vintage Camera">
                              <div class="card-body">
                                  <h5 class="card-title">Vintage Camera</h5>
                                  <p class="card-text">₱1,500</p>
                              </div>
                          </div>
                          <!--
                            </div>
                            <div class="col-md-4 mb-3">
                              <div class="card">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Leather Jacket">
                                <div class="card-body">
                                  <h5 class="card-title">Leather Jacket</h5>
                                  <p class="card-text">₱2,000</p>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-4 mb-3">
                              <div class="card">
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Retro Record Player">
                                <div class="card-body">
                                  <h5 class="card-title">Retro Record Player</h5>
                                  <p class="card-text">₱3,500</p>
                                </div>
                              </div>
                            </div> -->
                      </div>
                      <!-- </div> -->

                      <h4 class="mt-4">Reviews</h4>
                      <div class="mb-3">
                          <div class="d-flex align-items-center mb-2">
                              <img src="https://via.placeholder.com/40" alt="Reviewer" class="rounded-circle me-2"
                                  width="40" height="40">
                              <div>
                                  <strong>Maria S.</strong>
                                  <div class="rating">
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star-fill"></i>
                                  </div>
                              </div>
                          </div>
                          <p>Great seller! The vintage camera was exactly as described and arrived quickly. Highly
                              recommend!</p>
                      </div>
                      <div class="mb-3">
                          <div class="d-flex align-items-center mb-2">
                              <img src="https://via.placeholder.com/40" alt="Reviewer" class="rounded-circle me-2">
                              <div>
                                  <strong>Carlos R.</strong>
                                  <div class="rating">
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star-fill"></i>
                                      <i class="bi bi-star"></i>
                                  </div>
                              </div>
                          </div>
                          <p>Good communication and fair prices. The leather jacket was in great condition.</p>
                      </div>
                      <a href="#" class="btn btn-outline-primary">View All Reviews</a>
                  </div>
              </div>
          </div>
      </div>
      @endsection

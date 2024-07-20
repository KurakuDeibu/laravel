  <style>
      .profile-container {
          max-width: 800px;
          margin: 2rem auto;
          padding: 2rem;
          background-color: white;
          border-radius: 8px;
          box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      }

      .profile-picture {
          width: 150px;
          height: 150px;
          object-fit: cover;
          border-radius: 50%;
          border: 3px solid #0d6efd;
      }

      .btn-primary {
          background-color: #0d6efd;
          border-color: #0d6efd;
      }

      .btn-primary:hover {
          background-color: #0b5ed7;
          border-color: #0b5ed7;
      }

      .rating {
          color: #ffc107;
      }
  </style>


  @extends('layouts.app')
  @section('title', 'Profile')
  @include('navbar.nav-auth')

  @section('content')


      <div class="container mt-4">
          <div>
              <div class="row">
                  <div class="col-md-4 text-center">

                      <!-- BREADCRUMB -->
                 <nav aria-label="breadcrumb" class="mb-4">
                          <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="/">Home</a></li>
                              <li class="breadcrumb-item"><a href="/profile">Profile</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
                          </ol>
                      </nav> 

                      <div class="position-relative mb-3">
                          <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-picture">
                          <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0"
                              style="border-radius: 50%;" onclick="changeProfileImage()">
                              <i class="bi bi-pencil"></i>
                          </button>
                      </div>
                      <h4>John Doe</h4>
                      <p class="text-muted">@thriftyshopperist</p>
                      <p><i class="bi bi-geo-alt-fill"></i> <span>Mandaue, Cebu</span></p>
                      <p><i class="bi bi-calendar3"></i> Joined June 2024</p>
                      <div class="rating mb-3">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>
                          <span class="ms-2">4.5 (42 reviews)</span>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <h3>Profile Settings</h3>
                      <form>
                          <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" value="test@gmail.com">
                          </div>
                          <div class="mb-3">
                              <label for="username" class="form-label">Username</label>
                              <input type="text" class="form-control" id="username" value="thriftyshopper123">
                          </div>
                          <div class="mb-3">
                              <label for="location" class="form-label">Location</label>
                              <input type="text" class="form-control" id="location" value="Manila, Philippines">
                          </div>
                          <div class="mb-3">
                              <label for="about" class="form-label">About Me</label>
                              <textarea class="form-control" id="about" rows="3">Hi there! I'm John, a passionate thrift shopper and seller. I love finding unique items and giving them a new home. Always on the lookout for vintage treasures and gently used modern pieces. Let's trade!</textarea>
                          </div>


                          <div class="mb-3">
                              <label for="password" class="form-label">Change Password</label>
                              <input type="password" class="form-control" id="password" placeholder="New password">
                          </div>
                          <div class="mb-3">
                              <label for="confirmPassword" class="form-label">Confirm New Password</label>
                              <input type="password" class="form-control" id="confirmPassword"
                                  placeholder="Confirm new password">
                          </div>
                          <button type="submit" class="btn btn-primary">Save Changes</button>
                      </form>

                      <h4 class="mt-4">Notification Settings</h4>
                      <form>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="emailNotifications" checked="">
                              <label class="form-check-label" for="emailNotifications">
                                  Receive email notifications
                              </label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="smsNotifications">
                              <label class="form-check-label" for="smsNotifications">
                                  Receive SMS notifications
                              </label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="newListingNotifications" checked="">
                              <label class="form-check-label" for="newListingNotifications">
                                  Notify me about new listings in my area
                              </label>
                          </div>
                          <button type="submit" class="btn btn-primary">Save Notification Settings</button>
                      </form>

                      <h4 class="mt-4">Privacy Settings</h4>
                      <form>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="publicProfile" checked="">
                              <label class="form-check-label" for="publicProfile">
                                  Make my profile public
                              </label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="showEmail">
                              <label class="form-check-label" for="showEmail">
                                  Show my email to other users
                              </label>
                          </div>
                          <div class="form-check mb-2">
                              <input class="form-check-input" type="checkbox" id="allowMessages" checked="">
                              <label class="form-check-label" for="allowMessages">
                                  Allow other users to send me messages
                              </label>
                          </div>
                          <button type="submit" class="btn btn-primary">Save Privacy Settings</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      @endsection

      <script>
          // Existing Bootstrap script
          var bootstrapScript = document.currentScript.innerHTML;

          // Add new function for changing profile image
          function changeProfileImage() {
              const input = document.createElement('input');
              input.type = 'file';
              input.accept = 'image/*';
              input.onchange = function(event) {
                  const file = event.target.files[0];
                  if (file) {
                      const reader = new FileReader();
                      reader.onload = function(e) {
                          document.querySelector('.profile-picture').src = e.target.result;
                      }
                      reader.readAsDataURL(file);
                  }
              };
              input.click();
          }

          // Combine scripts
          document.currentScript.innerHTML = bootstrapScript + '\n' + changeProfileImage.toString();
      </script>
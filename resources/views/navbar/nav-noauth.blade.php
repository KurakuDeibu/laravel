<style>
  .hoverlink {
    position: relative;
    display: inline-block;
    text-decoration: none; /* Remove default underline */
  }

  .hoverlink::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px; /* Adjust to control the gap between text and underline */
    height: 1px; /* Same as your original border-bottom width */
    width: 0%; /* Initial width of the underline */
    background-color: #4267B2;
    transition: width 0.3s ease; /* Smooth transition effect */
  }

  .hoverlink:hover::after {
    width: 100%; /* Full width on hover */
  }
  
  #logo {
    float: left;
    width: 12rem;
    height: 70px;
    background: url('img/thriftytrade-logo.png') left/contain no-repeat;
    transition: all 0.5s ease; /* Add transition for smooth effect */
  }

  #logo:hover {
    background: url('img/thriftytrade-logo.png') left/contain no-repeat;
    transform: scale(1.2); /* Example of scaling up */
  }

  @keyframes logoAnimation {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
  }

</style>

<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" id="logo" href="/"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <div class="hoverlink">
            <li class="nav-item">
              <a class="nav-link" href="/marketplace">
                <i class="bi bi-shop"></i> Marketplace
              </a>
            </li>
          </div>

        </ul>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/chatui">
              <i class="bi bi-chat"></i>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/notifications">
              <i class="bi bi-bell"></i>
            </a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary" href="/register">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
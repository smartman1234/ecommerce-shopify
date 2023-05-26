<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="section-a"> <a data-tilt style="color:#978d07 ;" class="navbar-brand" href="/">Ecommerce</a>
  </div>

  <div>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto">

      {{-- Admin --}}
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="aboutDropLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Admin
        </a>
        <ul class="dropdown-menu" aria-labelledby="aboutDropLink">
          <li><a class="dropdown-item" href="/aboutUs">About Us</a></li>
          <li><a class="dropdown-item" href="/contactUs">Contact Us</a></li>
          <li><a class="dropdown-item" href="/adminHomepage">Admin Homepage</a></li>
          <li><a class="dropdown-item" href="/addProduct">Add Product</a></li>
          <li><a class="dropdown-item" href="/productTable">View Products</a></li>
          <li><a class="dropdown-item" href="/orders">View Orders</a></li>
        </ul>
      </li>

    </ul>
  </div>
</nav>

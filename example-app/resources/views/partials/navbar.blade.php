{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ $titles === 'Home' ? 'active' : '' }}" href="/">Home</a>
                <a class="nav-link {{ $titles === 'About' ? 'active' : '' }}" href="/about">About</a>
                <a class="nav-link {{ $titles === 'Posts' ? 'active' : '' }}" href="/blog">Blog</a>
            </div>
        </div>
    </div> --}}

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger ">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request ()->segment(1) == '' ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request ()->segment(1) == 'about' ? 'active' : '' }}" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class=" nav-link {{ request ()->segment(1) == 'blog' ? 'active' : '' }}" href="/blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request ()->segment(1) == 'categories' ? 'active' : '' }}" href="/categories">Categories</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse m-2"></i>My Dashboard</a>
                      </li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li>
                        <form action="/logout" method="post">
                          @csrf
                          <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right m-2"></i>Logout</button>
                        </form>
                      </li>
                    </ul>
                  </li>
                @else
                  <li class="nav-item">
                    <a href="/login" class="nav-link {{ request ()->segment(1) == 'login' ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right m-2"></i>Login</a>
                  </li>
                @endauth
              </ul>
            
          </div>
        </div>
      </nav>
</nav>

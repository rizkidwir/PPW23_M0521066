    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

     <!-- Navbar Start -->
     <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
                <a href="index.html" class="navbar-brand">
                    <img class="img-fluid" src="img/logo.png" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="welcome" class="nav-item nav-link">Home</a>
                        <a href="#" class="nav-item nav-link">About</a>
                        <a href="room" class="nav-item nav-link">room</a>
                        <a href="contact" class="nav-item nav-link">Contact</a>
                        @auth
                        <li class="nav-item nav-link dropdown">
                            <a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                              Welcome, {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <li><form action="/logout" method="POST">
                                    @csrf
                                    <button typ="submit" class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i>Logout</button>
                                </form></li>
                            </ul>
                        </li>
                        @else
                        <a href="login" class="nav-item nav-link">Login</a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

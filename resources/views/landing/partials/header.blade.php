<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="{{ route('landing.index') }}" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
                    <!-- <img src="{{ asset('restoran/img/logo.png') }}" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="{{ route('landing.index') }}" class="nav-item nav-link{{ request()->routeIs('landing.index') ? ' active' : '' }}">Home</a>
                        <a href="{{ route('landing.about') }}" class="nav-item nav-link{{ request()->routeIs('landing.about') ? ' active' : '' }}">About</a>
                        <a href="{{ route('landing.service') }}" class="nav-item nav-link{{ request()->routeIs('landing.service') ? ' active' : '' }}">Service</a>
                        <a href="{{ route('landing.menu') }}" class="nav-item nav-link{{ request()->routeIs('landing.menu') ? ' active' : '' }}">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle{{ request()->routeIs('landing.booking', 'landing.team') ? ' active' : '' }}" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('landing.booking') }}" class="dropdown-item{{ request()->routeIs('landing.booking') ? ' active' : '' }}">Booking</a>
                                <a href="{{ route('landing.team') }}" class="dropdown-item{{ request()->routeIs('landing.team') ? ' active' : '' }}">Our Team</a>
                                <a href="{{ route('landing.index') }}#testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{ route('landing.booking') }}" class="btn btn-primary py-2 px-4">Book A Table</a>
                </div>
            </nav>

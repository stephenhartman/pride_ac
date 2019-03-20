<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar-static-top navbar-expand-md">
    <!-- Collapsed Hamburger -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Branding Image --> 
    <a class="navbar-brand" href="{{ url('/') }}">
        <span><img itemprop="image" class=" navbar-logo" style="" src="{{ url('/image/logo64px.png') }}" height="30px">
        </span>
        Pride AC Jacksonville
    </a>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="{{ Request::is('products') || Request::is('goodman') || Request::is('american') ? 'active' : '' }} nav-item">
                <a href="{{ route('products.index') }}" class="nav-link">Prices</a>
            </li>
            <li class="dropdown nav-item"> <a class="dropdown-toggle nav-link" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-item"><a href="#">Service and Repairs</a></li>
                    <li class="dropdown-item"><a href="#">Installations</a></li>
                    <li class="dropdown-item"><a href="#">Smart Thermostats</a></li>
                    <li class="dropdown-item"><a href="#">Coil Cleanings</a></li>
                    <li class="dropdown-item"><a href="#">Maintenance Contracts</a></li>
                </ul>
            </li>
            <li class="{{ Request::is('about') ? 'active' : '' }} nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
            <li class="{{ Request::is('contact') ? 'active' : '' }} nav-item"><a href="{{ route('contact.create') }}" class="nav-link">Get a Quote</a></li>
            <li class="nav-item"><a href="https://www.ftlfinance.com" target="_blank" class="nav-link">Financing</a></li>
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="tel:+19045750794" class="nav-link">Call Us: (904)575-0794</a>
            </li>
            <li class="nav-item"><a href="tel:+19049453330" class="nav-link">Español: (904)945-3330</a>
            </li>
            <!-- Authentication Links -->
            @if (Auth::check())
            <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                </a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <li class="dropdown-item"><a href="{{ route('photos.index') }}">Photos</a></li>
                    <li class="dropdown-item"><a href="{{ route('contact.index') }}">Contacts</a></li>
                    <li class="dropdown-item"> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}"
                        method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</nav>
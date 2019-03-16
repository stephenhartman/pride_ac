<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <span>
                    <img itemprop="image" class="navbar-left navbar-logo" style="" src="{{ url('/image/logo64px.png') }}" height="30px">
                </span>
                Pride AC Jacksonville
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('products') || Request::is('goodman') || Request::is('american') ? 'active' : '' }}"><a href="{{ route('products.index') }}">Prices</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Service and Repairs</a></li>
                        <li><a href="#">Installations</a></li>
                        <li><a href="#">Smart Thermostats</a></li>
                        <li><a href="#">Coil Cleanings</a></li>
                        <li><a href="#">Maintenance Contracts</a></li>
                    </ul>
                </li>
                <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                <li class="{{ Request::is('contact') ? 'active' : '' }}"><a href="{{ route('contact.create') }}">Get a Quote</a></li>
                <li><a href="https://www.ftlfinance.com" target="_blank">Financing</a></li>
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="tel:+19045750794">Call Us: (904)575-0794</a></li>
                <li><a href="tel:+19049453330">Para Español: (904)945-3330</a></li>
                <!-- Authentication Links -->
                @if (Auth::check())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('photos.index') }}">Photos</a></li>
                            <li><a href="{{ route('contact.index') }}">Contacts</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
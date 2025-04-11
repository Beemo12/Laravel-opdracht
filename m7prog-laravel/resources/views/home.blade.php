<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">MySite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('welcome') ? 'text-white' : 'text-dark' }}"
                            href="{{ route('welcome') }}">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" a href="{{route('main')}}">Main</a></li> 
                    <li class="nav-item"><a class="nav-link" a href="{{route('about')}}">About</a></li>
                    <li class="nav-item"><a class="nav-link" a href="{{route('detail')}}">Detail</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            More
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="services.html">Services</a></li>
                            <li><a class="dropdown-item" href="portfolio.html">Portfolio</a></li>
                            <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
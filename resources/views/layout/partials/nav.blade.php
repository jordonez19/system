
{{-- Nav Bar --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="navbar-brand nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ChaviBlog
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </li>
        </ul>
    </div>
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item {{request()->routeIs('home') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item {{request()->routeIs('contact') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
               {{--  <li class="nav-item {{request()->routeIs('language') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('language')}}">Language</a>
                </li> --}}
                <li class="nav-item {{request()->routeIs('project.*') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('project.index')}}">projects</a>
                </li>
                <li class="nav-item {{request()->routeIs('about') ? 'active' : ''}}">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

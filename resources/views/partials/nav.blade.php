
{{-- Nav Bar --}}

<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">ChaviWeb</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <li class="nav-item  {{ setActive('home')}}">
                    <a class="nav-link" href="{{route('home')}}">Home</a>
                </li>
                <li class="nav-item {{ setActive('about')}} ">
                    <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item  {{ setActive('contact')}} ">
                    <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>
                <li class="nav-item  {{ setActive('project.index')}} ">
                    <a class="nav-link" href="{{route('project.index')}}">projects</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

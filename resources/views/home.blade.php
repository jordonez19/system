@extends('layout.template')
@section('title','Home')
@section('content')

<h1 class="m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2" style="font-size: 30px;">home</h1>


<div id="carouselExampleDark" class="carousel carousel-light slide shadow-lg p-2 mb-5 bg-body rounded" data-bs-ride="carousel" style="opacity: 0.96">
        <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="https://wallpapercave.com/wp/wp4221837.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block text-light">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="https://i.pinimg.com/originals/be/b5/d8/beb5d8049dd3f98c6bf2ea2c3366d198.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block text-light">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images4.alphacoders.com/102/1029255.jpg" class="d-block w-100 " alt="...">
            <div class="carousel-caption d-none d-md-block text-light">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
</div>

{{--

--}}
@endsection
{{--         <img src="https://wallpapercave.com/wp/wp4221837.jpg" class="d-block w-100 " alt="...">
            <img src="https://i.pinimg.com/originals/be/b5/d8/beb5d8049dd3f98c6bf2ea2c3366d198.jpg" class="d-block w-100 " alt="...">
            <img src="https://images4.alphacoders.com/102/1029255.jpg" class="d-block w-100 " alt="...">
    --}}

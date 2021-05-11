@extends('layout.template')
@section('title','Home')
@section('blog-img')

{{-- Blog image --}}
    <div class="blog-img">
        <img src="https://i.pinimg.com/originals/b8/59/ef/b859efc3d0f233861668dd03ea9eddc1.jpg" alt="">
    </div>
{{-- End Blog image --}}

@section('content')
{{-- Blog Container--}}
    <div class="container">
        <h1 class="h1 text-uppercase" >Welcome to ChaviBlog</h1><br>
        <div class="container">
{{-- image --}}
            <img class="img-chavi shadow-lg" src="https://i.pinimg.com/originals/b8/59/ef/b859efc3d0f233861668dd03ea9eddc1.jpg" style= "opacity:0.9" alt=""><br><br>
{{-- End image --}}

{{-- Sumary --}}
            <br><h1>SUMARY</h1><br>
            <p class="shadow-lg  " style="  text-align:center; font-size:30px ;background-color: rgb(26, 25, 25); color:#fff; border-radius:50%;  padding:8%">
                I am a responsible person that is eager for learning more about new languages and getting new skills as a junior developer, right now I don't have experience, I have been working in my own projects or doing some courses online, I would like to add that I am falling in love coding and I would like to get started if I get the chance.
            </p>
{{-- End Sumary --}}
        </div>
    </div>
{{-- End Blog Container--}}

@endsection












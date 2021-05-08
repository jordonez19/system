@extends('layout.template')
@section('title',$project->title)
@section('content')
<div class="container">
    <h1 class=" m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2" style="font-size: 30px;" > PROJECT {{$project->title}} </h1>
    <div class="container">
        <p class=" mt-5 text-capitalize text-center h4 "> {{$project->description}} </p>
    </div>
</div>
@endsection


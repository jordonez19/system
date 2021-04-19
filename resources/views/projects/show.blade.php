@extends('layout.template')
@section('title',$project->title)
@section('content')
<div class="container">
<h1 class=" m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2" style="font-size: 30px;" > {{$project->title}} </h1>
<p class=" m-2 text-capitalize h4 "> {{$project->description}} </p>
</div>

@endsection


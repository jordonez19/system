@extends('layout.template')
@section('title',$project->title)
@section('content')

<div class="container">
{{-- Title --}}
    <h1 class=" m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2" style="font-size: 30px;" > PROJECT {{$project->title}} </h1>
{{-- End Title --}}

{{-- Description & URL --}}
    <div class="container">
            <p class=" mt-5 text-capitalize text-center h4 "> {{$project->description}} </p>
            <p class=" mt-5 text-capitalize text-center "> <strong>URL:</strong> {{$project->url}}  </p>
    </div>
{{-- End Description & URL --}}
</div>

@endsection


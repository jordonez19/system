@extends('layout.template')
@section('title','edit')
@section('content')
<h1 class="m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2" style="font-size: 30px;" >edit project {{$project->title}}</h1>

<form method="POST" action="{{route('project.update', $project->id)}}">
    @csrf {{-- token para q el formulario se vuelva mas seguro --}}
    @method('PATCH')

    <div class="container m-2">
        <div class="mb-3">
            <label class="form-label fw-bold ">Name</label>
            <input name="title" value="{{old('title', $project->title)}}" type="text" class="form-control"  >
            <br>
            {!! $errors->first('title', '<li class="btn btn-danger">:message</li> ')!!}

        </div>


        <div class="mb-3">
            <label class="form-label fw-bold ">Description</label>
            <input name="description" value="{{old('description', $project->description)}}" type="text" class="form-control" >
            <br>
            {!! $errors->first('description', '<li class="btn btn-danger">:message</li> ')!!}
        </div>

        <br>
        <div>
            <a href="{{route('project.index')}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-dark">Submit</button>

        </div>
    </div>
</form>
@endsection


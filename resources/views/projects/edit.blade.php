@extends('layout.template')
@section('title','edit')
@section('content')
{{-- Title --}}
<h1 class="m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2" style="font-size: 30px;" >edit project {{$project->title}}</h1>
{{-- End Title --}}
{{-- Form Create --}}
<form method="POST" action="{{route('project.update', $project->id)}}">
    @csrf {{-- token para q el formulario se vuelva mas seguro --}}
    @method('PATCH')
{{-- Name --}}
    <div class="container m-2">
        <div class="mb-3">
            <label class="form-label fw-bold ">Name</label>
            <input name="title" value="{{old('title', $project->title)}}" type="text" class="form-control"  >
            <br>
            {!! $errors->first('title', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{--End  Name --}}

{{--URL--}}
        <div class="mb-3">
            <label class="form-label fw-bold ">URL</label>
            <input name="url" value="{{old('url', $project->url)}}" type="text" class="form-control" >
            <br>
            {!! $errors->first('url', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{--End URL--}}

{{--Description--}}
        <div class="mb-3">
            <label class="form-label fw-bold ">Description</label>
            <input name="description" value="{{old('description', $project->description)}}" type="text" class="form-control" >
            <br>
            {!! $errors->first('description', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{--End Description--}}

{{-- upload file --}}
<div class="mb-3">
    <label for="">Image:</label>
    <input type="file" name='image'><br>
    {!! $errors->first('image', '<li class="btn btn-danger">:message</li> ')!!}
</div>
{{-- End upload file --}}

{{--  Back & Submit --}}
        <br>
        <div>
            <a href="{{route('project.index')}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
{{--End   Back & Submit --}}

    </div>
</form>
{{-- End Form Create --}}
@endsection


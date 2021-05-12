@extends('layout.template')
@section('title','Create')
@section('content')
<h1 class="m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2" style="font-size: 30px;" >create new project</h1>
{{-- Form Create --}}
<form method="POST" action="{{route('project.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="container m-2">
{{-- Name --}}
        <div class="mb-3">
            <label class="form-label fw-bold ">Name</label>
            <input name="title" value="{{old('email')}}" type="text" class="form-control"  >
            <br>
            {!! $errors->first('title', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{-- End Name --}}

{{--URL--}}
        <div class="mb-3">
            <label class="form-label fw-bold ">URL</label>
            <input name="url" value="{{old('email')}}" type="text" class="form-control" >
            <br>
            {!! $errors->first('url', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{--End URL--}}

{{--Description--}}
        <div class="mb-3">
            <label class="form-label fw-bold ">Description</label>
            <input name="description" value="{{old('email')}}" type="text" class="form-control" >
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
{{-- End Back & Submit --}}
    </div>
</form>
{{-- End Form Create --}}


@endsection


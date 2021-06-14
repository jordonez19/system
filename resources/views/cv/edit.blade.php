@extends('layout.template')
@section('title','About')
@section('content')


{{-- Title  --}}
<h1 class=" text-uppercase h1" >create skills</h1>
{{-- End-Title  --}}


{{-- Form Create --}}
<form method="POST" action="{{route('cv.index')}}">
    @csrf
    <div class="container m-2">
{{-- Name --}}
        <div class="mb-1">
            <label class="form-label fw-bold ">Name</label>
            <input name="title" value="{{old('title')}}" type="text" class="form-control"  >
            <br>
            {!! $errors->first('title', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{-- End Name --}}

{{--URL--}}
<div class="mb-1">
    <label class="form-label fw-bold ">Date </label>
    <input name="date" value="{{old('date')}}" type="date" placeholder="mm/dd/yyyy" class="form-control" >
    <br>
    {!! $errors->first('date', '<li class="btn btn-danger">:message</li> ')!!}
</div>
{{--End URL--}}

{{--Description--}}
        <div class="mb-1">
            <label class="form-label fw-bold ">Description</label>
            <input name="description" value="{{old('description')}}" type="text" class="form-control" >
            <br>
            {!! $errors->first('description', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{--End Description--}}

{{--URL--}}
        <div class="mb-1">
            <label class="form-label fw-bold ">Skills</label>
            <ol>
                <li><input name="skills[]" value="{{old('skills')}}" type="text" class="mt-2 form-control" ></li>
                <li><input name="skills[]" value="{{old('skills')}}" type="text" class="mt-2 form-control" ></li>
                <li><input name="skills[]" value="{{old('skills')}}" type="text" class="mt-2 form-control" ></li>
                <li><input name="skills[]" value="{{old('skills')}}" type="text" class="mt-2 form-control" ></li>
            </ol>
            <br>
            {!! $errors->first('skills', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
{{--End URL--}}

{{--  Back & Submit --}}
        <br>
        <div>
            <a href="{{route('cv.index')}}" class="btn btn-danger">Back</a>
            <button type="submit" class="btn btn-dark">Submit</button>
        </div>
{{-- End Back & Submit --}}
    </div>
</form>
{{-- End Form Create --}}



@endsection




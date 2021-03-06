@extends('layout.template')
@section('title','Projects')
@section('content')

{{-- Title  --}}
    <h1 class="m-2 mb-5 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2   shadow-lg  bg rounded" style="font-size: 30px;"  >Projects</h1>
{{-- end-Title  --}}

{{-- CREATE BUTTON --}}
<div class="container">
    <div style="text-align-last: right;" class="text-right text-light ">
        <a class='btn btn-lg btn-dark mb-2 text-capitalize justify-content-center right' href='{{route('project.create')}}'>Create</a>
    </div><br>
{{-- END CREATE BUTTON --}}

{{-- PROJECT --}}
    <div class="row">
        @forelse ($projects as $project )
            <div class="col-4">
                <div class="card shadow-lg  bg rounded border-gray">
                    <div class="card-header  d-flex justify-content-center ">
                        <a class="h2 text-decoration-none text-dark  text-uppercase card-title" href="{{route('project.show',$project)}}">{{$project->title}} </a>
                    </div>

                    {{-- IMAGES --}}
                    <div class="card-header  ">
                        <a href="{{route('project.show',$project)}}">
                            <img src="{{$project->image}}"  style = "height: 190px; width: 100%;" alt="...">
                        </a>
                    </div>
                    {{-- END IMAGES --}}

                    {{-- Description Description --}}
                    <div class="card-header text-center">
                        <h3>Description</h3>
                        <p class="card-text user-select-none">{{$project->description}}</p>
                        <i class="fab fa-github"></i> <small>Git hub</small><br>
                        <a href="{{$project->url}}">{{$project->url}}</a>
                        {{-- END Description Description --}}

                        {{-- DELETE PROJECT --}}
                        <form action="{{route('project.destroy', $project)}}" method="post">
                            <a class='btn btn-dark' href="{{route('project.edit', $project)}}">Edit</a>
                            @csrf @method('DELETE')
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </form><br>
                        {{-- END DELETE PROJECT --}}
                    </div>
                </div><br><br>
                {{-- END PROJECT --}}
            </div>
        @empty
            <li class="text-red h3 mb-3">There are not projects, <b class="text-dark">Let's create a new project!.</b></li>
        @endforelse
            {{ $projects->links()}}
    </div>
{{-- End Content projects --}}
</div>




@endsection






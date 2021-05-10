@extends('layout.template')
@section('title','Projects')
@section('content')

    {{-- Title  --}}
    <h1 class="m-2 mb-5 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2   shadow-lg  bg rounded" style="font-size: 30px;"  >languages</h1>
    {{-- end-Title  --}}

    {{-- Content projects --}}
    <div class="container">
        <div class="text-light ">
            <a class='btn btn-lg btn-dark mb-2 text-capitalize' href='/project/create'>Create</a>
            {{ $projects->links()}}
        </div>
        @forelse ($projects as $project )
            <div class="card shadow-lg  bg rounded border-gray">
                <div class="card-header  d-flex justify-content-center ">
                    <a class="h2 text-decoration-none text-dark  text-uppercase card-title" href="{{route('project.show',$project)}}">{{$project->title}} </a>

                </div>
                <div class="card-header  d-flex justify-content-center ">
                    <img src="/images/blog.png" class="card-img-top d-flex justify-content-center " style="height: 8cm; width:80%;"
                    alt="...">
                </div>
                <div class="card-header text-center">
                    {{-- <p class="card-text user-select-none">{{$project->url}}</p> --}}

                    <p class="card-text user-select-none">{{$project->description}}</p>
                    <form action="{{route('project.destroy', $project)}}" method="post">
                        <a class='btn btn-dark' href="{{route('project.edit', $project)}}">Edit</a>
                        @csrf @method('DELETE')
                        <button type='submit' class='btn btn-danger'>Delete</button>
                    </form><br>
                </div>
            </div>
            <br><br>
        @empty
            <li class="text-red h3 mb-3">There are not projects, <b class="text-dark">Let's create a new one.</b></li>
        @endforelse
    </div>
    {{-- End Content projects --}}

@endsection






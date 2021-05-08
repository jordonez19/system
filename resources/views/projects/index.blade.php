@extends('layout.template')
@section('title','Portafolio')
@section('content')

    {{-- Title  --}}
    <h1 class="m-2 mb-5text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2   shadow-lg  bg rounded" style="font-size: 30px;"  >Projects</h1>
    {{-- end-Title  --}}

    <div class="text-light ">
        <a class='btn btn-lg btn-dark ' href='/project/create'>Create</a>
        {{ $projects->links()}}
    </div>
    @forelse ($projects as $project )
        <div class="card">
            <div class="card-header">
                <a class="h2 text-decoration-none text-dark card-title" href="{{route('project.show',$project)}}">{{$project->title}} </a>
                <img src="/images/blog.png" class="card-img-top" alt="...">

            </div>
            <div class="card-body">
                <p class="card-text user-select-none">{{$project->description}}</p>
                <form action="{{route('project.destroy', $project)}}" method="post">
                    <a class='btn btn-dark' href="{{route('project.edit', $project)}}">Edit</a>
                    @csrf @method('DELETE')
                    <button type='submit' class='btn btn-danger'>Delete</button>
                </form>
            </div>
        </div>
    @empty
        <li class="text-red h3 mb-3">There are not projects, <b class="text-dark">Let's create a new one.</b></li>
    @endforelse










@endsection






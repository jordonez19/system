@extends('layout.template')
@section('title','Portafolio')
@section('content')
{{-- Title  --}}
<h1 class="m-2 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2   shadow-lg  bg rounded" style="font-size: 30px;"  >Projects</h1>
{{-- Table --}}
<div class="container mt-4 ">
    <table class="table table-secondary table-hover shadow-lg p-2 mb-5 bg-body rounded" >
        <tr class="pe-auto" >
            <th scope="col"></th>
            <th scope="col" class="h4 fw-bold user-select-none">Title</th>
            <th scope="col" class="h4 fw-bold user-select-none">Description</th>
        <th scope="col" class="h4 fw-bold user-select-none">Date</th>
        <th scope="col" class="h4 fw-bold user-select-none"></th>
        <th scope="col" class="h4 fw-bold user-select-none"></th>
        {{-- <th scope="col" class="h4 fw-bold">time</th> --}}
        </tr>
        @forelse ($projects as $project)
            <tr class="pe-auto" >
                <th scope="row"></th>
                <td class="text-capitalize ps-4"><a class="text-decoration-none text-dark" href="{{route('project.show',$project)}}">{{$project->title}}</a></td>
                <td class="text-capitalize ps-4"><p>{{$project->description}}</p></td>
                <td class="text-capitalize ps-4">{{$project->created_at->format('d-m-Y')  }}</td>
                <td ><a class='btn btn-dark  ' href="{{route('project.edit', $project)}}">Edit</a></td>
                <td ><a class='btn btn-danger' href='/project/create'>Delete</a></td>
                {{-- <td class="text-capitalize">{{$portafolioItem->uṕdated_at->format('hh:mm:ss') }}</td> --}}
            </tr>
            @empty
                <li class="btn btn-danger btn-lg text-dark mb-3">There is not projects yet!!, <b class="text-dark">Let's create a new project!!</b></li>
        @endforelse
        <br>
    </table>

    <div class="text-light ">{{ $projects->links()}}</div>
    <a class='btn btn-dark' href='/project/create'>Create</a>

</div>
@endsection


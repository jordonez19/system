@extends('layout.template')
@section('title','contact')
@section('content')

<h1 class="ms-4 text-uppercase pe-none btn btn-dark btn-lg d-grid gap-2 " style="font-size: 30px;" >Contacts</h1>

    <form method="POST" action="">
        @csrf {{-- token para q el formulario se vuelva mas seguro --}}
        <div class="container m-2">
            <div class="mb-3">
                <label class="form-label fw-bold ">Name</label>
                <input name="name" value="{{old('email')}}" type="text" class="form-control" placeholder=" Name here"  >
            </div>

                {!! $errors->first('name','<li class="btn btn-danger">:message</li>') !!}

            <div class="mb-3">
                <label class="form-label fw-bold ">Email</label>
                <input name="email" value="{{old('email')}}" type="text" class="form-control" placeholder=" Email here" >
            </div>

                    {!! $errors->first('email','<li class="btn btn-danger">:message</li>') !!}

            <div class="mb-3">
                <label class="form-label fw-bold ">Subject</label>
                <input name="subject" value="{{old('email')}}" type="text" class="form-control" placeholder=" Subject here" >
            </div>
                {!! $errors->first('subject','<li class="btn btn-danger">:message</li>') !!}
            <div class="mb-3">
                <label class="form-label fw-bold ">Comments:</label>
                <textarea name="comments" class="form-control" placeholder="Leave a comment here"></textarea>
            </div>
                {!! $errors->first('comments','<li class="btn btn-danger">:message</li>') !!}
            <br>
            <div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </div>
    </form>


@endsection



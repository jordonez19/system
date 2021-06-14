@extends('layout.template')
@section('title','About')
@section('content')


        {{-- Title  --}}
<h1 class=" text-uppercase h1" >create skills</h1>
        {{-- End-Title  --}}


        {{-- Form Create --}}
<form method="POST" id="dynamic_form" action="{{route('cv.index')}}">
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

        {{--Date--}}
        <div class="mb-1">
            <label class="form-label fw-bold ">Date </label>
            <input name="date" value="{{old('date')}}" type="date" placeholder="mm/dd/yyyy" class="form-control" >
            <br>
            {!! $errors->first('date', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
        {{--End Date--}}

        {{--Description--}}
        <div class="mb-1">
            <label class="form-label fw-bold ">Description</label>
            <textarea name="description" cols="30" rows="10" value="{{old('description')}}" type="text" class="form-control" >

            </textarea>
            <br>
            {!! $errors->first('description', '<li class="btn btn-danger">:message</li> ')!!}
        </div>
        {{--End Description--}}

    {{--Skills--}}
    <div class="table">
        <table id="user_table">
            <thead>
                <tr style="border:none;">
                    <th width = "100%" >Skills</th>
                    <th width = "40%" >action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border:none;">
                    <td></td>
                </tr>
            </tbody>
        </table>
        {{-- errors --}}
        {!! $errors->first('skills', '<li class="btn btn-danger">:message</li> ')!!}
        {{-- errors --}}
    </div>
    {{--End Skills--}}

        {{--  Back & Submit --}}
        <br>
        <div>
            <a href="{{route('cv.index')}}" class="btn btn-danger">Back</a>
            <button type="submit" id="save" name="save" class="btn btn-dark">Submit</button>
        </div>
        {{-- End Back & Submit --}}
    </div>
</form>
        {{-- End Form Create --}}








<script>

    $(document).ready(function(){
        var count = 1;

        dynamic_field(count);

        function  dynamic_field(number)
        {
            var html = '<tr >'; /* style="border:none;" */
            html += '<td> <input type="text" name = "skills[]" class="form-control"/></td>;
                if(number > 1)
                {
                    html += '<td> <button type="button" name = "remove" id = "remove" class="btn btn-danger">Remover</button></td></tr>';
                    $('tbody').append(html);
                }
                else
                {
                    html += '<td> <button type="button" name = "add" id = "add" class="btn btn-dark">Agregar</button></td></tr>';
                    $('tbody').html(html);
                }
        }

        $('#add').click(function()
        {
            count++;
            dynamic_field(count);
        });

        $(document).on('click','#remove',function()
        {
            count--;
            dynamic_field(count);
        });

        $('#dynamyc_form').on('submit, funtion(event)
        {
            event.preventDefault();
            $.ajax({
                url:'{{route("cv.store") }}',
                method: 'post',
                data:$(this).serialize(),
                dataType : 'json',
                beforeSend:function()
                {
                    $('#save').attr('disabled', 'disabled');
                },

                /* success:function(data)
                {
                    if(data.error)
                    {
                        var error_html = '';
                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<p>' + data.error[count] + '</p>';
                        }
                        $('#result').html('<div class="alert alert-danger">' + error_html + '</div>');
                    }
                    else
                    {
                        dynamic_field(1);
                        $('#result').html(<div class="alert alert-success">'+ data.success +'</div>);
                    }
                    $('#save').attr('disabled', false);
                }*/
            });
        });
    });

</script>


@endsection




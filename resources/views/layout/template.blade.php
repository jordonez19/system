<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap" rel="stylesheet">

<style>
    .blog-img {
        width: 100%;
        height: 407px;
        display: flex;
    }
    img{
        width: 100%;
    }
    .active{
        background-color: rgb(59, 59, 59);
    }
    a.page-link{
        color: black;
    }
    span.page-link {
        color: rgb(0, 0, 0);
    }
    .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #3b3b3b;
    border-color: #070707;
}
h1{
    text-align: center;
}
.img-chavi{
    border-radius: 50%;
}


</style>

</head>
<body>


@yield('blog-img')



{{-- Nav Bar --}}
@include('layout.partials.nav')
{{-- End Nav Bar --}}

{{-- Content --}}
<div class="container mt-5 ">
    @yield('content')
</div>
{{-- End Content --}}

{{-- Footer --}}
<br><br>
<div class=" w-100 bg-gradient-dark">
    @include('layout.partials.footer')
</div>
{{-- End Footer --}}


{{-- Script --}}
<div class="script">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</div>
{{-- End Script --}}

</body>
</html>

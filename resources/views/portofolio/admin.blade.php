<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('/images/Brance-logos_transparent.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/82691298ba.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Brance - Portofolio</title>
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('/images/loader.gif') }}" alt="">
    </div>
    <div class="prf-container">
        @include('layouts.navbar')
        <div class="prf-title">
            <h1>Portofolio</h1>
        </div>
        <div class="login">
            @if($login)
            <a href="/actionlogout">LOGOUT</a>
            @else
            <a href="/login">LOGIN ADMIN</a>
            @endif
        </div>
        <div class="prf-add">
            <a href="portofolio/create"><i class="fa-solid fa-plus"></i>Tambah Data</a>
        </div>
        @foreach ($content as $prf)
            <div class="wrap-prf">
                <div class="prf-img">
                    <img src="{{ $prf->img }}" alt="prf">
                </div>
                <div class="prf-txt">
                    <h3 class=""><a class="yellow-color"
                            href="{{ url('portofolio/show/' . $prf->id) }}">{{ $prf->name }}</a></h3>
                    <p>{{ $prf->desc }}</p>
                    <p>Tahun Pembuatan : {{ $prf->year }}</p>
                </div>
                <div class="prf-action">
                    <a class="yellow-color" onclick="return confirm('Anda Yakin?')" href="{{url('portofolio/delete/'. $prf->id)}}"><i class="fa-solid fa-trash"></i></a>
                    <a class="yellow-color" href="{{url('portofolio/edit/'. $prf->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                </div>
            </div>
        @endforeach
        @include('layouts.footer')
    </div>
    <script>
        $(window).on("load", function() {
            $(".preloader").fadeOut(1500);
        });
    </script>
</body>

</html>

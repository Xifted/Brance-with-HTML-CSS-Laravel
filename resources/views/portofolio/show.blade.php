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
    <div class="show-container">
        @include('layouts.navbar')
        <div class="prf-title">
            <h1>Details Product</h1>
        </div>
        <div class="prf-add">
            <a href="/portofolio"><i class="fa-solid fa-backward"></i>Kembali</a>
        </div>
        <div class="show-detail">
            <div class="show-img">
                <img src="{{ $detail->img }}">
            </div>
            <div class="show-txt">
                {{-- <p>Nama Website &nbsp;&nbsp;: {{ $detail->name }}</p>
                <p>Deskripsi &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $detail->desc }}</p>
                <p>Tahun Pengembangan : {{ $detail->year }}</p> --}}
                <table border="0">
                    <tbody>
                        <tr>
                            <td>Nama Website</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>{{ $detail->name }}</td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>{{ $detail->desc }}</td>
                        </tr>
                        <tr>
                            <td>Tahun Pengembangan</td>
                            <td>&nbsp;:&nbsp;</td>
                            <td>{{ $detail->year }}</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
        @include('layouts.footer')
    </div>
    <script>
        $(window).on("load", function() {
            $(".preloader").fadeOut(1500);
        });
    </script>
</body>

</html>

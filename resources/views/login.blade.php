<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}" type="text/css">
    <link rel="icon" href="{{ asset('/images/Brance-logos_transparent.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/82691298ba.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <title>Brance - Login</title>
</head>

<body>
    <div class="container">
        @if (Session::has('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{ Session::get('error') }}
            </div>
        @endif
        <div class="form-wrap margin-top">
            <div class="form-title yellow-color">
                <h1>Login</h1>
            </div>
            <form action="{{ route('actionlogin') }}" method="POST">
                @csrf
                <div class="form">
                    <div class="form-input">
                        <p>Email</p>
                        <input type="email" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-input">
                        <p>Password</p>
                        <input type="password" name="password" placeholder="Your Password">
                    </div>
                </div>
                <div class="form-btn">
                    <input type="submit" value="Login">
                </div>
            </form>
        </div>
    </div>
</body>

</html>


{{-- <h1>Tambah Portofolio</h1>

<form action="{{ url('portofolio')}}" method="POST">
    @csrf
    <p>Gambar Url</p>
    <input type="url" name="gambar_url">
    <p>Nama Website</p>
    <input type="text" name="title">

    <p>Deskripsi</p>
    <textarea name="description"></textarea>

    <p>Tahun Pembuatan</p>
    <input type="number" name="year">

    <div>
        <input type="submit" value="Save">
    </div>
</form>
<a href="/portofolio">Kembali</a> --}}

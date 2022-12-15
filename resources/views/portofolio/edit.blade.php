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
    <title>Edit Portofolio</title>
</head>

<body>
    <div class="container layout-center bg-black">
        <div class="form-back margin-top">
            <div class="prf-add">
                <a href="/portofolio-admin"><i class="fa-solid fa-arrow-left"></i>Kembali</a>
            </div>
        </div>
        <div class="form-wrap margin-top">
            <div class="form-title yellow-color">
                <h1>Edit Portofolio</h1>
            </div>
            <form action="{{ url('portofolio/' . $content->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form">
                    <div class="form-input">
                        <p>Gambar Url</p>
                        <input type="url" name="gambar_url" value="{{ old('img', $content->img) }}">
                    </div>
                    <div class="form-input">
                        <p>Nama Website</p>
                        <input type="text" name="title" value="{{ old('nama', $content->name) }}">
                    </div>
                    <div class="form-input">
                        <p>Deskripsi</p>
                        <textarea name="description">{{ old('desc', $content->desc) }}</textarea>
                    </div>
                    <div class="form-input">
                        <p>Tahun Pembuatan</p>
                        <input type="number" name="year" value="{{ old('year', $content->year) }}">
                    </div>
                </div>
                <div class="form-btn">
                    <input type="submit" value="Save">
                </div>
            </form>
        </div>
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Product</title>
    <style>
        html, body{
            display: flex;
            flex-direction: column;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <h1>Product</h1>
    <a href="/products/create">Tambah Product</a>
    <table border="1">
        <tr>
            <th>title</th>
            <th>desc</th>
            <th>gambar</th>
            <th>harga</th>
            <th>diskon</th>
            <th>Aksi</th>
        </tr>
        @foreach ($list as $item)
        <tr>
            <td>
                <a href="{{url('products/show/'. $item->id)}}">{{ $item->title }}</a>
            </td>
            <td>{{ $item->desc }}</td>
            <td>
                <a href="{{url('products/show/'. $item->id)}}">
                <img src="{{ $item->img_url }}" width="160px" height="90px">
                </a>
            </td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->price_discount }}</td>
            <td>
                <a href="{{url('products/edit/'. $item->id)}}">Edit</a> 
                <a onclick="return confirm('Anda Yakin?')" href="{{url('products/delete/'. $item->id)}}">Delete</a> 
            </td>
        </tr>
    @endforeach
    </table>



</body>
</html>
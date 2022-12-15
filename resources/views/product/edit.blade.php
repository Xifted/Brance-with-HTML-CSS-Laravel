<h1>Edit Product</h1>

<form action="{{ url('products/'. $item->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>Gambar Url</p>
    <input type="url" name="gambar_url" value="{{ old('img', $item->img_url)}}">
    <p>Title</p>
    <input type="text" name="title" value="{{ old('title', $item->title)}}">

    <p>Description</p>
    <textarea name="description">{{ old('desc', $item->desc)}}</textarea>

    <p>Harga</p>
    <input type="number" name="price" value="{{ old('price', $item->price)}}">

    <p>Discount</p>
    <input type="number" name="price_discount" value="{{ old('price_discount', $item->price_discount)}}">

    <div>
        <input type="submit" value="Save">
    </div>
</form>
<a href="/products">Kembali</a>
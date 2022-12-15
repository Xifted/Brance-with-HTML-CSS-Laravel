<h1>Tambah Product</h1>

<form action="{{ url('products')}}" method="POST">
    @csrf
    <p>Gambar Url</p>
    <input type="url" name="gambar_url">
    <p>Title</p>
    <input type="text" name="title">

    <p>Description</p>
    <textarea name="description"></textarea>

    <p>Harga</p>
    <input type="number" name="price">

    <p>Discount</p>
    <input type="number" name="price_discount">

    <div>
        <input type="submit" value="Save">
    </div>
</form>
<a href="/products">Kembali</a>
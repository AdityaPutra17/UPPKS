@extends('admin.tamplate')
@section('contentadmin')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid my-5 ">
            <div class="col px-4 py-3 rounded bg-white">
                <form action="{{ route('product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Foto Produk</label>
                        <input name="image" class="form-control" type="file" id="image">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="Current Image" class="mt-2" style="max-width: 200px;">
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input name="product_name" type="text" class="form-control form" id="product_name" placeholder="Masukkan Nama barang" value="{{ old('product_name', $product->product_name) }}">
                    </div>
                    <div class="mb-3">
                        <label for="owner" class="form-label">Pemilik Produk</label>
                        <input name="owner" id="owner" class="form-control form" placeholder="Masukkan Nama pemilik Produk" value="{{ old('owner', $product->owner) }}">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <div class="input-group">
                            <input type="number" name="price" class="form-control" id="price" placeholder="Masukkan harga" value="{{ old('price', $product->price) }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Link</label>
                        <div class="input-group">
                            <input name="url" class="form-control" id="url" placeholder="Masukkan link shopee" value="{{ old('url', $product->url) }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Deskripsi Produk</label>
                        <div class="input-group">
                            <input name="desc" class="form-control" id="desc" placeholder="Masukkan deskripsi produk" value="{{ old('desc', $product->desc) }}">
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-3 mx-auto mt-5">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection

@extends('admin.tamplate')
@section('contentadmin')
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid my-5 ">
            <div class="col px-4 py-3 rounded bg-white">
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Foto Produk</label>
                        <input name="image" class="form-control" type="file" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="product_name" class="form-label">Nama Produk</label>
                        <input name="product_name" type="text" class="form-control form" id="product_name" placeholder="Masukkan Nama barang">
                    </div>
                    <div class="mb-3">
                        <label for="owner" class="form-label">Pemilik Produk</label>
                        <input name="owner" id="owner" class="form-control form" placeholder="Masukkan Nama pemilik Produk">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <div class="input-group">
                            <input type="number" name="price" class="form-control" id="price" placeholder="Masukkan harga">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Link</label>
                        <div class="input-group">
                            <input name="url" class="form-control" id="url" placeholder="Masukkan link shopee">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">deskripsi produk</label>
                        <div class="input-group">
                            <input name="desc" class="form-control" id="desc" placeholder="Masukkan deskripsi produk">
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

@extends('admin.tamplate')
@section('contentadmin')
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid my-5 ">
            <div class="col px-4 py-3 rounded bg-white">
                <form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="image" class="form-label">Upload Foto Event</label>
                        <input name="image" class="form-control" type="file" id="image">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Event</label>
                        <input name="name" type="text" class="form-control form" id="name" placeholder="Masukkan Nama barang">
                    </div>
                    <div class="row pb-2">
                        <div class="col-2">
                            <label for="tanggal" class="align-middle">Tanggal Event</label>
                        </div>
                        <div class="col-10">
                            <input type="date" name="tanggal" id="tanggal" class="text-center text-uppercase form-control RfContent" value={{old('tgl_masuk')}} required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">deskripsi Event</label>
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

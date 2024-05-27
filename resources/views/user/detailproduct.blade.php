@extends('tamplate')
@section('content')

<section class="container my-5 min-vh-80 ">
    <h6 class="text-secondary ">Beranda > Produk > <span class="fw-bold text-black ">Detail</span></h6>

    <div class="row my-5">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6" data-aos="fade-right" data-aos-duration="5000">
            <img src="{{ asset('storage/'. $product -> image) }}" class="card-img-top p-2" width="95%" height="500px" style="object-fit:cover" alt="...">

        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 px-3" data-aos="fade-left" data-aos-duration="5000">
            <a href="javascript:window.history.back();" class="btn mainColor fw-bold rounded-5 px-5 mb-5" style="background-color: white; border-color: #f2682a;"  >Kembali</a>

            <h5 class="mt-5 text-secondary ">{{$product->owner}}</h5>
            <h1 class="fw-bold">{{$product->product_name}}</h1>
            <h5 class="mb-5 text-secondary ">{{$product->desc}}</h5>
            <h1 class="fw-bold mainColor">RP {{$product->price}}</h1>
            <div class="row my-5 gap-3">
                <div class="col-5 col-sm-5 col-md-5 col-lg-5 ">
                    <a href="{{$product->url}}" class="btn mainColor fw-bold rounded-5 px-5 mb-5" style="background-color: white; border-color: #f2682a;" >Order by Shopee</a>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2">
                    <a class="navcolor rounded-5 text-center fs-3 p-1" href="https://api.whatsapp.com/send/?phone=62{{$product->contact}}&text&type=phone_number&app_absent=0" target="_blank">
                        <i class="fa-brands fa-whatsapp text-light p-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

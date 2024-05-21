@extends('tamplate')
@section('content')

<section>
    <div id="carouselExample" class="carousel slide container-fluid">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="overlay"></div>
          <img src="{{asset('assets/img/jumbo.jpg')}}" class="d-block w-100 carousel-img" alt="...">
        </div>
      </div>
    </div>

    <h2 class="text-center fw-bold mainColor my-3 ">PRODUK KAMI</h2>
    <div class="container d-flex  justify-content-between ">
        <div class="row row-gap-4 ">
          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
                  <img src="{{asset('assets/img/product.png')}}" class="card-img-top p-2" alt="...">
                  <div class="card-body">
                      <p>Nama Toko</p>
                      <h5 class="card-title">Nama Produk</h5>
                      <p class="card-text">Deskripsi produk</p>
                        <div class="d-flex flex-row justify-content-between ">
                            <h6 class="fw-bold mainColor">Rp 12000</h6>
                            <a href="#" class="btn fw-bold mainColor" style="background-color: white; border-color: #f2682a;">Detail</a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
                  <img src="{{asset('assets/img/product.png')}}" class="card-img-top p-2" alt="...">
                  <div class="card-body">
                      <p>Nama Toko</p>
                      <h5 class="card-title">Nama Produk</h5>
                      <p class="card-text">Deskripsi produk</p>
                        <div class="d-flex flex-row justify-content-between ">
                            <h6 class="fw-bold mainColor">Rp 12000</h6>
                            <a href="#" class="btn fw-bold mainColor" style="background-color: white; border-color: #f2682a;">Detail</a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
                  <img src="{{asset('assets/img/product.png')}}" class="card-img-top p-2" alt="...">
                  <div class="card-body">
                      <p>Nama Toko</p>
                      <h5 class="card-title">Nama Produk</h5>
                      <p class="card-text">Deskripsi produk</p>
                        <div class="d-flex flex-row justify-content-between ">
                            <h6 class="fw-bold mainColor">Rp 12000</h6>
                            <a href="#" class="btn fw-bold mainColor" style="background-color: white; border-color: #f2682a;">Detail</a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
                  <img src="{{asset('assets/img/product.png')}}" class="card-img-top p-2" alt="...">
                  <div class="card-body">
                      <p>Nama Toko</p>
                      <h5 class="card-title">Nama Produk</h5>
                      <p class="card-text">Deskripsi produk</p>
                        <div class="d-flex flex-row justify-content-between ">
                            <h6 class="fw-bold mainColor">Rp 12000</h6>
                            <a href="#" class="btn fw-bold mainColor" style="background-color: white; border-color: #f2682a;">Detail</a>
                        </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <div class="card " style="width: 18rem;">
                  <img src="{{asset('assets/img/product.png')}}" class="card-img-top p-2" alt="...">
                  <div class="card-body">
                      <p>Nama Toko</p>
                      <h5 class="card-title">Nama Produk</h5>
                      <p class="card-text">Deskripsi produk</p>
                        <div class="d-flex flex-row justify-content-between ">
                            <h6 class="fw-bold mainColor">Rp 12000</h6>
                            <a href="#" class="btn fw-bold mainColor" style="background-color: white; border-color: #f2682a;">Detail</a>
                        </div>
                  </div>
              </div>
          </div>

        </div>
    </div>
</section>

@endsection





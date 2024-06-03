@extends('tamplate')
@section('content')

<section class="overflow-x-hidden ">
    <div id="carouselExample" class="carousel slide container-fluid">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="overlay"></div>
            <img src="{{asset('assets/img/jumbo.jpg')}}" class="d-block w-100 carousel-img" alt="...">
          </div>
        </div>
      </div>

      <div class="my-5">
          <h2 class="text-center fw-bold mainColor ">Produk dari UMKM Desa Bitungsari</h2>
          <p class="text-secondary text-center">Jelajahi beragam produk makanan unggulan dari UMKM Desa Bitungsari yang siap memanjakan lidah Anda.</p>
      </div>

      <div class="container my-5">
        <div class="row text-center justify-content-center">
            <div class="col-2"><a href="{{ route('product-page') }}" class="text-decoration-none {{ is_null($selectedCategory) ? 'mainColor' : 'text-dark' }}">all</a></div>
            <div class="col-2"><a href="{{ route('product-kategori', 'makanan') }}" class=" text-decoration-none {{ $selectedCategory == 'makanan' ? 'mainColor' : 'text-dark' }}">Makanan</a></div>
            <div class="col-2"><a href="{{ route('product-kategori', 'minuman') }}" class=" text-decoration-none {{ $selectedCategory == 'minuman' ? 'mainColor' : 'text-dark' }}">Minuman</a></div>
            <div class="col-2"><a href="{{ route('product-kategori', 'barang') }}" class=" text-decoration-none {{ $selectedCategory == 'barang' ? 'mainColor' : 'text-dark' }}">Barang</a></div>
            <div class="col-2"><a href="{{ route('product-kategori', 'jasa') }}" class=" text-decoration-none {{ $selectedCategory == 'jasa' ? 'mainColor' : 'text-dark' }}">jasa</a></div>
        </div>
      </div>

      <div class="container d-flex justify-content-between my-5">
          <div class="row row-gap-4">
            @foreach ($products as $product )
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    @php
                        $shortDesc = Illuminate\Support\Str::limit($product->desc, 20);
                        $descOverflow = strlen($product->desc) > 20 ? true : false;
                    @endphp
                    <div class="card " >
                        <img src="{{ asset('storage/'. $product -> image) }}" class="card-img-top p-2" width="500px" height="500px" style="object-fit:cover" alt="...">
                        <div class="card-body">
                            <p>{{$product->owner}}</p>
                            <p>{{$product->kategori->names}}</p>
                            <h5 class="card-title">{{$product->product_name}}</h5>
                            <p class="card-text">{{$shortDesc}}</p>
                            <div class="d-flex flex-row justify-content-between ">
                                <h6 class="fw-bold mainColor">Rp {{$product->price}}</h6>
                                <a href="{{ route('userproduct.show', ['id' => $product->id]) }}" class="btn fw-bold mainColor rounded-5 px-4" style="background-color: white; border-color: #f2682a;">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

          </div>

      </div>
      <div class="d-flex justify-content-center">

      {{ $products->links() }}
    </div>


</section>

@endsection

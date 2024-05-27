@extends('tamplate')
@section('content')

<section>
    <div id="carouselExample" class="carousel slide container-fluid">
        <div class="carousel-inner">
          <div class="carousel-item active position-relative">
            <div class="overlay"></div>
            <img src="{{asset('assets/img/jumbo.jpg')}}" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
              <h1 class="text-light">Selamat datang di Website UPPKS Matahari</h1>
            </div>
          </div>
        </div>
    </div>

    <div class="my-5" id="event" data-aos="fade-up">
        <h2 class="text-center fw-bold mainColor ">Event dari UMKM Desa Bitungsari</h2>
        <p class="text-secondary text-center">Kenali lebih dekat UMKM Desa Bitungsari dan dedikasi kami dalam mengembangkan produk lokal.</p>
    </div>

    <div class="container">
        @foreach ($events as $event)
            <div class="row align-items-center justify-content-center mt-5" data-aos="fade-up" data-aos-delay="500">
                @php
                    $date = \Carbon\Carbon::parse($event->tanggal);
                    $shortDesc = Illuminate\Support\Str::limit($event->desc, 20);
                    $descOverflow = strlen($event->desc) > 20 ? true : false;
                @endphp
                <div class="col-12 col-sm-12 col-md-1 col-lg-1 col-xl-1 tgl">
                    <p class="text-secondary lh-sm"><span class="text-decoration-underline"> {{$date->format('M')}}</span> , {{$date->format('d')}} <br> <span class="fw-bold fs-3 text-dark">{{$date->format('Y')}}</span></p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7 ">
                    <img src="{{ asset('storage/'. $event -> image) }}" width="100%" alt="">
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 ">
                    <h3 class="fw-bold">{{$event->name }}</h3>
                    <p class="text-secondary mb-5">Dibuat oleh Admin</p>
                    <p>{{$shortDesc}} @if ($descOverflow) <a href="{{ route('userevent.show', $event->id) }}" class="text-secondary ">see more</a>@endif</p>

                    <a href="{{ route('userevent.show', $event->id) }}" class="btn mainColor fw-bold rounded-5 px-3" style="background-color: white; border-color: #f2682a;">Baca Selengkapnya</a>
                </div>
            </div>
            <hr class="mt-5">
        @endforeach
    </div>
</section>

@endsection

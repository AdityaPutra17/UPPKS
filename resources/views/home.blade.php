@extends('tamplate')
@section('content')

{{-- JUMBOTRON --}}
<section>
    <div id="carouselExample" class="carousel slide container-fluid">
        <div class="carousel-inner">
          <div class="carousel-item active position-relative">
            <div class="overlay z-1"></div>
            <img src="{{asset('assets/img/jumbo.jpg')}}" class="d-block w-100 carousel-img" alt="...">
            <div class="carousel-caption d-flex flex-column justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
                <h1 class="text-white fw-bold z-2" data-aos="zoom-in" data-aos-duration="1000">Selamat datang di Website UPPKS Matahari</h1>
            </div>
          </div>
        </div>
    </div>

    {{-- PROFILE --}}

    <div class="container my-5" id="aboutme">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-5 col-sm-12 text-center mb-4" data-aos="fade-down-right" data-aos-duration='1000'>
                <img src="{{ asset('assets/img/Logo UPPKS.png') }}" class="img-fluid" alt="" >
            </div>
            <div class="col-md-6 col-sm-12" data-aos="fade-down-left" data-aos-duration="1000">
                <h2 class="mainColor fw-bolder mb-4">Profile UPPKS Desa Matahari</h2>
                <p class="mb-4" style="text-align: justify"><span class="mainColor fw-bold">UPPKS MATAHARI (Usaha Peningkatan Pendapatan Keluarga Sejahtera)</span> di Desa Bitung Sari, RW 002, merupakan kelompok usaha yang berfokus pada pengembangan ekonomi dan peningkatan kesejahteraan keluarga. Kelompok ini mendapat dukungan dari berbagai program pengabdian masyarakat, seperti pelatihan kewirausahaan dan peningkatan kompetensi anggota dalam pengelolaan usaha.</p>
                <div class="text-center d-sm-none">
                  <a href="" class="btn mainColor fw-bold rounded-5 px-5" style="background-color: white; border-color: #f2682a;">Kunjungi Laman Profil</a>
              </div>
              <div class="d-none d-sm-block">
                  <a href="" class="btn mainColor fw-bold rounded-5 px-5" style="background-color: white; border-color: #f2682a;">Kunjungi Laman Profil</a>
              </div>
            </div>
        </div>
    </div>

    {{-- KEGIATAN UPPKS --}}

    <div class="card w-100 text-start rounded-0 border-0 mb-0 container">
        <div class="card-body border-0" data-aos="fade-up" data-aos-duration="500">
          <h2 class="mainColor fw-bolder mb-2 text-center">Kegiatan UPPKS</h2>
          <p class="text-center pdesc">Kegiatan yang di adakan rutin oleh UPPKS MATAHARI </p>
        </div>

      <div id="carouselExampleIndicators" class="carousel carousel-dark slide mb-5 container rounded-1" data-bs-ride="carousel" data-bs-interval="3500" data-aos="fade-up" data-aos-duration="500" data-aos-delay="500">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card mb-3 w-100 rounded-1  border-0 shadow-sm ">
              <div class="row g-0 ">
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Pelatihan Tata kelola Uang</p>
                    <p class="card-text">program yang dirancang khusus untuk memberdayakan para ibu di dalam keluarga dengan pengetahuan dan keterampilan yang diperlukan untuk mengelola keuangan secara efektif. </p>
                  </div>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/img/1.jpg')}}" class="img-fluid" alt="...">
                  </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-1 shadow-sm border-0">
              <div class="row g-0">
                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Rapat Bulanan</p>
                    <p class="card-text">pertemuan rutin yang diadakan untuk para ibu yang tergabung dalam Usaha Peningkatan Pendapatan Keluarga Sejahtera (UPPKS). Pertemuan ini bertujuan untuk membahas berbagai hal terkait dengan pengelolaan usaha, keuangan, dan masalah-masalah lain yang berkaitan dengan kesejahteraan keluarga.</p>
                  </div>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/img/2.jpg')}}" class="img-fluid" alt="...">
                  </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-1 shadow-sm border-0">
              <div class="row g-0">

                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Pengembangan UPPKS MATAHARI oleh Siswa SMPN 1 Bogor</p>
                    <p class="card-text"><small class="text-body-secondary">sebuah inisiatif yang menggabungkan pendidikan dan pemberdayaan masyarakat.Proyek ini melibatkan partisipasi aktif siswa SMPN 1 Bogor dalam membantu masyarakat setempat untuk meningkatkan kesejahteraan ekonomi mereka</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/img/3.jpg')}}" class="img-fluid" alt="...">
                  </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="card mb-3 w-100 rounded-1  shadow-sm border-0">
              <div class="row g-0">

                <div class="col-md-8 m-auto">
                  <div class="card-body">
                    <p class="card-title">Pengembangan UPPKS MATAHARI oleh Institut Bisni dan Infomatika kesatuan</p>
                    <p class="card-text"><small class="text-body-secondary">Banyak orang bertanya kenapa hrs Gaziseri.... Awal terbentuknya kelompok batik di kampung cibuluh krn adanya bantuan dr pihak Baznas yg bekerja sama dgn Ipb jadi dari nama pemberi bantuan itu yg kami ambil.. Gabungan Amil Zakat dan Ipb maka jadilah Gazi dan seri adalah nama" pembatiknya..</small></p>
                  </div>
                </div>
                <div class="col-md-4">
                    <img src="{{asset('assets/img/4.jpg')}}" class="img-fluid" alt="...">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      {{-- EVENT --}}

    <div class="my-5" id="event" data-aos="fade-up">
        <h2 class="text-center fw-bold mainColor">Event dari UMKM Desa Bitungsari</h2>
        <p class="text-secondary text-center pdesc">Kenali lebih dekat UMKM Desa Bitungsari dan dedikasi kami dalam mengembangkan produk lokal.</p>
    </div>

    <div class="container">
      @foreach ($events as $event)
      <div class="row d-flex align-items-center justify-content-center mt-5 card-event" data-aos="fade-up">
          @php
          $date = \Carbon\Carbon::parse($event->tanggal);
          $shortDesc = Illuminate\Support\Str::limit($event->desc, 50);
          $descOverflow = strlen($event->desc) > 50 ? true : false;
          @endphp
          <div class="col-12 col-md-1 tgl text-center mb-3 mb-md-0">
              <p class="text-secondary lh-sm"><span class="text-decoration-underline"> {{$date->format('M')}}</span> , {{$date->format('d')}} <br> <span class="fw-bold fs-3 text-dark">{{$date->format('Y')}}</span></p>
          </div>
          <div class="col-6 col-md-6 col-lg-5 col-xl-4 mt-3 mt-md-0">
              <img src="{{ asset('storage/'. $event->image) }}" class="img-fluid" alt="Event Image">
          </div>
          <div class="col-6 col-md-5 col-lg-6 col-xl-7 p-4 mt-3 mt-md-0 tulisan ">
              <h3 class="eventname fw-bold">{{$event->name }}</h3>
              <p class="ownerName mb-4">Dibuat oleh Admin</p>
              <p class="descName">{{$shortDesc}} @if ($descOverflow) <a href="{{ route('userevent.show', $event->id) }}" class="text-secondary">see more</a>@endif</p>
              <a href="{{ route('userevent.show', $event->id) }}" class="mainColor btn btnEvent  fw-bold rounded-5 px-3" style="background-color: white; border-color: #f2682a;">Baca Selengkapnya</a>
          </div>
      </div>
      <hr class="mt-5">
      @endforeach

      <div class="container my-5 text-center" data-aos="fade-up" data-aos-duration="5000">
          <a href="/event-page" class="btn nextpage mainColor fw-bold rounded-5 px-5" style="background-color: white; border-color: #f2682a;">Lihat Kegiatan Lainnya</a>
      </div>
  </div>



    {{-- PRODUK --}}

    <div class="my-5" id="product" data-aos="fade-up" data-aos-duration="1000" >
        <h2 class="text-center fw-bold mainColor ">Produk dari UMKM Desa Bitungsari</h2>
        <p class="text-secondary text-center pdesc">Jelajahi beragam produk makanan unggulan dari UMKM Desa Bitungsari yang siap memanjakan lidah Anda.</p>
    </div>

    <div class="container d-flex justify-content-between my-5">
        <div class="row row-gap-4 ">
            @foreach ($products as $pr)
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                    @php
                        $shortDesc = Illuminate\Support\Str::limit($pr->desc, 20);
                        $descOverflow = strlen($pr->desc) > 20 ? true : false;
                    @endphp
                    <div class="card mobileCard" >
                        <img src="{{ asset('storage/'. $pr -> image) }}" class="card-img-top imgProduct p-2" width="100%" height="500px" style="object-fit:cover" alt="...">
                        <div class="card-body">
                            <p class="ownerProduct mainColor fw-bold  ">{{$pr->owner}}</p>
                            <h5 class="card-title">{{$pr->product_name}}</h5>
                            <p class="card-text">{{$shortDesc}}</p>
                            <div class="box d-flex flex-row justify-content-between ">
                                <h6 class="fw-bold mainColor price">Rp {{$pr->price}}</h6>
                                <a href="{{ route('userproduct.show', ['id' => $pr->id]) }}" class="btn btndetail fw-bold mainColor rounded-5 px-4" style="background-color: white; border-color: #f2682a;">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="container my-5 text-center " data-aos="fade-up" data-aos-duration="5000">
       <a href="/product-page" class="btn nextpage mainColor fw-bold rounded-5 px-5" style="background-color: white; border-color: #f2682a;">Lihat Produk Lainnya</a>
    </div>

    {{-- LOKASI --}}
    <div class="my-5" data-aos="fade-up" data-aos-duration="5000">
        <h2 class="text-center fw-bold mainColor ">Lokasi UPPKS Desa Bitungsari</h2>
        <p class="text-secondary text-center pdesc">Lokasi UPPKS Desa Bitung sari terletak di Desa Bitung Sari RW 002 Kec.Ciawi Kab.Bogor</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-duration="5000" >
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.7154177809393!2d106.83738737604246!3d-6.682133165328798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c9372a690be5%3A0xd5326f2661b13a8c!2sUPPKS%20MATAHARI%20RW%20002!5e0!3m2!1sen!2sid!4v1716443428593!5m2!1sen!2sid" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection





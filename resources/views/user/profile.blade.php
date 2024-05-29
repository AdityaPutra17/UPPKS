@extends('tamplate')
@section('content')

<section class=" container overflow-x-hidden" >
    <div class="min-vh-100">
        <div class="row justify-content-center">
            <div class="col-4 text-center" >
                <img src="{{asset('assets/img/logoPNG.png')}}" width="100%" alt="" data-aos="fade-up" data-aos-duration="1000">
            </div>
            <h2 class="fw-bold mainColor text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">Profil Kami</h2>
        </div>
        <div class="container my-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="2000">
            <p style="text-align: justify;" >UPPKS MATAHARI (Usaha Peningkatan Pendapatan Keluarga Sejahtera)</span> di Desa Bitung Sari, RW 002, merupakan kelompok usaha yang berfokus pada pengembangan ekonomi dan peningkatan kesejahteraan keluarga. Kelompok ini mendapat dukungan dari berbagai program pengabdian masyarakat, seperti pelatihan kewirausahaan dan peningkatan kompetensi anggota dalam pengelolaan usaha.</p>
            <p style="text-align: justify;" >UPPKS Matahari bertujuan untuk memberdayakan masyarakat setempat dengan memberikan pelatihan dan bimbingan dalam mengembangkan usaha kecil dan menengah. Melalui program-programnya, UPPKS Matahari berusaha meningkatkan pendapatan keluarga serta meningkatkan kesejahteraan sosial dan ekonomi di Desa Bitung Sari.</p>
            <p style="text-align: justify;" >Dengan dukungan dari program pengabdian masyarakat dan semangat kerja sama antaranggota, UPPKS Matahari terus berupaya menjadi motor penggerak pembangunan ekonomi di Desa Bitung Sari, RW 002, dengan harapan dapat memberikan dampak positif yang berkelanjutan bagi kemajuan dan kesejahteraan masyarakat setempat.</p>
        </div>
    </div>
    <h2 class="mainColor text-center mb-5 fw-bold" data-aos="fade-up" data-aos-duration="1000">Video Dokumentasi</h2>
    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
        <div class="col-12 text-center">
            <video width="50%" controls>
                <source src="{{asset('assets/img/videoplayback.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    <h2 class="mainColor text-center my-5 fw-bold" data-aos="fade-up" data-aos-duration="1000">Rangkaian Kegiatan</h2>
    <div class="row justify-content-between align-items-center my-5" data-aos="fade-right" data-aos-duration="1000">
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <img src="{{asset('assets/img/profile.png')}}" width="100%" alt="">
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pt-3">
            <h2 class="mainColor fw-bold mb-5">TATA KELOLA KEUANGAN</h2>
            <p style="text-align: justify">Dengan menerapkan praktik tata kelola keuangan yang baik, UPPKS dapat meningkatkan efisiensi dan efektivitas pengelolaan dana dan sumber daya, meningkatkan transparansi dan akuntabilitas kepada anggota dan pemangku kepentingan lainnya, serta memastikan keberlanjutan usaha dalam mendukung peningkatan kesejahteraan keluarga di tingkat lokal.</p>
        </div>
    </div>
    <div class="row justify-content-between align-items-center my-5" data-aos="fade-left" data-aos-duration="1000">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 pt-3">
            <h2 class="mainColor fw-bold mb-5">Rapat Bulanan</h2>
            <p style="text-align: justify">pertemuan rutin yang diadakan untuk para ibu yang tergabung dalam Usaha Peningkatan Pendapatan Keluarga Sejahtera (UPPKS). Pertemuan ini bertujuan untuk membahas berbagai hal terkait dengan pengelolaan usaha, keuangan, dan masalah-masalah lain yang berkaitan dengan kesejahteraan keluarga.</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
            <img src="{{asset('assets/img/profile.png')}}" width="100%" alt="">
        </div>
    </div>
</section>

@endsection

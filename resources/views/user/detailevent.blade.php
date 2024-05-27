@extends('tamplate')
@section('content')

<section class="container my-5">
    <h6 class="text-secondary my-5">Beranda > Event > <span class="fw-bold text-black ">Detail</span></h6>



    <div class="content">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h3 class="text-center m-3 mainColor fw-bold">{{$event->name}}</h3>
                <p class="text-secondary text-center">Dibuat Oleh <span class="fw-bold  text-dark"> Admin </span></p>
                <div class="text-center mt-2 ">
                    @php
                        $date = \Carbon\Carbon::parse($event->tanggal);
                    @endphp
                    <p>{{$date->format('M')}} {{$date->format('d')}}, {{$date->format('Y')}}</p>
                </div>
                <img src="{{ asset('storage/'. $event -> image) }}" width="100%" class="text-center cover" alt="">
                <div class="paragraf mt-3">
                    <p class="text-dark" style="text-align: justify">{{$event->desc}}</p>
                    <a href="javascript:window.history.back();" class="btn mainColor fw-bold rounded-5 px-5 my-5" style="background-color: white; border-color: #f2682a;"  >Kembali</a>
                </div>
            </div>
        </div>
    </div>



</section>
@endsection

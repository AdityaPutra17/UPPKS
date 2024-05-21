@extends('admin.tamplate')
@section('contentadmin')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid my-5 ">
            <p>{{$event->name}}</p>
            <p>{{$event->tanggal}}</p>
            <p>{{$event->desc}}</p>
            <img src="{{ asset('storage/' . $event->image) }}" alt="" width="200px">
        </div>
    </div>
</div>

@endsection

@extends('admin.tamplate')
@section('contentadmin')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid my-5 ">
            <img src="{{ asset('storage/'. $product -> image) }}" width="500px" alt="">
            <p>{{$product->product_name}}</p>
            <p>{{$product->kategori->name}}</p>
            <p>{{$product->owner}}</p>
            <p>{{$product->price}}</p>
            <p>{{$product->desc}}</p>
            <p>{{$product->url}}</p>
            <p>{{$product->contact}}</p>
            <a href="https://api.whatsapp.com/send/?phone=62{{$product->contact}}&text&type=phone_number&app_absent=0" target="_blank">contact</a>
            <a href="{{$product->url}}" class="btn btn-primary" target="_blank">test</a>
        </div>
    </div>
</div>

@endsection

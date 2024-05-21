@extends('admin.tamplate')
@section('contentadmin')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid my-5 ">
            <a href="/product/create" class="btn btn-default bg-success text-light mb-3 ">Buat Product</a>
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <table class="table table-head-fixed text-nowrap ">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Pemilik</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Link</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($products)>0)
                        @foreach ($products as $index => $product)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$product->product_name}}</td>
                                <td>{{$product->owner}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->desc}}</td>
                                <td><a href="{{$product->url}}" target="_blank">{{$product->url}}</a></td>

                                <td class="row justify-content-center ">
                                    <div class="col-2">
                                        <a href="{{ route('product.show', $product->id) }}"><i class="fas fa-eye text-black "></i></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('product.edit', $product->id) }}"><i class="fa-solid fa-file-pen text-black"></i></a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="border-0 bg-white">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5" class="text-center text-secondary ">Data Produk tidak ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection

@extends('admin.tamplate')
@section('contentadmin')

<div class="wrapper">
    <div class="content-wrapper">
        <div class="container-fluid pt-5">
            <a href="/admin/event/create" class="btn btn-default bg-success text-light m-3">Buat Event</a>
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session('success')}}
                </div>
            @endif
            <table class="table table-head-fixed text-nowrap ">
                <thead>
                    <tr>
                        <th>no</th>
                        <th>Nama Event</th>
                        <th>tanggal</th>
                        <th class="text-center">action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($events)>0)
                        @foreach ($events as $index => $event)
                            <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$event->name}}</td>
                                <td>{{$event->tanggal}}</td>
                                <td class="row justify-content-center ">
                                    <div class="col-2">
                                        <a href="{{ route('event.show', $event->id) }}"><i class="fas fa-eye text-black "></i></a>
                                    </div>
                                    <div class="col-2">
                                        <a href="{{ route('event.edit', $event->id) }}"><i class="fa-solid fa-file-pen text-black"></i></a>
                                    </div>
                                    <div class="col-2">
                                        <form action="{{ route('event.destroy', $event->id) }}" method="POST">
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
                            <td colspan="5" class="text-center text-secondary ">Data Event tidak ada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

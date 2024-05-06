


@extends('master.app')

@section('header')


@endsection
@section('konten')
<div class="d-flex justify-content-between">
    <h4 class="mb-0">Data selengkapnya ..</h4>
<p></p>
<a href="{{route('buku.index')}}">
    <button class="btn btn-warning"><i class="fa-regular fa-circle-xmark" style="margin-right: 5px"></i>Back to Home</button>
</a>
</div>
<h3>detail buku</h3>

<div class="row mt-5">
    <div class="col-md-4">
        <img src="{{asset('upload'). '/'. $buku->sampul}}" alt="" width=200px class="rounded mt-4 mb-3" />
    </div>
</div>
<table class="table table-lg">

    <tr>
        <th>penulis</th>
        <td>{{$show->penulis}}</td>
    </tr>

    <tr>
        <th>Kategori</th>
        <td>{{$show->category->kategori}}</td>
    </tr>

    <tr>
        <th>tanggal</th>
        <td>{{$show->created_at->isoformat('dddd, D MMMM Y');
        }}</td>
    </tr>

    <tr>
        <th>deskripsi</th>
        <td>{{$show->deskripsi}}</td>
    </tr>
</table>

@endsection
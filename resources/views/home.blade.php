@extends('layouts/app')

@section('title', 'Halaman Home')

@section('content')

    <div class="container banner">
        <h1>Welcome to Musang</h1>
        <p>Software House Website Perpustakaan Terkini dan Terupdate Setiap Harinya</p>

        <a href="#" class="btn btn-secondary">Manage Books</a>
        <a href="#" class="btn btn-light">Contact Us</a>
    </div>

    <div class="container mt-4">
        <div class="row">
            @foreach($books as $book)
            <div class="col-md-4">
                <div class="col-md-12 bg-light book-content">
                    <h1 class="judul">{{$book->judul}}</h1>
                    <span class="penulis badge bg-warning">{{$book->penulis}}</span>
                    <p class="halaman">Banyak Halaman : {{$book->halaman}}</p>
                    <span class="tahun-terbit">Tahun Terbit : {{$book->tahun_terbit}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
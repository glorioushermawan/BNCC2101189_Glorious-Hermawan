@extends('layouts/app')

@section('title', 'Halaman Books')

@section('content')


    <div class="container mt-4">

    <h3><i class="uil uil-books me-1"></i>List of Books</h3>
    <hr></hr>
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
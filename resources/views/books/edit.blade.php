@extends('layouts/app')

@section('title', 'Edit Book')

@section('content')
 <div class="container">
        <div class="col-md-7 bg-light manage-wrapper">
            <h3><i class="uil uil-edit me-1"></i>Edit Book</h3>
            <p>Manage Books and Do Not Forget to Recheck Them</p>
            <hr>

            <form action="{{url('books/'. $book->id)}}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" class="form-control @error('judul') is-invalid
                    @enderror" placeholder="Masukkan Judul Buku" name="judul" value="{{$book->judul}}">
                    @error('judul') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Penulis</label>
                    <input type="text" class="form-control @error('penulis') is-invalid
                    @enderror" placeholder="Masukkan Nama Penulis" name="penulis" value="{{$book->penulis}}">
                    @error('penulis') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Halaman Buku</label>
                    <input type="number" class="form-control @error('halaman') is-invalid
                    @enderror" placeholder="Masukkan Halaman Buku" name="halaman" value="{{$book->halaman}}">
                    @error('halaman') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control @error('tahun_terbit') is-invalid
                    @enderror" placeholder="Masukkan Tahun Terbit" name="tahun_terbit" value="{{$book->tahun_terbit}}">
                    @error('tahun_terbit') <span class="text-danger">{{$message}}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
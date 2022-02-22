@extends('layouts.app')

@section('title', 'Manage Book')

@section('content')
    <div class="container">
        <div class="col-md-8 bg-light manage-wrapper">
            <h3>Manage Book <i class="uil uil-books ms-1"></i></h3>
            <p>Manage Books and Do Not Forget to Recheck Them</p>
            <hr>
            <a href="{{ url('books/create') }}" class="btn btn-dark btn-sm mb-3"><i class="uil uil-plus me-1"></i>Add
                Books</a>

            @if (session('success_status'))
                <div class="alert alert-success" role="alert">
                    <i class="uil uil-grin-tongue-wink me-1"></i>{{session('success_status')}}
                </div>
            @endif

            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Halaman</th>
                        <th>Tahun Terbit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $num=1; @endphp
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $num++ }}</td>
                            <td>{{ $book->judul }}</td>
                            <td>{{ $book->penulis }}</td>
                            <td>{{ $book->halaman }}</td>
                            <td>{{ $book->tahun_terbit }}</td>
                            <td>
                                <a href="{{url('books/' . $book->id)}}" class="text-primary"><i class="uil uil-edit-alt"></i></a>
                                <a href="#" class="text-danger" 
                                onclick="event.preventDefault(); document.getElementById
                                ('delete-form-{{$book->id}}').submit();">
                                <i class= "uil uil-trash-alt"></i>

                                <form id="delete-form-{{$book->id}}"
                                    action="{{url('books/'.$book->id)}}"
                                    method="POST"
                                    style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                    </form>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

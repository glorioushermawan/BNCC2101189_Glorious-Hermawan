<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return view ('books', compact('books'));
    }

    public function showAllBook(){
        $books = Book::all();
        return view ('books/index', compact('books'));
    }

    public function create(){
        return view ('books/create');
    }

    public function store(Request $request){

        $request->validate([
            'judul'=>'required|string|min:5|max:20',
            'penulis'=>'required|string|min:5|max:20',
            'halaman'=>'required|integer|min:1',
            'tahun_terbit'=>'required|integer|min:2000|max:2021',
        ]);

        // Menambah book ke tabel book
        Book::create([
            'judul' => $request ->judul,
            'penulis' => $request ->penulis,
            'halaman' => $request ->halaman,
            'tahun_terbit' => $request ->tahun_terbit,
        ]);

        return redirect('/books/manage')->with('success_status', 'Buku berhasil ditambahkan!');
    }

    public function edit($id){
        $book = Book :: findOrFail($id);
        return view('books/edit', compact('book'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'judul'=>'required|string|min:5|max:20',
            'penulis'=>'required|string|min:5|max:20',
            'halaman'=>'required|integer|min:1',
            'tahun_terbit'=>'required|integer|min:2000|max:2021',
        ]);

        $book = Book::findOrFail($id);
        $book->update([
            'judul' => $request ->judul,
            'penulis' => $request ->penulis,
            'halaman' => $request ->halaman,
            'tahun_terbit' => $request ->tahun_terbit,
        ]);
        return redirect('/books/manage')->with('success_status', 'Buku berhasil diedit!');
    }

    public function destroy($id){
        $book=Book::findOrFail($id);
        $book->delete();
        return redirect ('/books/manage')->with ('success_status', 'Buku berhasil dihapus!');
    }
}

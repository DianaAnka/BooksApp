<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    public function index()
    {
           $books=DB::table('books')->simplePaginate(10);
        return view('books.index',['books'=>$books]);
    }
 public function show($id)
 {
     $book=Book::find($id);
     return view('books.show',['book'=>$book]);
 }
}

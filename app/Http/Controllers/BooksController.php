<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User_Rate;

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
 public function profile()
 {
    
     $user = \Auth::user();
     $id =  $user->id;
     $books = array();
     $data = DB::table('user__rates')->where('user_id', '=', $id)->get();
     foreach ($data as $d) {

         $f = Book::find($d->book_id);
         $b = [
             'id'=>$f->id,
             'image_l_url'=>$f->image_l_url,
             'book_title'=>$f->book_title,
             'publisher'=>$f->publisher,
             'year'=>$f->year,
             'rating'=>$d->rating
         ];
         $books[]=$b;
     }
     #dd($books);
     return view('books.profile',['books'=>$books]);
     
 }
 public function rate(Request $request)
 {
     $user = \Auth::user();
     $past_record = DB::table('user__rates')->where('user_id', '=', $user->id )
                                             ->where('book_id' ,'=' ,$request->id);
     if($past_record != null){
         $past_record->delete();
     }
     $userBook = new User_Rate();
     $userBook->user_id = $user->id;
     $userBook->book_id = $request->id;
     $userBook->rating = $request->rate;
     $userBook->save();
     return redirect()->action('BooksController@index');
 }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){

       return 'hello';
        
    }


    public function store (Request $request){
      
        // $books = new Book();

        // $register->author = request('author');
        // $register->book = request('book');
        // $register->link = request('link');

        // $register->save();
        // return redirect('dashboard');
        


    }
}

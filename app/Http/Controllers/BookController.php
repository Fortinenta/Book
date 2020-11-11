<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BookController extends Controller
{
    public function __construct(){

    }
    public function index(){
        $data = Book::all();
        return response($data);
    }

    public function show($id){

        $data = Book::find($id);

        if(!$data){
          return response()->json([
              'message'=>'Book not found'
          ]);
        }

        return $data;

    }


}

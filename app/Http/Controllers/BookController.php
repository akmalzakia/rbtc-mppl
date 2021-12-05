<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;


class BookController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Book::class, 'book');
    // }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books =  Book::latest()->filter(request(['sort', 'book_type']))->paginate(9)->withQueryString();
        return view('books.index', [
            'books' => $books
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show', [
            'book' => $book
        ]);
    }


}

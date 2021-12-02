<?php

namespace App\Traits;
use App\Models\Book;
use Illuminate\Http\Request;

trait BookTrait {
    public static function createBook($request)
    {
        return Book::create([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'publisher' => $request['publisher'],
            'year_published' => $request['year_published'],
            'description' => $request['description'],
        ]);
    }

    public static function storeFile(Request $request, $type)
    {
        $file = $request->file('file');
        $path = '/';
        
        if($file) {
            $path = $file->storeAs($type, $request->nama . '.pdf');
        }

        return $path;
    }
}

?>
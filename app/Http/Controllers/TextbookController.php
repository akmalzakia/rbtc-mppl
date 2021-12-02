<?php

namespace App\Http\Controllers;

use App\Models\Textbook;
use App\Http\Requests\StoreTextbookRequest;
use App\Http\Requests\UpdateTextbookRequest;

class TextbookController extends Controller
{

    public function __construct()
    {
        $this->authorizeResource(Textbook::class, 'textbook');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTextbookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTextbookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function show(Textbook $textbook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function edit(Textbook $textbook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTextbookRequest  $request
     * @param  \App\Models\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTextbookRequest $request, Textbook $textbook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Textbook  $textbook
     * @return \Illuminate\Http\Response
     */
    public function destroy(Textbook $textbook)
    {
        //
    }
}

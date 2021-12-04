<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class DashboardInquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.inquiries.index', [
            'inquiries' => Inquiry::latest()->paginate(20)
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function show(Inquiry $inquiry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function edit(Inquiry $inquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inquiry $inquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inquiry  $inquiry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inquiry $inquiry)
    {
        //
    }
}

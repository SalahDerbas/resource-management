<?php

namespace App\Http\Controllers;

use App\holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.Holidays.index');
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
     * @param  \App\holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function show(holiday $holiday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function edit(holiday $holiday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, holiday $holiday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\holiday  $holiday
     * @return \Illuminate\Http\Response
     */
    public function destroy(holiday $holiday)
    {
        //
    }
}

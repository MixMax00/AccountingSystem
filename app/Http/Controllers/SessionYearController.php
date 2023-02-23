<?php

namespace App\Http\Controllers;

use App\Models\SessionYear;
use Illuminate\Http\Request;

class SessionYearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.sessionYear.list',[
            'datas'  => SessionYear::all(),
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SessionYear  $sessionYear
     * @return \Illuminate\Http\Response
     */
    public function show(SessionYear $sessionYear)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SessionYear  $sessionYear
     * @return \Illuminate\Http\Response
     */
    public function edit(SessionYear $sessionYear)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SessionYear  $sessionYear
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SessionYear $sessionYear)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SessionYear  $sessionYear
     * @return \Illuminate\Http\Response
     */
    public function destroy(SessionYear $sessionYear)
    {
        //
    }
}

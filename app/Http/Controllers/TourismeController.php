<?php

namespace App\Http\Controllers;

use App\Topic;
use App\Tourisme;
use Illuminate\Http\Request;

class TourismeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Tourisme::latest()->paginate(10);
        // dd($topics);

        return view('frontoffice.index');
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
     * @param  \App\Tourisme  $tourisme
     * @return \Illuminate\Http\Response
     */
    public function show(Tourisme $tourisme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tourisme  $tourisme
     * @return \Illuminate\Http\Response
     */
    public function edit(Tourisme $tourisme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tourisme  $tourisme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tourisme $tourisme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tourisme  $tourisme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tourisme $tourisme)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Microphone;
use Illuminate\Http\Request;

class MicrophoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return a view (make sure this view exists)
        return view('microphone.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Microphone $microphone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Microphone $microphone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Microphone $microphone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Microphone $microphone)
    {
        //
    }
}

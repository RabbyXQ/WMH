<?php

namespace App\Http\Controllers;

use App\Models\Control;
use Illuminate\Http\Request;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return a view (make sure this view exists)
        return view('control.index');
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
    public function show(Control $control)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Control $control)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Control $control)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Control $control)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Devices;
use Illuminate\Http\Request;

class DevicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Return a view (make sure this view exists)
        return view('devices.index');
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
    public function show(Devices $devices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Devices $devices)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Devices $devices)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Devices $devices)
    {
        //
    }
}

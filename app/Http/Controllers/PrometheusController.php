<?php

namespace App\Http\Controllers;

use App\Models\Prometheus;
use Illuminate\Http\Request;

class PrometheusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prometheus = prometheus::all();
        // dd($fakultas);
        return view('test.index')->with('test', $prometheus);
        //
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
    public function show(Prometheus $prometheus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prometheus $prometheus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prometheus $prometheus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prometheus $prometheus)
    {
        //
    }
}

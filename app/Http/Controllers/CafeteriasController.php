<?php

namespace App\Http\Controllers;

use App\Models\Cafeterias;
use App\Http\Requests\StoreCafeteriasRequest;
use App\Http\Requests\UpdateCafeteriasRequest;

class CafeteriasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Cafeterias $cafeterias)
    {
        return view('cafeterias.index', compact($cafeterias));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cafeterias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCafeteriasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Cafeterias $cafeterias)
    {
        $cafeterias = $cafeterias::findorFile($cafeterias->id);
        return view('cafeterias.show', compact($cafeterias));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cafeterias $cafeterias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCafeteriasRequest $request, Cafeterias $cafeterias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cafeterias $cafeterias)
    {
        //
    }
}

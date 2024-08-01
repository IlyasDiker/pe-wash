<?php

namespace App\Http\Controllers;

use App\Models\Biz;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Biz/Index', [
            'bizs' => Biz::paginate(20),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Biz/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Biz $biz)
    {
        return Inertia::render('Biz/Show', [
            'biz' => $biz
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biz $biz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Biz $biz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Biz $biz)
    {
        //
    }
}

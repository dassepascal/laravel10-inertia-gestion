<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidatures = DB::table('candidatures')
        ->join('enterprises', 'candidatures.enterprise_id', '=', 'enterprises.id')
        ->select('candidatures.*', 'enterprises.name as enterprise_name')
        ->where('candidatures.user_id', '=', auth()->user()->id)
        ->get();
      
        return Inertia::render('Candidatures/Index', [
            'candidatures' => $candidatures,
        ]);
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
    public function show(Candidature $candidature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Candidature $candidature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Candidature $candidature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Candidature $candidature)
    {
        //
    }
}

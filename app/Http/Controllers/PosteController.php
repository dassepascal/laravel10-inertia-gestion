<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $postes = DB::table('postes')
        ->join('enterprises', 'postes.enterprise_id', '=', 'enterprises.id')
        ->select('postes.*', 'enterprises.name as enterprise_name')
        ->where('postes.user_id', '=', auth()->user()->id)
        ->get();
     
        return Inertia::render('Postes/Index',[
            'postes' => $postes,
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
    public function show(Poste $poste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poste $poste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poste $poste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poste $poste)
    {
        //
    }
}

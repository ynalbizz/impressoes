<?php

namespace App\Http\Controllers;

use App\Models\Impressao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NunoMaduro\Collision\Exceptions\TestException;

class ImpressoesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       //otimizado
        $impressoes = Impressao::paginate(columns:['id','nome']);
        return view('lista-impressoes',['impressoes' => $impressoes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('criar-impressao');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        Impressao::create($request->all());
      
        //DB::table('impressoes')->delete();
        //return $request;
        return redirect('/impressoes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Impressao $impressao)
    {
        return view('impressao',['impressao'=>$impressao]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Impressao $impressao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Impressao $impressao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Impressao $impressao)
    {
        //
    }
}

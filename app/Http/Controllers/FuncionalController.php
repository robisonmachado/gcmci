<?php

namespace App\Http\Controllers;

use App\Funcional;
use App\User;
use Illuminate\Http\Request;

class FuncionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(string $matricula=null)
    {      
        return view('login',['matricula' => $matricula]);
    }

    public function funcionalPublica(Request $request)
    {
        $matricula = $request->input('matricula');

        if(!empty($matricula)){
            $usuario = User::where('matricula', $matricula)->first();
            if(!empty($usuario)){
                //die($usuario);
                return view('funcional_publica',['usuario' => $usuario]);
            }

        }
        
        
        return redirect('/');
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
     * @param  \App\Funcional  $funcional
     * @return \Illuminate\Http\Response
     */
    public function show(Funcional $funcional)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Funcional  $funcional
     * @return \Illuminate\Http\Response
     */
    public function edit(Funcional $funcional)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Funcional  $funcional
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Funcional $funcional)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Funcional  $funcional
     * @return \Illuminate\Http\Response
     */
    public function destroy(Funcional $funcional)
    {
        //
    }
}

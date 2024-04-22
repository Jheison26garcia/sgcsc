<?php

namespace App\Http\Controllers;

use App\Models\Profesional;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesionales = Profesional::all();
        return view('profesionales.index', ['profesionales' =>  $profesionales]);
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profesionales.new');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profesional = new Profesional();
        $profesional->nombre = $request->nombre;
        $profesional->apellido = $request->apellido;
        $profesional->especialidad = $request->especialidad;
        $profesional->horarios = $request->horario;
        $profesional->telefono = $request->telefono;
        $profesional->email = $request->email;
        $profesional->save();

        $profesionales = Profesional::all();
        return view('profesionales.index', ['profesionales' =>  $profesionales]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profesional = profesional::find($id);   
        return view('profesionales.edit', ['profesional' => $profesional]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profesional = Profesional::find($id);
        $profesional->nombre = $request->nombre;
        $profesional->apellido = $request->apellido;
        $profesional->especialidad = $request->especialidad;
        $profesional->horarios = $request->horario;
        $profesional->telefono = $request->telefono;
        $profesional->email = $request->email;
        $profesional->save();

        $profesionales = Profesional::all();
        return view('profesionales.index', ['profesionales' =>  $profesionales]);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profesional = Profesional::find($id);
        $profesional->delete();

        $profesionales = Profesional::all();
        return view('profesionales.index', ['profesionales' =>  $profesionales]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes' =>  $pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.new');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->fecha_nacimiento = $request->fecha;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->email = $request->email;
        $paciente->historial = $request->historial;
        $paciente->save();
        

        
        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes' =>  $pacientes]);
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
        $paciente = Paciente::find($id);   
        return view('pacientes.edit', ['paciente' => $paciente]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paciente = Paciente::find($id);
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->fecha_nacimiento = $request->fecha;
        $paciente->direccion = $request->direccion;
        $paciente->telefono = $request->telefono;
        $paciente->email = $request->email;
        $paciente->historial = $request->historial;
        $paciente->save();

        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes' =>  $pacientes]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();

        $pacientes = Paciente::all();
        return view('pacientes.index', ['pacientes' =>  $pacientes]);
    }
}

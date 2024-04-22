<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = DB::table('citas')
        ->join('profesionales', 'profesionales.id', '=', 'citas.profesional_id')
        ->join('pacientes', 'pacientes.id', '=', 'citas.paciente_id') 
        ->select('citas.*',  'profesionales.nombre as nombre_profesional', 'pacientes.nombre as nombre_paciente')
        ->get();
    
    return view('citas.index', ['citas' => $citas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = DB::table('pacientes')
        ->orderBy('nombre')
        ->get();
        $profesionales = DB::table('profesionales')
        ->orderBy('nombre')
        ->get();
        return view('citas.new', [  'pacientes' => $pacientes, 'profesionales' => $profesionales]);
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cita = new Cita();
        $cita->id = $request->id;
        $cita->paciente_id = $request->paciente;
        $cita->profesional_id = $request->profesional;
        $cita->fecha_cita = $request->fecha;
        $cita->hora = $request->hora;
        $cita->motivo = $request->motivo;
        $cita->notas = $request->notas;
        $cita->save();

        $citas = DB::table('citas')
        ->join('profesionales', 'profesionales.id', '=', 'citas.profesional_id')
        ->join('pacientes', 'pacientes.id', '=', 'citas.paciente_id') 
        ->select('citas.*',  'profesionales.nombre as nombre_profesional', 'pacientes.nombre as nombre_paciente')
        ->get();
    
    return view('citas.index', ['citas' => $citas]);
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
        $cita = Cita::find($id);
        $pacientes = DB::table('pacientes')
        ->orderBy('nombre')
        ->get();
        $profesionales = DB::table('profesionales')
        ->orderBy('nombre')
        ->get();
        return view('citas.edit', [ 'cita' => $cita, 'pacientes' => $pacientes, 'profesionales' => $profesionales]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cita = Cita::find($id);
        $cita->paciente_id = $request->paciente;
        $cita->profesional_id = $request->profesional;
        $cita->fecha_cita = $request->fecha;
        $cita->hora = $request->hora;
        $cita->motivo = $request->motivo;
        $cita->notas = $request->notas;
        $cita->save();

        $citas = DB::table('citas')
        ->join('profesionales', 'profesionales.id', '=', 'citas.profesional_id')
        ->join('pacientes', 'pacientes.id', '=', 'citas.paciente_id') 
        ->select('citas.*',  'profesionales.nombre as nombre_profesional', 'pacientes.nombre as nombre_paciente')
        ->get();
    
    return view('citas.index', ['citas' => $citas]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cita = Cita::find($id);
        $cita->delete();

        $citas = DB::table('citas')
        ->join('profesionales', 'profesionales.id', '=', 'citas.profesional_id')
        ->join('pacientes', 'pacientes.id', '=', 'citas.paciente_id') 
        ->select('citas.*',  'profesionales.nombre as nombre_profesional', 'pacientes.nombre as nombre_paciente')
        ->get();
    
    return view('citas.index', ['citas' => $citas]);
    }
}

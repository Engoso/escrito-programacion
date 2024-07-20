<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        if ($personas->isEmpty()) {
            return response()->json([
                'message' => 'No hay personas guardadas'], 404);
        }

        return response()->json([
        'personas' => $personas, 
        'status' => 200], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = Persona::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
        ]);

        if (!$persona) {
            return response()->json([
            'message' => 'Error al crear persona',
            'status' => 500], 500);
        }

        return response()->json([
            'persona' => $persona, 
            'status' => 201], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        if (!$persona) {
            return response()->json([
            'message' => 'Persona no encontrada', 
            'status' => 404], 404);
        }

        return response()->json(['persona' => $persona, 'status' => 200], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            return response()->json([
            'message' => 'Persona no encontrada', 
            'status' => 404], 404);
        }

        $persona->nombre = $request->nombre;
        $persona->apellido = $request->apellido;
        $persona->telefono = $request->telefono;

        $persona->save();

        return response()->json([
        'message' => 'Persona actualizada', 
        'persona' => $persona, 'status' => 200], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        if (!$persona) {
            return response()->json([
                'message' => 'Persona no encontrada', 
                'status' => 404], 404);
        }

        $persona->delete();
        return response()->json([
        'message' => 'Persona eliminada',
        'status' => 200], 200);
    }
    public function updatePartial(Request $request, $id)
    {
        $persona = Persona::find($id);

        if (!$persona) {
            $data = [
                'message' => "persona no hallada",
                'status' => 404
            ];
            return response()->json($data, 404);
        }
      

    }

}

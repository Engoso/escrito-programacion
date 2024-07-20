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
       
        $persona = persona::all();
        if ($personas->isempty())
        return response()->json(['message' => 'no hay personas guardadas'], 404);
        $data = [
         'personas' => $personas,
         'status' => 200    
        ];
        return response()->json(personas, 200);

          }
    public function store (request $request)
    {
        $personas = persona::create([
               'id' => $request->nombre,
               'nombre' => $request->nombre,
               'apellido' => $request->nombre,
               'telefono' => $request->nombre,
        ]);
        if (!persona) {
            $data = [
               'message' => 'error al crear persona',
               'status' => 500
            ];
            return response() ->json($data, 500);
        }

        $data = [
            'persona' => $persona,
            'status' => 201
         ];
         return response() ->json($data, 201);
     }
    }
    
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

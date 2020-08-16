<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use App\Utils\PersistenceUtil;

class PersonaController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $paginate = PersistenceUtil::getAllPaginate(Persona::class, $request);
        return $this->sendResponse($paginate, 'Personas recuperadas satisfactoriamente.');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nombre' => 'required',
            'apellido' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Error en la validación.', $validator->errors());
        }
        $persona = Persona::create($input);
        return $this->sendResponse($persona->toArray(), 'Persona creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Persona $persona
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        if (is_null($persona)) {
            return $this->sendError('Persona no encontrada.');
        }
        return $this->sendResponse($persona->toArray(), 'Product recuperada successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Persona $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Persona $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nombre' => 'required',
            'apellido' => 'required'
        ]);
        if ($validator->fails()) {
            return $this->sendError('Error en la validación.', $validator->errors());
        }
        $persona->nombre = $input['nombre'];
        $persona->apellido = $input['apellido'];
        $persona->cedula = $input['cedula'];
        $persona->telefono = $input['telefono'];
        $persona->direccion = $input['direccion'];
        $persona->save();
        return $this->sendResponse($persona->toArray(), 'Persona actualizada satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Persona $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return $this->sendResponse($persona->toArray(), 'Persona eliminada satisfactoriamente.');
    }
}

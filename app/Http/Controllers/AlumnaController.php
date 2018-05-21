<?php

namespace atandteam\Http\Controllers;

use DB;
use atandteam\Alumna;
use atandteam\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlumnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnas = Alumna::all();
        return view('alumnas.mostrar_IH',compact('alumnas'));
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
     * @param  \atandteam\Alumna  $alumna
     * @return \Illuminate\Http\Response
     */
    public function show($idUsuario)
    {
        $usuario = User::find($idUsuario);
        $alumna = Alumna::where('id','=',$usuario->alumna_id)->first();
        return view ('alumnas.mostrar_IH',['alumna' => $alumna,'usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \atandteam\Alumna  $alumna
     * @return \Illuminate\Http\Response
     */
    public function edit($idAlumna)
    {
        $alumna = Alumna::find($idAlumna);
        $usuario = User::where('id','=',$alumna->user_id)->first();
        return view('alumnas.modificar_datos_personales_IH',['alumna'=>$alumna,'usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \atandteam\Alumna  $alumna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumna $alumna,$idAlumna)
    {        

        $alumna = Alumna::find($idAlumna);
        $usuario = User::where('alumna_id','=',$idAlumna)->first();                              
        $request->validate([
            'nombre' => 'required|min:2',            
            'apellido_paterno' => 'required|string',                        
            'direccion' => 'required|string',
            'telefono' => 'required|digits:10',
            'ciudad' => 'required|string',
            'estado' => 'required|string',
            'profesion' => 'required|string'
        ]);
            
        DB::beginTransaction();
        try {
            $alumna->nombre = $request->nombre;
            $alumna->aPaterno = $request->apellido_paterno;
            $alumna->aMaterno = $request->apellido_materno;
            $alumna->direccion = $request->direccion;
            $alumna->telefono = $request->telefono;
            $alumna->fechaNacimiento = $request->fecha_nacimiento;
            $alumna->colonia = $request->colonia;
            $alumna->ciudad = $request->ciudad;
            $alumna->estado = $request->estado;
            $alumna->profesion = $request->profesion;                       
            $alumna->save();
            DB::commit();                    
            return $this->show($usuario->id);
        }catch(\Exception $e){
            DB::rollBack();
            dd($e);             
            return $this->show($usuario->id);
        }                     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \atandteam\Alumna  $alumna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alumna $alumna)
    {
        //
    }
}

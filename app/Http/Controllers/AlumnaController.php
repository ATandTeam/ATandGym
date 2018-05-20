<?php

namespace atandteam\Http\Controllers;

use atandteam\Inscripcion;
use DB;
use atandteam\Alumna;
use atandteam\User;
use Illuminate\Http\Request;

class AlumnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $inscripciones = Inscripcion::where('status','aprobado')->get();
        return view('administradora.ver_alumnas_IH',compact('inscripciones'));
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
        $alumna = Alumna::where('user_id','=',$idUsuario)->first();
        $usuario = User::where('id','=',$alumna->user_id)->first();
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
        DB::beginTransaction();
        try {
            $alumna->nombre = $request->name;
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
            return $this->show($alumna->user_id);
        }catch(\Exception $e){

            DB::rollBack();
            dd($e);
            return $this->show($alumna->user_id);
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
        $alumna->delete();
        return redirect(route('veralumnasinscritas'));
    }
}

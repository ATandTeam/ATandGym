<?php

namespace atandteam\Http\Controllers;

use atandteam\Antecedentes_alumna;
use atandteam\Grupo;
use atandteam\Inscripcion;
use Illuminate\Http\Request;
use atandteam\antecedentes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InscripcionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::all();
        return view('inscripciones.inscripcion_IH', compact('grupos'));

    }

    public function guardarGrupo($id)
    {
        session()->put('grupo', $id);
        return view('inscripciones.antecedentes_IH');
    }

    public function verAntecedentes($id)
    {
        $antecedente = Antecedentes::find($id);
        $nombreAlumna = $antecedente->alumna->nombre;
        return view('inscripciones.ver_antecedente_IH',[
            'antecedente' => $antecedente,
            'nombreAlumna' => $nombreAlumna
        ]);
    }

    public function confirmarInscripciones()
    {
        $inscripciones = Inscripcion::where('status','solicitado')->get();
        $inscripciones = $inscripciones->load(['grupo','antecedente']); // optimizacion de relaciones
        return view('administradora.confirmar_IH',compact('inscripciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ejercicio_anterior' => 'required|min:2',
            'porque_ejercicio'   => 'required|min:2',
            'tiene_lesion'   => 'required|min:2',
            'alguna_dieta'   => 'required|min:2',
            'toma_agua'  => 'required|min:2',
            'problemas' => 'required|min:2'
        ]);
        DB::beginTransaction();
        try{
            //crear antecedentes
            Antecedentes::create(
                [
                	'alumna_id' => Auth::user()->alumna->id,
                    'ejercicioAnterior' => $request->ejercicio_anterior,
                    'porqueEjercicio' => $request->porque_ejercicio,
                    'tieneLesion' => $request->tiene_lesion,
                    'algunaDieta' => $request->alguna_dieta,
                    'tomaAgua' => $request->toma_agua,
                    'problemas' => $request->problemas
                ]
            )->save();

            $antecedenteId = Antecedentes::all()->max('id');
            // dd(Antecedentes::all()->max('id'));
            // dd(Auth()->user()->alumna);
            // Antecedentes_alumna::create(
            //     [
            //         'antecedente_id' => $antecedenteId,
            //         'alumna_id' => Auth::user()->alumna->id
            //     ]
            // )->save();

            Inscripcion::create(
                [
                    'alumna_id' => Auth::user()->alumna->id,
                    'grupo_id' => session()->get('grupo'),
                    'fecha' => date('Y/m/d'),
                    'status' => 'solicitado'
                ]
            )->save();

            DB::commit();
            // asignando el antecedente a la alumna logueada

        }
        catch (\Exception $e){
            dd($e->getMessage());
            DB::rollBack();
        }

        return redirect(route('welcome'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function cambiarStatus($id)
    {
        $inscripcion = Inscripcion::find($id);
        $inscripcion->status = 'aprobado';
        $inscripcion->save();

        $inscripciones = Inscripcion::where('status','solicitado')->get();
        $inscripciones = $inscripciones->load(['grupo','antecedente']); // optimizacion de relaciones
        return view('administradora.confirmar_IH',compact('inscripciones'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

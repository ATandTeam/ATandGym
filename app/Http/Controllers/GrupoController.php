<?php

namespace atandteam\Http\Controllers;

use atandteam\Antecedentes;
use atandteam\Grupo;
use atandteam\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = Grupo::orderBy("hora")->get();
        return view('grupos.ver_IH',compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos.crear_IH');
    }

    public function store(Request $request)
    {
        $this->validar($request);
        $mismoCupo = Grupo::where('hora',$request->hora)->first();
        if ($mismoCupo != null)
            return back()->withInput(Input::all())->withErrors("Existe un grupo a la misma hora");
        Grupo::create($request->all())->save();
        return redirect(route('grupos.index'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * valida los datos del grupo
     * @param Request $request
     */
    private function validar(Request $request){
        $request->validate([
            "hora" => "date_format:H:i",
            "cupo" => "numeric|max:99|min:1"
        ]);
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
        $grupo = Grupo::find($id);

        return view('grupos.editar_IH',compact('grupo'));
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
        $grupo = Grupo::find($id);
        $this->validar($request);
        $grupo->hora = $request->hora;
        $grupo->cupo = $request->cupo;        
        $grupo->save();
        return redirect(route('grupos.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // usca los id de las alumnas que pertenecen al grupo que va a eliminar la admin.
        $idsAlumnasDeGrupoAEliminar = Inscripcion::where('grupo_id',$id)->pluck('alumna_id')->all();

        // busca los antecedentes de las alumnas que estan en esos grupos
        $antecedentesAEliminar = Antecedentes::whereIn('alumna_id',$idsAlumnasDeGrupoAEliminar)->get();

        // borrar los antecedentes de las alumnas de esos grupos
        foreach ($antecedentesAEliminar as $antecedente)
            $antecedente->delete();

        // borra el grupo
        Grupo::find($id)->delete();
        return redirect(route('grupos.index'));
    }
}

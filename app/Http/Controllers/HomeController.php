<?php

namespace atandteam\Http\Controllers;

use atandteam\Inscripcion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->id != 9999999){
            $userId = Auth::user()->alumna->id;
            if ($userId != 9999999){      // si no es la administradora
                $rol = Inscripcion::where('alumna_id',$userId)->first();
                
                return view('home')->with('rol',$rol);
            }
        }
        return view('home')->with('rol','admin');
    }
}

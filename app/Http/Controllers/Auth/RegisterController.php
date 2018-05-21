<?php

namespace atandteam\Http\Controllers\Auth;
use DB;
use atandteam\Alumna;
use atandteam\User;
use atandteam\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [            
            'username' => 'required|string|max:20',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \atandteam\User
     */
    protected function create(array $data){
        //Crear primero a una alumna, después crea a un usuario, y agregar id_alumna al usuario registrado
        
        $validator = Validator::make($data,[
            'nombre' => 'requiered|min:2',
            'apellido_paterno' => 'requiered|string',            
            'email' => 'requiered|email',
            'direccion' => 'requiered|string',
            'telefono' => 'requiered|digits:10',
            'ciudad' => 'requiered|string',
            'estado' => 'requiered|string',
            'profesion' => 'requiered|string'
        ]);
        
        if(!$validator->fails()){        
            $usuario = new User;
            $alumna = new Alumna;
            DB::beginTransaction();
            try{
                $alumna->nombre = $data['nombre'];
                $alumna->aPaterno = $data['apellido_paterno'];
                $alumna->aMaterno = $data['apellido_materno'];
                $alumna->direccion = $data['direccion'];
                $alumna->telefono = $data['telefono'];
                $alumna->fechaNacimiento = $data['fecha_nacimiento'];
                $alumna->colonia= $data['ciudad'];
                $alumna->estado= $data['estado'];
                $alumna->profesion= $data['profesion'];
                $alumna->ciudad= $data['ciudad'];            
                $alumna->save();            
                $usuario->username = $data['username'];
                $usuario->email = $data['email'];
                $usuario->password = Hash::make($data['password']);
                $usuario->alumna_id = $alumna->id;            
                $usuario->save();            
                DB::commit();
            }catch (\Exception $e){
                DB::rollBack();
            }
            return $usuario;
        }else{        
            dd($validator->errors()->first());
        }
    }
}
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
            'nombre' => 'required|min:2',
            'apellido_paterno' => 'required|string',            
            'email' => 'required|email',
            'direccion' => 'required|string',
            'telefono' => 'required|digits:10',
            'ciudad' => 'required|string',
            'estado' => 'required|string',
            'profesion' => 'required|string'
        ]);


    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \atandteam\User
     */
    protected function create(array $data){
        
        //Se verifica que los datos introducidos por la alumna cumplan con las reglas establecidas.
        
        //Se accede a la propiedad "fails()" del objeto "$Validator" que se usó anteriormente para saber
        //si la validación falló o no.
        
            //Se crea un objeto de la clase "User". Éste se usará para crear a un usuario               
            $usuario = new User;
            //Se crea un objeto de la clase "Alumna". Éste se usará para crear a una alumna               
            $alumna = new Alumna;
            //Se inicia una transacción. 
            DB::beginTransaction();
            //Se intenta crear a una alumna y un usuario con los datos que vienen en el objeto "$data".
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
                //Se guarda en la base de datos a la alumna creada.
                $alumna->save();            
                $usuario->username = $data['username'];
                $usuario->email = $data['email'];
                $usuario->password = Hash::make($data['password']);
                $usuario->alumna_id = $alumna->id;            
                //Se guarda en la base de datos al usuario creado
                $usuario->save();            
                //Se hace un commit para guardar los cambios.
                DB::commit();
            }catch (\Exception $e){
                //En caso de que exista un error, se hace un rollback.
                DB::rollBack();
            }
            //Se regresa a un usuario, pues de donde se llama el método se espera que se regrese a un usuario.
            return $usuario;
        
            //En caso de que exista un error en la validación se muestran los errores.
            return redirect(route('register'));
        
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Patient;


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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        $customMessages = [
            'ci.ecuador' => 'Esta cédula no existe'
        ];
        return Validator::make($data,[
            'middle_name' => ['required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'last_name' => ['required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'second_last_name' => ['required','regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+$/u'],
            'phone' => ['required','nullable','min:10'],
            'ci' => ['required','digits:10','ecuador:ci','unique:patients'],
            'age' => ['required','numeric','gt:0'],
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ],$customMessages);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Patient::create([
            'ci'=>$data['ci'],
            'middle_name'=>$data['middle_name'],
            'last_name'=>$data['last_name'],
            'second_last_name'=>$data['second_last_name'],
            'phone'=>$data['phone'],
            'age'=>$data['age'],
            'user_id'=>$user->id
        ]);
        $user->assignRole('paciente');
        return $user;

    }
}

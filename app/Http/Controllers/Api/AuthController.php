<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
class AuthController extends Controller
{
   /*
    [

            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],

           $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $user->assignRole('paciente');
         return $user;

   */
         public function login(Request $request){
            $credentials=$request->only('email','password');

            if(Auth::attempt($credentials)){
                $user = Auth::user();
                $passport=  $user->createToken(env('APP_NAME'))-> accessToken;
                $rol=$user->getRoleNames()->first();
                $success=true;

                $info='';
                if($rol=='medico'){
                    $info=$user->doctor;
                }elseif ($rol=='paciente') {
                    $info=$user->patient;
                }

                $user=Arr::add($user, 'rol',$rol);



                $data=compact('success','user','info','passport');
                return $data;
            }
            else{
                $success=false;
                $message='algo ha fallado';
                return compact('success','message');
            }

        }

        public function logout(Request $request){
            $accessToken = Auth::user()->token();
            $token= $request->user()->tokens->find($accessToken);
            $token->revoke();
            $success=true;
            $message='se ha cerradon con éxito';
            return compact('success','message');
        }

        public function register(Request $request){

            $this->validator($request->all())->validate();

            event(new Registered($user = $this->create($request->all())));

            Auth::guard('api')->login($user);


            $passport=  $user->createToken(env('APP_NAME'))-> accessToken;
            $rol=$user->getRoleNames()->first();
            $success=true;

            $info='';
            if($rol=='medico'){
                $info=$user->doctor;
            }elseif ($rol=='paciente') {
                $info=$user->patient;
            }

            $user=Arr::add($user, 'rol',$rol);



            $data=compact('success','user','info','passport');
            return $data;

        }

        protected function validator(array $data)
        {
            return Validator::make($data, User::$rules);
        }
    }

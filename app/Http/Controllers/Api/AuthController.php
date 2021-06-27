<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
use App\User;
use App\Patient;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

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
        $rules = [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ];
        $this->validate($request, $rules);

        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Patient::create([
            'ci'=>null,
            'middle_name'=>'',
            'last_name'=>'',
            'second_last_name'=>'',
            'phone'=>0,
            'age'=>'',
            'user_id'=>$user->id
        ]);
        $user->assignRole('paciente');

        $credentials=$request->only(['email'=>$user['email'],'password'=>$user['password']]);
        Auth::attempt($credentials);
        $passport=  $user->createToken(env('APP_NAME'))-> accessToken;
        $rol=$user->getRoleNames()->first();
        $success=true;

        $user=Arr::add($user, 'rol',$rol);

        $data=compact('success','user','passport');
        return $data;
    }

}

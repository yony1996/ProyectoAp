<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;
class AuthController extends Controller
{
   
    public function login(Request $request){ 
        $credentials=$request->only('email','password');
        
        if(Auth::attempt($credentials)){ 
            $user = Auth::user(); 
            $passport=  $user->createToken(env('APP_NAME'))-> accessToken; 
            $rol=$user->getRoleNames()->first();
            $success=true;
        

            $user=Arr::add($user, 'rol',$rol);
            
           
           
            $data=compact('success','user','passport');
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Configuracion;
class UserController extends Controller
{
    //

    public function registerapp(Request $request)
    {
    	$data = json_decode($request->getContent());
        // $user =  User::find($data->user_id);
        $user =  User::where('clave',"=",$data->clave)->first();
    	$user->token = $data->token;
    	$user->save();
    	return "ok";
    	// print_r($data);
    	// print_r($request->getContent());
    }

    public function superadmin(){
        $config = configuracion::first();
        return view('expedientes/superadmin')->with(['config'=>$config]);
    }

    public function updateFilters(Request $request){
        $config = configuracion::first();

        $config->filter = $request->asuntos;
        $config->save();
        return redirect('expedientes/superadmin');
    }

    public function updateClave()
    {

        $u = User::find(2);
        $u->password = Hash::make('m3dicin4');
        $u->save();

        $u = User::find(3);
        $u->password = Hash::make('0dontologi4');
        $u->save();
        
        $u = User::find(4);
        $u->password = Hash::make('4rquitectur4');
        $u->save();

        $u = User::find(5);
        $u->password = Hash::make('4grarias');
        $u->save();

        $u = User::find(6);
        $u->password = Hash::make('3conomic4s');
        $u->save();

        $u = User::find(7);
        $u->password = Hash::make('3xact4s');
        $u->save();
       
        $u = User::find(8);
        $u->password = Hash::make('v3terinari4s');
        $u->save();

        $u = User::find(9);
        $u->password = Hash::make('d3rech0');
        $u->save();

      
        $u = User::find(10);
        $u->password = Hash::make('hum4nidad3s');
        $u->save();

        $u = User::find(11);
        $u->password = Hash::make('1ngenieri4');
        $u->save();

        

     

    }


}

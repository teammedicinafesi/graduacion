<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $id = auth()->id();
    	$user           = User::select('id','name','apellidos','fiesta')->where('id',$id)->first();
    	$boletos_adulto = $user->boletos->where('tipo','adulto')->count();
    	$boletos_menor  = $user->boletos->where('tipo','menor')->count();
    	return view('user.index',
    		[
    			'user'           =>  $user,
    			'boletos_adulto' =>  $boletos_adulto,
    			'boletos_menor'  =>  $boletos_menor
    		]);
    }
}

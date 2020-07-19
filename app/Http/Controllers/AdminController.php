<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Boleto;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','rol.admin']);
    }

    public function index(){
    	$usuarios_mayo  = User::where('fiesta','mayo')->count();
    	$usuarios_junio = User::where('fiesta','junio')->count();
    	

    	return view('admin.index',['usuarios_mayo'=>$usuarios_mayo,'usuarios_junio'=>$usuarios_junio]);
    }
    

    public function graduacion($mes){
    	$users = User::select('id','name','apellidos')->where('fiesta',$mes)->get();
    	return view('admin.graduacion',['mes'=>$mes,'users'=>$users]);
    }
    


    public function registrar_boletos($id){
    	$user = User::select('id','name','apellidos','fiesta')->where('id',$id)->first();
    	return view('admin.registrar_boletos',['user'=>$user]);
    }


    public function store_boletos(Request $request,$id){
    	$request->validate([
    		'tipo' => 'required'
    	]);

    	$precio = 0;
    	if ($request->tipo == 'adulto') {
    		$precio = 1400;
    	}
    	if ($request->tipo == 'menor') {
    		$precio = 900;
    	}

    	for ($i=1; $i <= $request->cantidad ; $i++) { 
    		$boleto = new Boleto;
    		$boleto->tipo    = $request->tipo;
    		$boleto->precio  = $precio;
    		$boleto->estado  = 'en_espera';
    		$boleto->user_id = $id;
    		$boleto->save();
    	}

    	return back()->with('status','Los boletos se registraron correctamente');
    }
}

<?php

use App\Http\Controllers\actividadController;
use App\Models\actividad;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});
Route::get('/home', function () {

    $user = Auth::user();
   
    /* si es Super Admin */
    if($user->rol == 'A'){
        if($user->seccion == 'mujeres'){
            /* 
            - Autoriza a AA. 
            - Crud de **Actividades**. 
             */
            $actividades = DB::table('actividads')->where('seccion','=','mujeres')->get();
            return view('AHM.home')->with('user',$user)->with('actividades',$actividades);


            /*  
            - Puede ver todas las actividades y sus participantes. 
            - Puede ver el estado de los Pagos. Ver qué onda los datos de TuCuota.
            */
        }else{

            $actividades = DB::table('actividads')->where('seccion','=','hombres')->get();
            return view('AHM.home')->with('user',$user)->with('actividades',$actividades);

        }
    }elseif($user->rol == 'AA'){

        if($user->seccion == 'mujeres'){

            $actividades = DB::table('actividads')->where('seccion','=','hombres')->get();
            return view('AA.home')->with('user',$user)->with('actividades',$actividades);

            /* 
            -  Descargar Listados
            -  Administrar los **Participantes**. [Anotado, Confirmado, Pagó] 
            */
        }else{

        }

    }elseif($user->rol == 'SA'){


    }
   

})->middleware('auth');

Route::get('/homeA', function () {
    return view('AA.home');
});
Route::get('/homeM', function () {
    return view('AHM.home');
});


Route::resource('/tuCuota','App\Http\Controllers\tuCuota');
Route::resource('/actividades','App\Http\Controllers\actividadController');
Route::resource('/inscripcion','App\Http\Controllers\inscripcionController');
Route::resource('/usuarios','App\Http\Controllers\userController');







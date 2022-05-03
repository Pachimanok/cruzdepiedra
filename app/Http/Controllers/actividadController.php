<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use App\Models\inscripcion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class actividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $act = $_GET['act'];

        // si es mujeres
        if( $act == 'mujeres') {
            
            $convMuj = DB::table('actividads')->where('seccion','=','mujeres')->where('tipo','=','convivencia')->orderBy('FechaInicio','ASC')->get();
            $retMuj = DB::table('actividads')->where('seccion','=','mujeres')->where('tipo','=','retiro')->orderBy('FechaInicio','ASC')->get();
            $otrosMuj = DB::table('actividads')->where('seccion','=','mujeres')->where('tipo','=','otros')->orderBy('FechaInicio','ASC')->get();

            return view('actividades')->with('ruta','mujeres')->with('conv',$convMuj)->with('ret',$retMuj)->with('otros',$otrosMuj);


        }else {

            $convHom = DB::table('actividads')->where('seccion','=','hombres')->where('tipo','=','convivencia')->orderBy('FechaInicio','ASC')->get();
            $retHom = DB::table('actividads')->where('seccion','=','hombres')->where('tipo','=','retiro')->orderBy('FechaInicio','ASC')->get();
            $otrosHom = DB::table('actividads')->where('seccion','=','hombres')->where('tipo','=','otros')->orderBy('FechaInicio','ASC')->get();

            return view('actividades')->with('ruta','hombre')->with('conv',$convHom)->with('ret',$retHom)->with('otros',$otrosHom);

        }
        
        // si es varones



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $qa = DB::table('actividads')->where('id','=',$id)->get();
        $actividad = $qa[0];
        $participantes = DB::table('inscripcions')->where('id_actividad','=',$id)->get();
        /* dd($participantes ,$actividad); */

        return view('AA.indexActividad')->with('participantes', $participantes)->with('actividad', $actividad)->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use App\Models\inscripcion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Session;


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
        $user = Auth::user();
        if($user->rol == 'A'){

            $directores = DB::table('users')->where('seccion','=',$user->seccion)->get();
            return view('AHM.createActividad')->with('user', $user)->with('directores', $directores);

        }else{
            echo 'No tenes permiso para crear Actividad';
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        foreach($request->tipo as $tipo);
        foreach($request->subDirector as $subDirector);
        foreach($request->director as $director);

        $actividad = new actividad();
        $actividad->titulo = $request['titulo'];
        $actividad->descripcion = $request['descripcion'];
        $actividad->FechaInicio = $request['FechaInicio'];
        $actividad->horaInicio = $request['horaInicio'];
        $actividad->FechaFin = $request['FechaFin'];
        $actividad->horaFin = $request['horaFin'];
        $actividad->seccion = $user->seccion;
        $actividad->tipo = $tipo;
        $actividad->precio = $request['precio'];
        $actividad->estado = 'abierta';
        if($director != null ){
            $actividad->director = $director;
        }
        if($subDirector != null ){

            $actividad->subDirector = $subDirector;

        }
        $actividad->save();

        Session::flash('message','Se creo correctamente la Actividad');
        return redirect('/home');
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
        if($user->rol == 'A' ){
           
            if($user->seccion == $actividad->seccion){

                return view('AHM.indexActividad')->with('participantes', $participantes)->with('actividad', $actividad)->with('user', $user);
            
            }else{

                echo "No estas en la seccion para ver esta actividad";
            }

        }else{

            return view('AA.indexActividad')->with('participantes', $participantes)->with('actividad', $actividad)->with('user', $user);

        }

    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $actividad = actividad::find($id);
        $directores = DB::table('users')->where('seccion','=',$user->seccion)->get();
        return view('AHM.editActividad')->with('actividad',$actividad)->with('user',$user)->with('directores', $directores);
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


        $user = Auth::user();

        foreach($request->tipo as $tipo);
        foreach($request->subDirector as $subDirector);
        foreach($request->director as $director);

        $actividad = actividad::find($id);
        $actividad->titulo = $request['titulo'];
        $actividad->descripcion = $request['descripcion'];
        $actividad->FechaInicio = $request['FechaInicio'];
        $actividad->horaInicio = $request['horaInicio'];
        $actividad->FechaFin = $request['FechaFin'];
        $actividad->horaFin = $request['horaFin'];
        $actividad->seccion = $user->seccion;
        $actividad->tipo = $tipo;
        $actividad->precio = $request['precio'];
        $actividad->estado = 'abierta';
        if($director != null ){
            $actividad->director = $director;
        }
        if($subDirector != null ){

            $actividad->subDirector = $subDirector;

        }
        $actividad->save();

        Session::flash('message','Se editó correctamente la Actividad');
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $actividad = actividad::destroy($id);

        
        if($actividad == 0){

            Session::flash('message','Ups, no se eliminó Actividad con ID: ' . $id);
            return redirect('/home');

        }else{

            Session::flash('message','Se eliminó correctamente Actividad con ID: ' . $id);
            return redirect('/home');
        }
    }
}

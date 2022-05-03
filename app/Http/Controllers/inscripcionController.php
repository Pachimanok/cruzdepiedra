<?php

namespace App\Http\Controllers;

use App\Models\actividad;
use App\Models\inscripcion;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;

class inscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = $_GET['id'];
        $actividad = actividad::find($id);


        return view('forms.createInscripcion')->with('actividad',$actividad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request['pago'] as $pago);

        $inscrito = new inscripcion();
        $inscrito->nombre = $request['nombre'];
        $inscrito->apellido = $request['apellido'];
        $inscrito->phone = $request['phone'];
        $inscrito->email = $request['email'];
        $inscrito->llega = $request['llega'];
        $inscrito->facturacion = $request['facturacion'];
        $inscrito->dieta = $request['dieta'];
        $inscrito->observaciones = $request['observaciones'];
        $inscrito->pago= $pago;
        $inscrito->estado_pago= 'no pagado';
        $inscrito->total_pago= $request['total_pago'];
        $inscrito->id_actividad= $request['id_actividad'];
        $inscrito->save();

        $actividad = actividad::find($request['id_actividad']);
        return view('forms.checkout')->with('pago',$pago)->with('nombre',$request['nombre'])->with('actividad',$actividad);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        foreach($request['estado_pago'] as $estado_pago);
        foreach($request['estado_participacion'] as $estado_participacion);
        $id_actividad = $request['id_actividad'];

        $participante = inscripcion::find($id);
        $participante->nombre = $request['nombre'] ;
        $participante->apellido = $request['apellido'];
        $participante->phone = $request['phone'] ;
        $participante->email = $request['email'] ;
        $participante->llega = $request['llega'] ;
        $participante->facturacion = $request['facturacion'] ;
        $participante->dieta = $request['dieta'] ;
        $participante->observaciones = $request['observaciones'] ;
        $participante->estado_pago = $estado_pago;
        $participante->estado_participacion = $estado_participacion ;
        $participante->save();

        Session::flash('message','Se modificó correctamente el Participante');

        return redirect('actividades/'.$id_actividad);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'vamos a eliminar' . $id;
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\inscripcion;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tuCuota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://sandbox.tucuota.com/api/customers/CSNaZLKaE8nY', [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' =>  'Bearer sk_test_G3SGBIern0mfzDUkd9GkivHGrA3JdafmsgmoVgDRiuY7LF3HBUg4kIk4fUSm9g9HJRAFi3QmFGRhhZRkiOnxFVJqdXnTQ08ii1Fk'
            ]
        ]);


        dd($res);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $client = new Client();
        $data = array( 
            "name"=> "Otro Pai Rio",
            "email"=> "otrophi@email.com",
            "identification_type"=> "DNI",
            "identification_number"=> 20348189039);

        $res = $client->post(
            "https://sandbox.tucuota.com/api/subscriptions",
            [
                'headers' => [
                    'Content-Type'  => 'application/json',
                    'Authorization' =>  'Bearer sk_test_G3SGBIern0mfzDUkd9GkivHGrA3JdafmsgmoVgDRiuY7LF3HBUg4kIk4fUSm9g9HJRAFi3QmFGRhhZRkiOnxFVJqdXnTQ08ii1Fk'
                ],
                'body'=>json_encode($data)
            ]);
        
     
      $fin = json_decode((string) $res->getBody()->getContents());
      return $fin->data->id;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach($request['count'] as $count); 
        $amount = $request['amount']/ $count;

        $client = new Client();
        $data = array( 
                "amount"=> $amount,
                "description"=> $request['description'],
                "customer_id"=> $request['customer_id'],
                "count"=> $count,
                "payment_method_number"=>$request['payment_method_number'],
                "interval_unit"=> "monthly",
                "day_of_month"=> 1,
           );
        $res = $client->post(
            "https://sandbox.tucuota.com/api/subscriptions",
            [
                'headers' => [
                    'Content-Type'  => 'application/json',
                    'Authorization' =>  'Bearer sk_test_G3SGBIern0mfzDUkd9GkivHGrA3JdafmsgmoVgDRiuY7LF3HBUg4kIk4fUSm9g9HJRAFi3QmFGRhhZRkiOnxFVJqdXnTQ08ii1Fk'
                ],
                'body'=>json_encode($data)
            ]);
     
            $fin = json_decode((string) $res->getBody()->getContents());
            $datos = $fin->data;
           
            $qi =  DB::table('inscripcions')->where('id_tucuota','=',$datos->customer->id)->get();
            $idIn = $qi[0];
            $inscripcion = inscripcion::find($idIn->id) ;
            $inscripcion->estado_pago = "pagado";
            $inscripcion->save();

            if($fin->data->status == 'active'){
                return view('forms.checkoutTuCuota')->with('data', $datos);
            }else{
                return $fin->data->status;
            };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://sandbox.tucuota.com/api/customers/CSNaZLKaE8nY');
        $response = $request->getBody();

        dd($response);
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
        //
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

    public function guzzleGet()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('https://sandbox.tucuota.com/api/customers/CSNaZLKaE8nY');
        $response = $request->getBody();

        dd($response);
    }

    public function guzzleGet2()
    {
        echo 'Hola Manes';
    }
}

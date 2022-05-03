<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tuCuota extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new \GuzzleHttp\Client();
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
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://sandbox.tucuota.com/api/customers/'.$id, [
            'headers' => [
                'Content-Type'  => 'application/json',
                'Authorization' =>  'Bearer sk_test_G3SGBIern0mfzDUkd9GkivHGrA3JdafmsgmoVgDRiuY7LF3HBUg4kIk4fUSm9g9HJRAFi3QmFGRhhZRkiOnxFVJqdXnTQ08ii1Fk'
            ]
        ]);
       
        dd($res);
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

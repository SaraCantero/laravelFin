<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Oferta;
use Validator;



class OfertasController extends Controller
{

    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::all();
        return response()->json(['Ofertas' => $ofertas->toArray()], $this->successStatus);
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
    public function show($ciclo_id)
    {
        $oferta = Oferta::where('ciclo_id', $ciclo_id)->get();

        return response()->json(['Oferta' => $oferta->toArray()], $this->successStatus);
    }

     //     // $validator = Validator::make($input, [
    //     //         'ciclo_id' => 'required'
    //     //     ]);
    //     $oferta = Oferta::where('cicle_id', $ciclo_id)->get();
    //     if (is_null($oferta)) {
    //     return response()->json(['error' => $validator->errors()], 401);
    //     }
    //     return response()->json(['Oferta' => $oferta->toArray()], $this->successStatus);
    // }
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
}

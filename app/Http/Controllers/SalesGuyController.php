<?php

namespace App\Http\Controllers;

use App\Models\SalesGuy;
use App\Rules\ValidatePCode;
use Illuminate\Http\Request;
use Psy\Util\Json;

class SalesGuyController extends Controller
{

    public function addSales($id,$p_code)
    {

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesGuy = SalesGuy::all()->toJson(JSON_PRETTY_PRINT);
        return response($salesGuy, 200);
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
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'p_code'=>['required',
                new ValidatePCode()],
        ]);
        $salesGuy = new SalesGuy([
            'name' => $request->get('name'),
            'p_code'=> Json::encode($request->get('p_code'))
        ]);

        $salesGuy->save();
        return response()->json(['message'=>'Successfully created','data'=>$salesGuy]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SalesGuy  $salesGuy
     * @return \Illuminate\Http\Response
     */
    public function show(SalesGuy $salesGuy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SalesGuy  $salesGuy
     * @return \Illuminate\Http\Response
     */
    public function edit(SalesGuy $salesGuy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SalesGuy  $salesGuy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SalesGuy $salesGuy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SalesGuy  $salesGuy
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesGuy $salesGuy)
    {
        //
    }
}

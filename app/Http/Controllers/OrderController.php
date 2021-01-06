<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestOrder;
use App\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $user = DB::table('rendez_vouses')->where('Status', 'ylla')->get();
        // dd($user);

        return view(
            'dashbord.order',
            ['order' => order::where('status', 'NonConfirme')->get(), 'tab' => 'NonConfirme']
        );
    }
    public function Confirme()
    {


        return view(
            'dashbord.order',
           ['order' => order::where('status', 'Confirme')->get(), 'tab' => 'Confirme']
        );
    }

    public function livre()
    {
        return view(
            'dashbord.order',
            ['order' => order::where('status', 'livre')->get(), 'tab' => 'livre']
        );
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
    public function store(RequestOrder $request)
    {


        $rendez = new order();
        $rendez->name = $request->name;
        $rendez->number = $request->number;
        $rendez->address = $request->address;
        $rendez->city = $request->city;
        $rendez->Quantity = $request->Quantity;

        $rendez->status = 'NonConfirme';



        $rendez->save();


        return redirect()->route('thankyou1');
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
        $rendez = order::findOrFail($id);
        $rendez->name = $request->name;
        $rendez->number = $request->number;
        $rendez->address = $request->address;
        $rendez->city = $request->city;

        $rendez->status = $request->status;


        $rendez->save();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $RendezVous = order::findOrFail($id);

        $RendezVous->delete();
        return redirect()->back();
    }
}

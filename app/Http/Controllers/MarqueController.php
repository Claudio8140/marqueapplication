<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marque;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MarqueFormRequest;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques = Marque::all();
        return view ('marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\MarqueFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarqueFormRequest $request)
    {
        $input = $request->all();
        Marque::create($input);
        Session::flash('success', 'Marque Added!');
        return redirect('marques');
        // Marque::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marque = Marque::find($id);
        return view('marques.show')->with('marques', $marque);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $marque = Marque::find($id);
        return view('marques.edit')->with('marques', $marque);
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
        $marque = Marque::find($id);
        $input = $request->all();
        $marque->update($input);
        Session::flash('success', 'Marque Updated!');
        return redirect('marques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Marque::destroy($id);
        Session::flash('success', 'Marque deleted!!');
        return redirect('marques');
    }
}

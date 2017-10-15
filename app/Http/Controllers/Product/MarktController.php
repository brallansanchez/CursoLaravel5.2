<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \App\Models\Product\Market;
use Session;


class MarktController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$marks = Market::all();
         $marks = Market::select('marks.name')->paginate(5);
          return View('market/index')->with('marks',$marks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {        
        return view('market.create');//->with('marks',$marks);
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Market::create($request->all());
        Session::flash('save','Se ha guardado correctamente');
        return redirect()->route('market.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marks = Market::FindOrFail($id);
        return view('market.show')->with('marks',$marks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $marks = Market::FindOrFail($id);
        return view('market.edit')->with('marks',$marks);
    
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
       $marks = Market::FindOrFail($id);
        $input = $request->all();
        $marks->fill($input)->save();
        Session::flash('update','Se ha actualizado correctamente');
        
        return redirect()->route('market.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $marks = Market::FindOrFail($id);
        $marks->delete();
        Session::flash('delete','Se ha eliminado correctamente');
        
        return redirect()->route('market.index');

    }
}

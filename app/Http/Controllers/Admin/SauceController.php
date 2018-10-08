<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Models\Sauce;

class SauceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sauces = Sauce::all();
        return view('admin.sauce.list')->with('items', $sauces);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sauce.add');
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
        $sauce = new Sauce();
        $sauce->name = $request->name;
        $sauce->price = $request->price;
        $sauce->save();
        return redirect()->route('sauces.index');
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
        $sauce = Sauce::find($id);
        return view('admin.sauce.edit')->with('sauce', $sauce);
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
        $sauce = Sauce::find($id);
        $sauce->name = $request->name;
        $sauce->price = $request->price;
        $sauce->save();
        return redirect()->route('sauces.index');
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
        $sauce = Sauce::find($id);
        $sauce->delete();
        return redirect()->route('sauces.index');
    }
}

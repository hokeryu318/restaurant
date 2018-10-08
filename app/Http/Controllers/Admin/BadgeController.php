<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Badge;

class BadgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $badges = Badge::all();
        return view('admin.badge.list')->with('items', $badges);
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
        if($request->hasFile('img')){
            
            if($request->file('img')->isValid()){
                $file = $request->file('img');
                $name = time().'.'.$file->getClientOriginalExtension();
                $file->move("storage/badges", $name);

                $rec = new Badge();
                $rec->name = $request->name;
                $rec->img = "storage/badges/". $name;
                $rec->save();
            }
        }
        return redirect()->route('badges.index');
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
        $badge = Badge::find($id);
        $badge->delete();
        return redirect()->route('badges.index');
    }
}

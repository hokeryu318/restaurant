<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Menucategory;

class MenuController extends Controller
{
    //
    public function menulist(){
        $items = Menucategory::all();
        return view('admin.menucategory.list')->with('items', $items);
    }

    public function menuadd(){
        return view('admin.menucategory.add');
    }

    public function menuaddpost(Request $request){
        Menucategory::create([
            'name' => $request->name,
            'flag' => '0'
        ]);
        return redirect()->route('admin.menucategory');
    }

    public function menuedit($id){
        $item = Menucategory::find($id);
        return view('admin.menucategory.edit')->with('item', $item);
    }

    public function menueditpost(Request $request){
        $item_id = $request->item_id;
        $item = Menucategory::find($item_id);
        $item->name = $request->name;
        $item->save();
        return redirect()->route('admin.menucategory');
    }

    public function menuremove($id){
        $item = Menucategory::find($id);
        $item->delete();
        $items = Menucategory::all();
        return view('admin.menucategory.list')->with('items', $items);
    }
}

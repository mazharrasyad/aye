<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usaha;
Use App\Modal;
class UsahaController extends Controller
{
    //
    public function index()
    {
    	$usaha = Usaha::all();
    	return view('usaha.index',compact('usaha'));
    }

    public function delete($id)
    {
    	$usaha = Usaha::find($id);
    	$usaha->delete();
    	return redirect('/usahaku');
    }

    public function create()
    {
    	$modal = Modal::all();
    	return view('usaha.create',compact('modal'));
    }

    public function createusaha(Request $request)
    {
    	$usaha = new Usaha;
    	  if ($request->hasFile('foto')) {
            $request->file('foto')->move(public_path('usaha/'),$request->file('foto')->getClientOriginalName());
        }
    	$usaha->nama = $request->nama;   
    	$usaha->foto = $request->file('foto')->getClientOriginalName();
    	$usaha->modal_id = $request->modal_id;
    	$usaha->save();
    	return redirect('/usahaku');
    	
    }
}

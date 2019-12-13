<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;
class JenisController extends Controller
{
    //
    public function index()
    {
    	$jenisnya = Jenis::all();
    	return view('jenis.index',compact('jenisnya'));
    }

    public function create()
    {
    	
    	$jenisnya = Jenis::all();
    		
		return view('jenis.create',compact('jenisnya'));
        	
    }
    public function createjenis(Request $request)
    {
    	$jenisnya = new Jenis;
    	$jenisnya->nama = $request->nama;
    	$jenisnya->save();
    	return redirect('/jenis');
        	
    }

    public function delete($id)
    {
    	$jenisnya = Jenis::find($id);
    	$jenisnya->delete();
    	return redirect('/jenis');
        	
    

    }
}

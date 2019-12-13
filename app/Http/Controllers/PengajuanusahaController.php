<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajuanusaha;
use App\Jenis;
use App\User;
class PengajuanusahaController extends Controller
{
    
    //
    public function index()
    {
    	$pengajuanusaha = Pengajuanusaha::all();
    	return view('pengajuanusaha.index',compact('pengajuanusaha'));
    }

    public function create()
    {
    	$jenis = Jenis::all();
    	$pengajuanusaha = Pengajuanusaha::all();
    	$user = User::all();
		return view('pengajuanusaha.create',compact('pengajuanusaha','jenis','user'));
        	
    }
    public function createpengajuanusaha(Request $request)
    {        if ($request->hasFile('foto')) {
            $request->file('foto')->move(public_path('usaha/'),$request->file('foto')->getClientOriginalName());
        }
            $pengajuanusaha = new Pengajuanusaha;
            $pengajuanusaha->nama = $request->nama;
             $pengajuanusaha->jenis_id = $request->jenis_id;
             $pengajuanusaha->deskripsi = $request->deskripsi;

            $pengajuanusaha->alamat = $request->alamat;
            $pengajuanusaha->budget = $request->budget;
            $pengajuanusaha->user_id = $request->user_id;

            $pengajuanusaha->durasi = $request->durasi;
            $pengajuanusaha->foto = $request->file('foto')->getClientOriginalName();
            $pengajuanusaha->save();

    	return redirect('/pengajuanusaha');
        	
    }

    public function delete($id)
    {
    	$usaha = Pengajuanusaha::find($id);
    	$usaha->delete();
    	return redirect('/pengajuanusaha');
        	
    

    }

}

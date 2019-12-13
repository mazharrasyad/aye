<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Validasi;
class ValidasiController extends Controller
{
    //
    public function index()
    {
    	$validasi = Validasi::all();
    	return view('validasi.index',compact('validasi'));
    }

    public function delete($id)
    {
    	$validasi = Validasi::find($id);
    	$validasi->delete();
    	return redirect('/validasi');
    }

    public function statuslegal($id)
    {       
    	$validasi = Validasi::find($id);
        if($validasi->legalitas == 0){
            $change_status = '1';
        }else {
            $change_status = '0';
        }

        Validasi::where('id',$id)->update(['legalitas' => $change_status]);
 		return redirect('/validasi');
    }

    public function statusprospek($id)
    {       
    	$validasi = Validasi::find($id);
        if($validasi->prospek == 0){
            $change_status = '1';
        }else {
            $change_status = '0';
        }

        Validasi::where('id',$id)->update(['prospek' => $change_status]);
 		return redirect('/validasi');
    }

    public function statusbudget($id)
    {       
    	$validasi = Validasi::find($id);
        if($validasi->budget == 0){
            $change_status = '1';
        }else {
            $change_status = '0';
        }

        Validasi::where('id',$id)->update(['budget' => $change_status]);
 		return redirect('/validasi');
    }

}

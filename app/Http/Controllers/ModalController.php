<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modal;
use App\Validasi;
class ModalController extends Controller
{
    //
    public function index()
    {
    	$modal = Modal::all();
    	return view('modal.index',compact('modal'));
    }
    public function delete($id)
    {
    	$modal = Modal::find($id);
    	$modal->delete();
    	return redirect('/modal');
    }

    public function create()
    {
    	$validasi = Validasi::all();
    	return view('modal.create',compact('validasi'));
    }

    public function createmodal(Request $request)
    {
    	$modal = new Modal;
    	$modal->validasi_id = $request->validasi_id;
    	$modal->budget = $request->budget;
    	$modal->jumlahsaham = $request->jumlahsaham;
    	$modal->sisasaham = $request->sisasaham;
    	$modal->hargasaham = $request->hargasaham;
    	$modal->durasijual = $request->durasijual;
    	$modal->roi = $request->roi;
    	$modal->save();
    	return redirect('/modal');
    }
}

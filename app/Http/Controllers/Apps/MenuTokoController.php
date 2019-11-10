<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\TokoModel;

class MenuTokoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['data'] = TokoModel::where('id_users', Auth::id())->get();
        //var_dump($data);
        return view('mobile.pengaturan.toko.toko',$data);
    }

    public function add(Request $request)
    {
        $toko_model = new TokoModel;
        $toko_model->id_users = Auth::id();
        $toko_model->nama = $request->name;
        $toko_model->alamat = $request->alamat;
        $toko_model->notelp = $request->notelp;
        $toko_model->website = $request->website;
        $toko_model->deskripsi = $request->deskripsi;
        $toko_model->save();
        return redirect('/home/ukm');
    }
}

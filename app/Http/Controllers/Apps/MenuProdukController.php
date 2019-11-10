<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\TokoModel;
use App\BarangModel;

class MenuProdukController extends Controller
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
        $data['data_ukm'] = TokoModel::where('id_users', Auth::id())->get();
        //$data['data_produk'] = BarangModel::where('id_users', Auth::id())->get();
        $data['data_produk'] = DB::table('barang')->join('toko', 'barang.id_toko', 'toko.id')
                ->where('toko.id_users', '=', Auth::id())->get();
        return view('mobile.manajemen.produk.produk',$data);
    }

    public function add(Request $request)
    {
        $toko_model = new BarangModel;
        $toko_model->id_toko = $request->id_toko;
        $toko_model->nama = $request->name;
        $toko_model->qty = $request->jumlah;
        $toko_model->harga_ses = $request->harga_ses;
        $toko_model->harga_seb = $request->harga_seb;
        $toko_model->kode = $request->kodebar;
        $toko_model->save();
        return redirect('/home/produk');
    }
}
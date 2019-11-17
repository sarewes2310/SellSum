<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\TokoModel;

class HomeController extends Controller
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
        $data['data_produk'] = DB::table('barang')->select('barang.nama as nama','barang.harga_ses as harga', 'barang.qty as qty')->join('toko', 'barang.id_toko', 'toko.id')
                ->where('toko.id_users', '=', Auth::id())->get();
        return view('mobile.beli.beli',$data);
    }

    public function scan_barcode()
    {
        return view();
    }

    public function scandir()
    {
        
    }
}

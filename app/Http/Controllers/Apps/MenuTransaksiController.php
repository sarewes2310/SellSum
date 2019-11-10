<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\KeranjangBelanjaModel;

class MenuTransaksiController extends Controller
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
        return view('mobile.transaksi.transaksi');
    }

    public function addCart(Request $request)
    {
        
        $keranjang = new KeranjangBelanjaModel;
        $keranjang->id_users = Auth::id();    
        $keranjang->save();     

        //$id = KeranjangBelanjaModel::

    }
    
}

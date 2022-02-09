<?php

namespace App\Http\Controllers;
use App\Models\signa_m;
use App\Models\obatalkes_m;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    public function index(Request $request)
    {
     
       
        $data = signa_m::join('obatalkes_m', 'signa_id', '=', 'signa_m.signa_id')
        ->get(['signa_m.signa_nama','signa_m.signa_kode','obatalkes_m.obatalkes_kode' ,
        'obatalkes_m.obatalkes_nama']);
        $carii = $request->input('carii');
        return view('home',compact('data')  );
    }



}

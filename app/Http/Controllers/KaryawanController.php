<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){

        $data = Karyawan::all();
        return view('datakaryawan',compact('data'));
    }

    public function tambahkaryawan(){
        return view('tambahdata');
    }
    public function prosesdata(Request $request){
        //dd($request->all());
        Karyawan::create($request->all());
    }
}

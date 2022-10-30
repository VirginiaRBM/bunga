<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function home(){
        $barang['allBarang'] = Barang::all();
        return view('home', ["title" => "home"], $barang );
    }

    public function review($id){
        $review_barang = Barang::find($id);
        return view('reviewBarang', ["title" => "barang"], compact('review_barang'), $review_barang);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{

    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";

        $umur = 35;

        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

    	return view('biodata',['nama' => $nama, 'umur' => $umur, 'matkul' => $pelajaran]);
    }
}

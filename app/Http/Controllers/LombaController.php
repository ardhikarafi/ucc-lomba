<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Lomba;
use Auth;
//

class LombaController extends Controller
{
    function index(){
        if(Auth::user()->role != 'admin'){
            return '404 Halaman Error';
        }
        return view('lomba.index');
    }

    function detail($id){
        return view('lomba.detail');
    }
    function add(){
        if(Auth::user()->role != 'admin'){
            return '404 Halaman Error';
        }
        return view('lomba.add');
    }
    function create(Request $request){
        if(Auth::user()->role != 'admin'){
            return '404 Halaman Error';
        }
        //Ambil data request dari inputan dan buatkan variabel;
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $poster = $request->poster;
        $tanggal = $request->tanggal;
        //End ambil data
        //kondisi kososng
        if($nama == null){
            return 'Nama kosong, mohon diisi';
        }
        if($deskripsi == null){
            return 'Deskripsi kosong, mohon diisi';
        }
        if($poster == null){
            return 'Poster kosong, mohon diisi';
        }
        if($tanggal == null){
            return 'Tanggal kosong, mohon diisi';
        }
        //end kondisi

        //Input ke database
        $lomba = new Lomba;
        $lomba->name = $nama;
        $lomba->deskripsi = $deskripsi;
        $lomba->poster = $poster;
        $lomba->tanggal_tutup = $tanggal;
        $lomba->save();
        return redirect('lomba');
        //end input database

    }
    function edit($id){
        if(Auth::user()->role != 'admin'){
            return '404 Halaman Error';
        }
        $lomba = \App\Lomba::find($id);
        return view('lomba.edit')->with('lomba',$lomba);
    }
    function update(Request $request, $id){
        if(Auth::user()->role != 'admin'){
            return '404 Halaman Error';
        }
        //Ambil data request dari inputan dan buatkan variabel;
        $nama = $request->nama;
        $deskripsi = $request->deskripsi;
        $poster = $request->poster;
        $tanggal = $request->tanggal;
        //End ambil data
        

        //Input ke database
        $lomba = \App\Lomba::find($id);
        $lomba->name = $nama;
        $lomba->deskripsi = $deskripsi;
        $lomba->poster = $poster;
        $lomba->tanggal_tutup = $tanggal;
        $lomba->save();
        return redirect('lomba');
        //end input database

        
    }
    function delete($id){
        if(Auth::user()->role != 'admin'){
            return '404 Halaman Error';
        }
        $lomba = \App\Lomba::find($id);
        return view('lomba.delete')->with('lomba',$lomba);
    }
    function confirmDelete($id){
        if(Auth::user()->role != 'admin'){
            return '404 Halaman Error';
        }
        $lomba = \App\Lomba::find($id);
        $lomba->delete();
        return redirect('lomba');

    }
}

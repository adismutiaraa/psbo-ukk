<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\laporan;

class UserController extends Controller
{
    public function kontak (){
    	return view('user.kontak');
    }

    public function laporanSaya (){
        $id = auth()->id();
        $laporan = laporan::where('id-user',$id)->get();
        return view('user.laporan-saya', compact('laporan'));
    }

     public function view (){
    	return view('user.buatLaporan');
    }

    public function pelayanan (){
    	 return view('user.pelayanan');
    }

    public function profil(){
        $user_id = auth()-> id();
        $result = laporan::where('id', $user_id)
                ->get();

        return view('user.profil',compact('result'));
    }

    public function tupoksi (){
    	 return view('user.tupoksi');
    }

    public function buatLaporan (){
        $this->validate(request(),[
            'nama'         => 'required',
            'email'        => 'required',
            'laporan'      => 'required',
            ]);
        laporan::create([
            'name'         => request('nama'),
            'email'        => request('email'),
            'laporan'      => request('laporan'),
            'id-user'      => auth()->id(),
            ]);
        return redirect('/user/kontak');
    }
}


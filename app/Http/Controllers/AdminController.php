<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\laporan;
use App\Pengumumen;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // dd('hahah');
        return view('admin');
    }

    public function pengumuman()
    {
        return view('admin.pengumuman');
    }

    public function pengumumanPost()
    {
        $pengumumanPost   = pengumumen::all();
        return view('admin.pengumuman-diposting',compact('pengumumanPost'));
    }

    public function buatPengumuman (){
        $this->validate(request(),[
            'judul'         => 'required',
            'pengumuman'    => 'required',
            ]);
        pengumumen::create([
            'judul'         => request('judul'),
            'pengumuman'    => request('pengumuman'),
          ]);
        return redirect('/admin/pengumuman-dipost');
    }

    public function hapusPengumuman($id)
    {
      //dd($id);
        $pengumumanPost = pengumumen::where('id',$id)->delete();

        return redirect()->route('pengumuman-dipost');
    }

    public function daftarUser()
    {
        $daftar = DB::table('users')
                      ->get();
                  //laporan::all();
        return view('admin.daftar-user',compact('daftar'));
    }

    public function laporanMasuk()
    {
        $laporan = DB::table('laporans')
                    //  ->join('users','proyeks.user_id','=','users.id')
                      //->select('proyeks.id as proyekID','proyeks.*','users.*')
                      ->where('laporans.status', '=', '0')
                      ->get();
                  //laporan::all();
        return view('admin.laporan-masuk',compact('laporan'));
    }

    public function dikonfirmasi($id)
    {
       laporan::where('id',$id)->update([
          'status' => request('status') 
          ]);
          return redirect()->route('laporan-dikonfirmasi');
       
    }

    public function destroy($id)
    {
        laporan::where('id',$id)->delete();

        return redirect()->route('laporan-dikonfirmasi');
    }

    public function laporanKonfirm()
    {
        $laporan = DB::table('laporans')
                    //  ->join('users','proyeks.user_id','=','users.id')
                      //->select('proyeks.id as proyekID','proyeks.*','users.*')
                      ->where('laporans.status', '=', '1')
                      ->get();
        return view('admin.laporan-dikonfirm',compact('laporan'));
    }

    public function adminLaporan(){
        $proyek = DB::table('laporans')
                      ->join('users','proyeks.user_id','=','users.id')
                      ->select('proyeks.id as proyekID','proyeks.*','users.*')
                      ->where('proyeks.status', '=', '0')
                      ->get();
                  //dd($result);
        // $proyek = proyek::all();
        return view('admin.proyek',compact('proyek'));
    }
}

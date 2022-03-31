<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Perjalanan;
use App\User;
use App\tb_kota;
use Auth;


class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $id = Auth::user()->id;
        $user = User::find($id);
         // mengambil data dari table pegawai
		$perjalanan = DB::table('perjalanans')->paginate(5);
        // $perjalanan = Perjalanan::all();
        // $perjalanan = DB::table('perjalanans')
        // ->get();
        return view ('perjalanan.index', compact('perjalanan','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view ('perjalanan.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $perjalanan = [
            'user_id'       => Auth::User()->id,
            'tanggal'       => $request->tanggal,
            'jam'           => $request->jam,
            'id_kota'        => $request->id_kota,
            'suhu_tubuh'    => $request->suhu_tubuh,  
        ];
        Perjalanan::create($perjalanan);
        return redirect ('/perjalanan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_perjalanan)
    {
        $perjalanan = Perjalanan::findOrFail($id_perjalanan)
        ->delete();
    return back();
    }

    public function hitung()
    {
        $perjalanan = Perjalanan::count();
        return view('home', compact('perjalanan'));
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$perjalanan = DB::table('perjalanans')
		->where('user_id','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
        return view ('perjalanan.index', compact('perjalanan'));

	}
}

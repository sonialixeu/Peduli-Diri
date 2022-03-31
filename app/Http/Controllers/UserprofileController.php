<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Userprofile;
use App\User;
use App\tb_kota;
use Storage;
use Auth;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        // $kota = kota::all();
        // $user = \App\user::find($id_user);
        // return view('user.index', compact('user','kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request->file('foto'));

        /* $this->validate($request,[
            'foto' => 'required|images|mimes:jpeg,png,jpg|max:3000'
        ]); */

        if ($request->user()->foto) {
            Storage::delete($request->user()->foto);
        }

        $foto = $request->file('foto')->store('foto');

        $request->user()->update([
            'nik'        => $request->nik,
            'name'       => $request->name,
            'telp'       => $request->telp,
            'alamat'    => $request->alamat,
            'email'      => $request->email,
            'foto'       => $foto,
            'username'   => $request->username
        ]);

        return redirect()->back();
    }

    public function changepassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
        
        if(!(strcmp($request->get('new-password'), $request->get('new-password-confirm'))) == 0){
         //New password and confirm password are not same
          return redirect()->back()->with("error","New Password should be same as your confirmed password. Please retype new password.");
        }
         
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->password_confirmation = bcrypt($request->get('new-password'));
        $user->save();
             
        return redirect()->back()->with("success","Password changed successfully !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

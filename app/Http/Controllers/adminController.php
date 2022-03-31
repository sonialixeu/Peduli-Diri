<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class adminController extends Controller
{
    public function index(){
        $user = User::all();

        return view('admin.user',compact('user'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return redirect('/admin');
    }

    // public function cetakUser(){
    //     $user =  User::all();

    //     $pdf = PDF::loadview('cetak.user',['user'=>$user]);
    //     return $pdf->stream();
    // }
}
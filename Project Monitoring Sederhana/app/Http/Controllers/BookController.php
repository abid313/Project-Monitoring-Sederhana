<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BookController extends Controller{
    public function awal(){
        return view('home');
    }

    public function home(){
        return view('home');
    }

    public function index(){
        $project = DB::table('project')->get();

        return view('index',['project' => $project]);
    }

    public function cari($id){
        $project = DB::table('project')->where('judul',$id)->get();

        return view('index',['project' => $project]);
    }

    public function tambah(Request $request){
        
        DB::table('project')->insert([
            'id' => $request->id,
            'judul' => $request->judul,
            'ketua' => $request->ketua,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'nama' => $request->nama,
            'progress' => $request->progress
        ]);

        return redirect('/home');
    }

    public function hapus($id){
        DB::table('project')->where('id', $id)->delete();

        return redirect('/home');
    }

    public function show($id){
        $project = DB::table('project')->where('id', $id)->get();

        return view('update', ['project' => $project]);
    }

    public function edit(Request $request){

        DB::table('project')->where('id', $request-> id)->update([
            'judul' => $request->judul,
            'ketua' => $request->ketua,
            'date_start' => $request->date_start,
            'date_end' => $request->date_end,
            'nama' => $request -> nama,
            'progress' => $request -> progress,
        ]);
        
        return redirect('/home');
    }
}
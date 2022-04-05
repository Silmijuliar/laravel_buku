<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Books;

class BooksController extends Controller
{
    public function index(){
        $data=Books::all();
           return view('index',compact('data'));
       }

       public function back(){
        return redirect ('/');
       }
       
       public function create(){
        return view('create');
       }
   
       public function insert(Request $request){
        $data=new Books();
           $data->kode_buku=$request->get('kode_buku');
           $data->judul=$request->get('judul');
           $data->author=$request->get('author');
           $data->sinopsis=$request->get('sinopsis');
           $data->penerbit=$request->get('penerbit');
           $data->save();
        return redirect ('/');
       }
   
       public function delete($kode_buku){
        $data=Books::find($kode_buku);
           $data->delete();
           return back();
       }
   
       public function edit($kode_buku){
        $data=Books::find($kode_buku);
        $data->save();
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $kode_buku){     
        $data = Books::findOrFail($kode_buku);
        $data->judul=$request->get('judul');
        $data->author=$request->get('author');
        $data->sinopsis=$request->get('sinopsis');
        $data->penerbit=$request->get('penerbit');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
   
       public function read($kode_buku){
        $data=Books::find($kode_buku);
        return view('read',compact('data'));
       }

    }
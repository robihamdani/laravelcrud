<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    //

    public function create(request $request){
        $siswa=new Siswa();
        $siswa->nama=$request->nama;
        $siswa->alamat=$request->alamat;
        $siswa->save();

        return "data berhasil masuk";
    }


    public function welcome(request $request){
        return "test koneksi dengan menggunakan laravel";
    }

    public function getall(){
       return Siswa::all();
    }

    
    public function getbyid($id){
        $siswa= Siswa::find($id);

        return $siswa;
    }

    public function update(request $request, $id){
        $nama=$request->nama;
        $alamat=$request->alamat;

        $siswa= Siswa::find($id);
        $siswa->nama=$nama;
        $siswa->alamat=$alamat;
        $siswa->save();

        return "data berhasil di update";
    }

    public function delete($id){
        $siswa= Siswa::find($id);
        $siswa->delete();

        return "data berhasil di hapus";
    }

}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyakitController extends Controller
{
    public function index()
    {
        $dp = DB::table('data_penyakit')->get();
        // dd($dp);
        $data1 = DB::table('data_penyakit')->first();
        // dd($data2);
        return view('penyakit.index',compact('dp','data1')); 
    }
    public function create(Request $request)
    {
        DB::table('data_penyakit')->insert
        ([
            'kategory'=>$request->kategory,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'umur'=>$request->umur,
            'alb'=>$request->alb,
            'alp'=>$request->alp,
            'alt'=>$request->alt,
            'ast'=>$request->ast,
            'bil'=>$request->bil,
            'ggt'=>$request->ggt,
            'status'=>$request->status,    
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        return redirect('/penyakit')->with('notif','Berhasil');
    }

    public function edit($id)
    {
        $data1 = \App\Penyakit::find($id);
        return view('penyakit/edit',['penyakit' => $data1]);
    }
    public function update(Request $request, $id)
    {
        $data1 = \App\Penyakit::find($id);
        $data1->update($request->all());
        return redirect('/penyakit')->with('sukses, data berhasil di update');
    }
    public function delete($id)
    {
        $data1 = \App\Penyakit::find($id);
        $data1->delete();
        return redirect('/penyakit')->with('sukses, data berhasil di hapus');
    }
}

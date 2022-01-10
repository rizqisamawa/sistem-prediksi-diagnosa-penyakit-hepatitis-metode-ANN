<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    public function hp()
    {
        return view('hasil.hp');
    }
    public function hd (Request $request)
    {
    $Nama =$request->Nama; 
    $Umur =$request->Umur;       
    $Jk =$request->Jenis_Kelamin;    
    $Nama =$request->Nama;    
    $Alb = $request->ALB;
    $Alp = $request->ALP;
    $Alt = $request->ALT;
    $Ast = $request->AST;
    $Bil = $request->BIL;
    $Ggt = $request->GGT;

     return view('hasil.hd',compact('Nama','Umur','Jk','Alb','Alp','Alt','Ast','Bil','Ggt'));
    }
    
}

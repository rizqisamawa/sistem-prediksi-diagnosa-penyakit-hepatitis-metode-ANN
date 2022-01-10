@extends('layouts.master')

@section('content')

<div class="main">
    <div class="main-content">
        <div class="panel panel-headline">

   
    <div class="panel-heading">
        <h1 style="color: black">Hasil Diagnosa</h1>
    </div>
    <div class="panel-body">
     
        <table class="table table-bordered" style="font-size: 20px; color: black">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">ALB</th>
                    <th scope="col">ALP</th>
                    <th scope="col">ALT</th>
                    <th scope="col">AST</th>
                    <th scope="col">BIL</th>
                    <th scope="col">GGT</th>
                    <th scope="col">V</th>
                    <th scope="col">Hasil</th>
                    <th scope="col">Diagnosa</th>
                    </tr>
            </thead>
            <tbody>
                @php
                $w1 = 45.82;
                $w2 = 99.31;
                $w3 = -203.69;
                $w4 = -219.31;
                $w5 = 22.2;
                $w6 = 83.42;
                $ln = 0.9;
                $th = 0;
                @endphp
                <tr>
                    <td> {{$Nama}}</td>
                    <td> {{$Umur}}</td>
                    <td> {{$Jk}}</td>
                    <td> {{$Alb}}</td>
                    <td> {{$Alp}}</td>
                    <td> {{$Alt}}</td>
                    <td> {{$Ast}}</td>
                    <td> {{$Bil}}</td>
                    <td> {{$Ggt}}</td>
                    <td> {{($V=$Alb*$w1+$Alp*$w2+$Alt*$w3+$Ast*$w4+$Bil*$w5+$Ggt*$w6)}}</td>
                    @php
                  if($V<$th){
                    $aa=0;
                  }else{
                    $aa=1;
                  }
                  @endphp
                    <td>{{$aa}}</td>
                    @php
                    if($aa == "0"){
                      $sts="Positif";
                    }else{
                      $sts="Negatif";
                    }
                    @endphp
                    <td>{{$sts}}</td>
                    @php
                     if($sts == "Positif"){
                         $color = "text-success";
                     }else{
                         $color = "text-danger";
                     }
                    @endphp
                </tr>
            </tbody>
        </table>
        <div style="margin-top: 10%">
            <h3 class="text-center" style="color: black">Hasil Diagnosa Penyakit Hepatitis Dari Pasien Bernama {{$Nama}} adalah
                <span class="{{ $color }}">{{ $sts }}</span>
            </h3>
        </div>
            </div>
        </div>
    </div>

        </div>

                @endsection

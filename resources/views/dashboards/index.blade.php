@extends('layouts.master')

@section('content')
<div class="main">
 <div class="main-content">
  <div class="panel panel-headline">
   <div class="panel-heading">
      <h3 class="panel-title">Selamat Datang di Sistem Prediksi Diagnosa Penyakit Hepatitis</h3>
   </div>
     <div class="panel-body">
                <div class="row">
                        <div class="col-md-12">
                                <div class="metric">
                                        <span class="icon"><i class="lnr lnr-lighter"></i></span>
                                        <p>
                                         <span class="title" style=" font-size: 20px; font-family: Arial, Helvetica, sans-serif">Data Penyakit</span>
                                        <span class="number" style=" font-size: 20px; font-family: Arial, Helvetica, sans-serif">{{$dp}}</span>
                                        </p>
                                </div>
                        </div>
                </div>         
        </div>
      
        <div class="panel-heading">
                <h3 style="margin-left: 20px">Panduan menggunakan sistem prediksi diagnosa penyakit</h3><br>
                <ul>
                        <li style="font-size: 20px">Administrator login terlebih dahulu </li>
                        <li style="font-size: 20px">Pilih data penyakit untuk mengetahui nilai variable</li>
                        <li style="font-size: 20px">Kemudian pilih perhitungan untuk mengetahui beberapa tahap perhitungsan literasi</li>
                        <li style="font-size: 20px">Tambahkan data penyakit baru untuk mengetahui hasil diagnosa di halaman</li>
                </ul>
        </div>
        </div>

</div>
</div>

</div>

@stop
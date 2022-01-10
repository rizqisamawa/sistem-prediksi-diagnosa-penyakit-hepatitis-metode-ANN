@extends('layouts.master')

@section('content')

<div class="main">
   
    <div class="panel-heading">
        <h3 class="panel-title">Perhitungan 8</h3>
    </div>
    <div class="panel-body">
      {{-- data penyakit --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">X1</th>
                    <th scope="col">X2</th>
                    <th scope="col">X3</th>
                    <th scope="col">X4</th>
                    <th scope="col">X5</th>
                    <th scope="col">X6</th>
                    <th scope="col">V</th>
                    <th scope="col">Luaran Y</th>
                    <th scope="col">Y</th>
                    <th scope="col">Error</th>
                    </tr>
            </thead>
            <tbody>
              {{-- baris 1 --}}
                <tr>
                  <td>{{number_format($data1->alb,1)}}</td>
                  <td>{{number_format($data1->alp,1)}}</td>
                  <td>{{number_format($data1->alt,1)}}</td>
                  <td>{{number_format($data1->ast,1)}}</td>
                  <td>{{number_format($data1->bil,1)}}</td>
                  <td>{{number_format($data1->ggt,1)}}</td>
                  @php
                  
                  $ln = 0.9;
                  $th = 0;
                  @endphp
                 <td>{{ $hasil1=$data1->alb*48.88+$data1->alp*75.19+$data1->alt*-193.79+$data1->ast*-195.91+$data1->bil*21.48+$data1->ggt*105.92}}</td>
                 @php
                  if($hasil1<$th){
                    $aa=0;
                  }else{
                    $aa=1;
                  }

                  if($data1->status == 'Negatif'){
                    $sts=1;
                  }
                  if($data1->status == 'Positif'){
                    $sts=0;
                  }
                  @endphp
                  <td>{{($aa)}}</td>
                  <td>{{($sts)}}</td>
                  <td>{{$eror1=($sts-$aa)}}</td>
                </tr>
              {{-- baris 1 --}}

              {{-- baris 2 --}}
                <tr>
                  <td>{{number_format($data2->alb,1)}}</td>
                  <td>{{number_format($data2->alp,1)}}</td>
                  <td>{{number_format($data2->alt,1)}}</td>
                  <td>{{number_format($data2->ast,1)}}</td>
                  <td>{{number_format($data2->bil,1)}}</td>
                  <td>{{number_format($data2->ggt,1)}}</td>
                  @php
                 
                  $ln = 0.9;
                  $th = 0;
                  @endphp
                 <td>{{ $hasil1=$data2->alb*48.88+$data2->alp*75.19+$data2->alt*-193.79+$data2->ast*-195.91+$data2->bil*21.48+$data2->ggt*105.92}}</td>
                 @php
                  if($hasil1<$th){
                    $aa=0;
                  }else{
                    $aa=1;
                  }

                  if($data2->status == 'Negatif'){
                    $sts=1;
                  }
                  if($data2->status == 'Positif'){
                    $sts=0;
                  }
                  @endphp
                  <td>{{($aa)}}</td>
                  <td>{{($sts)}}</td>
                  <td>{{$eror2=($sts-$aa)}}</td>
                </tr>
              {{-- baris 2 --}}

               {{-- baris 3 --}}
                            <tr>
                            <td>{{number_format($data3->alb,1)}}</td>
                            <td>{{number_format($data3->alp,1)}}</td>
                            <td>{{number_format($data3->alt,1)}}</td>
                            <td>{{number_format($data3->ast,1)}}</td>
                            <td>{{number_format($data3->bil,1)}}</td>
                            <td>{{number_format($data3->ggt,1)}}</td>
                            
                            @php
                            
                            $ln = 0.9;
                            $th = 0;
                            @endphp
                            <td>{{ $hasil1=$data3->alb*48.88+$data3->alp*75.19+$data3->alt*-193.79+$data3->ast*-195.91+$data3->bil*21.48+$data3->ggt*105.92}}</td>
                            @php
                            if($hasil1<$th){
                              $aa=0;
                            }else{
                              $aa=1;
                            }
            
                            if($data3->status == 'Negatif'){
                              $sts=1;
                            }
                            if($data3->status == 'Positif'){
                              $sts=0;
                            }
                            @endphp
                            <td>{{($aa)}}</td>
                            <td>{{($sts)}}</td>
                            <td>{{$eror3=($sts-$aa)}}</td>
            
                          </tr>
               {{-- baris 3 --}}
                
                      {{-- baris 4--}}
                        <tr>
                        <td>{{number_format($data4->alb,1)}}</td>
                        <td>{{number_format($data4->alp,1)}}</td>
                        <td>{{number_format($data4->alt,1)}}</td>
                        <td>{{number_format($data4->ast,1)}}</td>
                        <td>{{number_format($data4->bil,1)}}</td>
                        <td>{{number_format($data4->ggt,1)}}</td>
                        
                        @php
                       
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data4->alb*48.88+$data4->alp*75.19+$data4->alt*-193.79+$data4->ast*-195.91+$data4->bil*21.48+$data4->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data4->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data4->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror4=($sts-$aa)}}</td>
        
                        </tr>
                      {{-- baris 4 --}}
        
                  {{-- baris 5--}}
                      <tr>
                        <td>{{number_format($data5->alb,1)}}</td>
                        <td>{{number_format($data5->alp,1)}}</td>
                        <td>{{number_format($data5->alt,1)}}</td>
                        <td>{{number_format($data5->ast,1)}}</td>
                        <td>{{number_format($data5->bil,1)}}</td>
                        <td>{{number_format($data5->ggt,1)}}</td>
                        
                        @php
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data5->alb*48.88+$data5->alp*75.19+$data5->alt*-193.79+$data5->ast*-195.91+$data5->bil*21.48+$data5->ggt*105.92}}</td>
                         @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data5->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data5->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror5=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 5 --}}
        
                  {{-- baris 6--}}
                      <tr>
                        <td>{{number_format($data6->alb,1)}}</td>
                        <td>{{number_format($data6->alp,1)}}</td>
                        <td>{{number_format($data6->alt,1)}}</td>
                        <td>{{number_format($data6->ast,1)}}</td>
                        <td>{{number_format($data6->bil,1)}}</td>
                        <td>{{number_format($data6->ggt,1)}}</td>
                        
                        @php
                    
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data6->alb*48.88+$data6->alp*75.19+$data6->alt*-193.79+$data6->ast*-195.91+$data6->bil*21.48+$data6->ggt*105.92}}</td>
                         @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data6->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data6->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror6=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 6 --}}
        
                  {{-- baris 7--}}
                      <tr>
                        <td>{{number_format($data7->alb,1)}}</td>
                        <td>{{number_format($data7->alp,1)}}</td>
                        <td>{{number_format($data7->alt,1)}}</td>
                        <td>{{number_format($data7->ast,1)}}</td>
                        <td>{{number_format($data7->bil,1)}}</td>
                        <td>{{number_format($data7->ggt,1)}}</td>
                        
                        @php
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data7->alb*48.88+$data7->alp*75.19+$data7->alt*-193.79+$data7->ast*-195.91+$data7->bil*21.48+$data7->ggt*105.92}}</td>
                         @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data7->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data7->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror7=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 7 --}}
        
                  {{-- baris 8--}}
                      <tr>
                        <td>{{number_format($data8->alb,1)}}</td>
                        <td>{{number_format($data8->alp,1)}}</td>
                        <td>{{number_format($data8->alt,1)}}</td>
                        <td>{{number_format($data8->ast,1)}}</td>
                        <td>{{number_format($data8->bil,1)}}</td>
                        <td>{{number_format($data8->ggt,1)}}</td>
                        
                        @php
                       
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data8->alb*48.88+$data8->alp*75.19+$data8->alt*-193.79+$data8->ast*-195.91+$data8->bil*21.48+$data8->ggt*105.92}}</td>
                         @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data8->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data8->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror8=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 8 --}}
        
                  {{-- baris 9--}}
                      <tr>
                        <td>{{number_format($data9->alb,1)}}</td>
                        <td>{{number_format($data9->alp,1)}}</td>
                        <td>{{number_format($data9->alt,1)}}</td>
                        <td>{{number_format($data9->ast,1)}}</td>
                        <td>{{number_format($data9->bil,1)}}</td>
                        <td>{{number_format($data9->ggt,1)}}</td>
        
                        @php
                       
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data9->alb*48.88+$data9->alp*75.19+$data9->alt*-193.79+$data9->ast*-195.91+$data9->bil*21.48+$data9->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data9->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data9->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror9=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 9 --}}

                  {{-- baris 10--}}
                      <tr>
                        <td>{{number_format($data10->alb,1)}}</td>
                        <td>{{number_format($data10->alp,1)}}</td>
                        <td>{{number_format($data10->alt,1)}}</td>
                        <td>{{number_format($data10->ast,1)}}</td>
                        <td>{{number_format($data10->bil,1)}}</td>
                        <td>{{number_format($data10->ggt,1)}}</td>
        
                        @php
                       
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data10->alb*48.88+$data10->alp*75.19+$data10->alt*-193.79+$data10->ast*-195.91+$data10->bil*21.48+$data10->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data10->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data10->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror10=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 10 --}}
        
                  {{-- baris 11--}}
                      <tr>
                        <td>{{number_format($data11->alb,1)}}</td>
                        <td>{{number_format($data11->alp,1)}}</td>
                        <td>{{number_format($data11->alt,1)}}</td>
                        <td>{{number_format($data11->ast,1)}}</td>
                        <td>{{number_format($data11->bil,1)}}</td>
                        <td>{{number_format($data11->ggt,1)}}</td>
                        
                        @php
                     
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data11->alb*48.88+$data11->alp*75.19+$data11->alt*-193.79+$data11->ast*-195.91+$data11->bil*21.48+$data11->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data11->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data11->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror11=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 11 --}}
        
                  {{-- baris 12--}}
                      <tr>
                        <td>{{number_format($data12->alb,1)}}</td>
                        <td>{{number_format($data12->alp,1)}}</td>
                        <td>{{number_format($data12->alt,1)}}</td>
                        <td>{{number_format($data12->ast,1)}}</td>
                        <td>{{number_format($data12->bil,1)}}</td>
                        <td>{{number_format($data12->ggt,1)}}</td>
                        
                        @php
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data12->alb*48.88+$data12->alp*75.19+$data12->alt*-193.79+$data12->ast*-195.91+$data12->bil*21.48+$data12->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data12->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data12->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror12=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 12 --}}
        
                  {{-- baris 13--}}
                      <tr>
                        <td>{{number_format($data13->alb,1)}}</td>
                        <td>{{number_format($data13->alp,1)}}</td>
                        <td>{{number_format($data13->alt,1)}}</td>
                        <td>{{number_format($data13->ast,1)}}</td>
                        <td>{{number_format($data13->bil,1)}}</td>
                        <td>{{number_format($data13->ggt,1)}}</td>
                        
                        @php
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data13->alb*48.88+$data13->alp*75.19+$data13->alt*-193.79+$data13->ast*-195.91+$data13->bil*21.48+$data13->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data13->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data13->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror13=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 13 --}}
        
                  {{-- baris 14--}}
                      <tr>
                        <td>{{number_format($data14->alb,1)}}</td>
                        <td>{{number_format($data14->alp,1)}}</td>
                        <td>{{number_format($data14->alt,1)}}</td>
                        <td>{{number_format($data14->ast,1)}}</td>
                        <td>{{number_format($data14->bil,1)}}</td>
                        <td>{{number_format($data14->ggt,1)}}</td>
                        
                        @php
                       
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data14->alb*48.88+$data14->alp*75.19+$data14->alt*-193.79+$data14->ast*-195.91+$data14->bil*21.48+$data14->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data14->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data14->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror14=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 14 --}}
        
                  {{-- baris 15--}}
                      <tr>
                        <td>{{number_format($data15->alb,1)}}</td>
                        <td>{{number_format($data15->alp,1)}}</td>
                        <td>{{number_format($data15->alt,1)}}</td>
                        <td>{{number_format($data15->ast,1)}}</td>
                        <td>{{number_format($data15->bil,1)}}</td>
                        <td>{{number_format($data15->ggt,1)}}</td>
                        
                        @php
                       
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data15->alb*48.88+$data15->alp*75.19+$data15->alt*-193.79+$data15->ast*-195.91+$data15->bil*21.48+$data15->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data15->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data15->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror15=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 15 --}}
        
                  {{-- baris 16--}}
                      <tr>
                        <td>{{number_format($data16->alb,1)}}</td>
                        <td>{{number_format($data16->alp,1)}}</td>
                        <td>{{number_format($data16->alt,1)}}</td>
                        <td>{{number_format($data16->ast,1)}}</td>
                        <td>{{number_format($data16->bil,1)}}</td>
                        <td>{{number_format($data16->ggt,1)}}</td>
                        
                        @php
                      
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                        <td>{{ $hasil1=$data16->alb*48.88+$data16->alp*75.19+$data16->alt*-193.79+$data16->ast*-195.91+$data16->bil*21.48+$data16->ggt*105.92}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data16->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data16->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror16=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 16 --}}
        
                  {{-- baris 17--}}
                      <tr>
                        <td>{{number_format($data17->alb,1)}}</td>
                        <td>{{number_format($data17->alp,1)}}</td>
                        <td>{{number_format($data17->alt,1)}}</td>
                        <td>{{number_format($data17->ast,1)}}</td>
                        <td>{{number_format($data17->bil,1)}}</td>
                        <td>{{number_format($data17->ggt,1)}}</td>
                        
                        @php
                  
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                         <td>{{ $hasil1=$data17->alb*7.48+$data17->alp*22.9+$data17->alt*-213.05+$data17->ast*-222.28+$data17->bil*15.27+$data17->ggt*76.85}}</td>
                         @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data17->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data17->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror17=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 17 --}}
                    
                  {{-- baris 18--}}
                      <tr>
                        <td>{{number_format($data18->alb,1)}}</td>
                        <td>{{number_format($data18->alp,1)}}</td>
                        <td>{{number_format($data18->alt,1)}}</td>
                        <td>{{number_format($data18->ast,1)}}</td>
                        <td>{{number_format($data18->bil,1)}}</td>
                        <td>{{number_format($data18->ggt,1)}}</td>
                        
                        @php
                       
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                         <td>{{ $hasil1=$data18->alb*7.48+$data18->alp*22.9+$data18->alt*-213.05+$data18->ast*-222.28+$data18->bil*15.27+$data18->ggt*76.85}}</td>
                         @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data18->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data18->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror18=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 18 --}}
                    
                  {{-- baris 19--}}
                      <tr>
                        <td>{{number_format($data19->alb,1)}}</td>
                        <td>{{number_format($data19->alp,1)}}</td>
                        <td>{{number_format($data19->alt,1)}}</td>
                        <td>{{number_format($data19->ast,1)}}</td>
                        <td>{{number_format($data19->bil,1)}}</td>
                        <td>{{number_format($data19->ggt,1)}}</td>
                        
                        @php
                     
                        $ln = 0.9;
                        $th = 0;
                        @endphp
                         <td>{{ $hasil1=$data19->alb*47.35+$data19->alp*87.25+$data19->alt*-198.74+$data19->ast*-207.61+$data19->bil*21.84+$data19->ggt*94.67}}</td>
                        @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data19->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data19->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror19=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 19 --}}
        
                  {{-- baris 20--}}
                      <tr>
                        <td>{{number_format($data20->alb,1)}}</td>
                        <td>{{number_format($data20->alp,1)}}</td>
                        <td>{{number_format($data20->alt,1)}}</td>
                        <td>{{number_format($data20->ast,1)}}</td>
                        <td>{{number_format($data20->bil,1)}}</td>
                        <td>{{number_format($data20->ggt,1)}}</td>
                        
                        @php
                            $w1 = 48.88;
                            $w2 = 75.19;
                            $w3 = -193.79;
                            $w4 = -195.91;
                            $w5 = 21.48;
                            $w6 = 105.92;
                            $ln = 0.9;
                            $th = 0;
                        @endphp
                         <td>{{ $hasil1=$data20->alb*47.35+$data20->alp*87.25+$data20->alt*-198.74+$data20->ast*-207.61+$data20->bil*21.84+$data20->ggt*94.67}}</td>
                         @php
                        if($hasil1<$th){
                          $aa=0;
                        }else{
                          $aa=1;
                        }
        
                        if($data20->status == 'Negatif'){
                          $sts=1;
                        }
                        if($data20->status == 'Positif'){
                          $sts=0;
                        }
                        @endphp
                        <td>{{($aa)}}</td>
                        <td>{{($sts)}}</td>
                        <td>{{$eror20=($sts-$aa)}}</td>
        
                      </tr>
                  {{-- baris 20 --}}
                    
            </tbody>
        </table>
      {{-- daata penyakit --}}

        {{-- Literasi 8 --}}
            <table class="table">
                <thead>
                    <tr>
                    
                        <th scope="col">w1 baru</th>
                        <th scope="col">w2 baru</th>
                        <th scope="col">w3 baru</th>
                        <th scope="col">w4 baru</th>
                        <th scope="col">w5 baru</th>
                        <th scope="col">w6 baru</th>
                        <th scope="col">Delta1</th>
                        <th scope="col">Delta2</th>
                        <th scope="col">Delta3</th>
                        <th scope="col">Delta4</th>
                        <th scope="col">Delta5</th>
                        <th scope="col">Delta6</th>
                        </tr>
                </thead>
                <tbody>
         {{-- baris 1 --}}
         <tr>
            <td>{{$w1baru=($w1+$ln*$eror1*$data1->alb)}}</td>
            <td>{{$w2baru=($w2+$ln*$eror1*$data1->alp)}}</td>
            <td>{{$w3baru=($w3+$ln*$eror1*$data1->alt)}}</td>
            <td>{{$w4baru=($w4+$ln*$eror1*$data1->ast)}}</td>
            <td>{{$w5baru=($w5+$ln*$eror1*$data1->bil)}}</td>
            <td>{{$w6baru=($w6+$ln*$eror1*$data1->ggt)}}</td>
            <td>{{$w1baru-$w1}}</td>
            <td>{{$w2baru-$w2}}</td>
            <td>{{$w3baru-$w3}}</td>
            <td>{{$w4baru-$w4}}</td>
            <td>{{$w5baru-$w5}}</td>
            <td>{{$w6baru-$w6}}</td>
          </tr>
      {{-- baris 1 --}}

      
      {{-- baris 2 --}}
      <tr>
        <td>{{ $b1baru=($w1baru+$ln*$eror2*$data2->alb) }}</td>
        <td>{{ $b2baru=($w2baru+$ln*$eror2*$data2->alp) }}</td>
        <td>{{ $b3baru=($w3baru+$ln*$eror2*$data2->alt) }}</td>
        <td>{{ $b4baru=($w4baru+$ln*$eror2*$data2->ast) }}</td>
        <td>{{ $b5baru=($w5baru+$ln*$eror2*$data2->bil) }}</td>
        <td>{{ $b6baru=($w6baru+$ln*$eror2*$data2->ggt) }}</td>
        <td>{{ $w1baru-$b1baru }}</td>
        <td>{{ $w2baru-$b2baru }}</td>
        <td>{{ $w3baru-$b3baru }}</td>
        <td>{{ $w4baru-$b4baru }}</td>
        <td>{{ $w5baru-$b5baru }}</td>
        <td>{{ $w6baru-$b6baru }}</td>
     </tr>
    {{-- baris 2 --}}

  {{-- baris 3 --}}
    <tr>
        <td>{{ $c1baru=($w1baru+$ln*$eror3*$data3->alb) }}</td>
        <td>{{ $c2baru=($w2baru+$ln*$eror3*$data3->alp) }}</td>
        <td>{{ $c3baru=($w3baru+$ln*$eror3*$data3->alt) }}</td>
        <td>{{ $c4baru=($w4baru+$ln*$eror3*$data3->ast) }}</td>
        <td>{{ $c5baru=($w5baru+$ln*$eror3*$data3->bil) }}</td>
        <td>{{ $c6baru=($w6baru+$ln*$eror3*$data3->ggt) }}</td>
        <td>{{ $c1baru-$b1baru }}</td>
        <td>{{ $c2baru-$b2baru }}</td>
        <td>{{ $c3baru-$b3baru }}</td>
        <td>{{ $c4baru-$b4baru }}</td>
        <td>{{ $c5baru-$b5baru }}</td>
        <td>{{ $c6baru-$b6baru }}</td>
    </tr>
  {{-- baris 3 --}}

  {{-- baris 4 --}}
    <tr>
        <td>{{ $d1baru=($c1baru+$ln*$eror4*$data4->alb) }}</td>
        <td>{{ $d2baru=($c2baru+$ln*$eror4*$data4->alp) }}</td>
        <td>{{ $d3baru=($c3baru+$ln*$eror4*$data4->alt) }}</td>
        <td>{{ $d4baru=($c4baru+$ln*$eror4*$data4->ast) }}</td>
        <td>{{ $d5baru=($c5baru+$ln*$eror4*$data4->bil) }}</td>
        <td>{{ $d6baru=($c6baru+$ln*$eror4*$data4->ggt) }}</td>
        <td>{{ $d1baru-$c1baru }}</td>
        <td>{{ $d2baru-$c2baru }}</td>
        <td>{{ $d3baru-$c3baru }}</td>
        <td>{{ $d4baru-$c4baru }}</td>
        <td>{{ $d5baru-$c5baru }}</td>
        <td>{{ $d6baru-$c6baru }}</td>
    </tr>
  {{-- baris 4 --}}

  {{-- baris 5 --}}
    <tr>
        <td>{{ $e1baru=($d1baru+$ln*$eror5*$data5->alb) }}</td>
        <td>{{ $e2baru=($d2baru+$ln*$eror5*$data5->alp) }}</td>
        <td>{{ $e3baru=($d3baru+$ln*$eror5*$data5->alt) }}</td>
        <td>{{ $e4baru=($d4baru+$ln*$eror5*$data5->ast) }}</td>
        <td>{{ $e5baru=($d5baru+$ln*$eror5*$data5->bil) }}</td>
        <td>{{ $e6baru=($d6baru+$ln*$eror5*$data5->ggt) }}</td>
        <td>{{ $e1baru-$d1baru }}</td>
        <td>{{ $e2baru-$d2baru }}</td>
        <td>{{ $e3baru-$d3baru }}</td>
        <td>{{ $e4baru-$d4baru }}</td>
        <td>{{ $e5baru-$d5baru }}</td>
        <td>{{ $e6baru-$d6baru }}</td>
    </tr>
  {{-- baris 5--}}

  {{-- baris 6 --}}
    <tr>
        <td>{{ $f1baru=($e1baru+$ln*$eror6*$data6->alb) }}</td>
        <td>{{ $f2baru=($e2baru+$ln*$eror6*$data6->alp) }}</td>
        <td>{{ $f3baru=($e3baru+$ln*$eror6*$data6->alt) }}</td>
        <td>{{ $f4baru=($e4baru+$ln*$eror6*$data6->ast) }}</td>
        <td>{{ $f5baru=($e5baru+$ln*$eror6*$data6->bil) }}</td>
        <td>{{ $f6baru=($e6baru+$ln*$eror6*$data6->ggt) }}</td>
        <td>{{ $f1baru-$e1baru }}</td>
        <td>{{ $f2baru-$e2baru }}</td>
        <td>{{ $f3baru-$e3baru }}</td>
        <td>{{ $f4baru-$e4baru }}</td>
        <td>{{ $f5baru-$e5baru }}</td>
        <td>{{ $f6baru-$e6baru }}</td>
    </tr>
  {{-- baris 6--}}

  {{-- baris 7 --}}
    <tr>
        <td>{{ $g1baru=($f1baru+$ln*$eror7*$data7->alb) }}</td>
        <td>{{ $g2baru=($f2baru+$ln*$eror7*$data7->alp) }}</td>
        <td>{{ $g3baru=($f3baru+$ln*$eror7*$data7->alt) }}</td>
        <td>{{ $g4baru=($f4baru+$ln*$eror7*$data7->ast) }}</td>
        <td>{{ $g5baru=($f5baru+$ln*$eror7*$data7->bil) }}</td>
        <td>{{ $g6baru=($f6baru+$ln*$eror7*$data7->ggt) }}</td>
        <td>{{ $g1baru-$f1baru }}</td>
        <td>{{ $g2baru-$f2baru }}</td>
        <td>{{ $g3baru-$f3baru }}</td>
        <td>{{ $g4baru-$f4baru }}</td>
        <td>{{ $g5baru-$f5baru }}</td>
        <td>{{ $g6baru-$f6baru }}</td>
    </tr>
  {{-- baris 7--}}

  {{-- baris 8 --}}
    <tr>
        <td>{{ $h1baru=($g1baru+$ln*$eror8*$data8->alb) }}</td>
        <td>{{ $h2baru=($g2baru+$ln*$eror8*$data8->alp) }}</td>
        <td>{{ $h3baru=($g3baru+$ln*$eror8*$data8->alt) }}</td>
        <td>{{ $h4baru=($g4baru+$ln*$eror8*$data8->ast) }}</td>
        <td>{{ $h5baru=($g5baru+$ln*$eror8*$data8->bil) }}</td>
        <td>{{ $h6baru=($g6baru+$ln*$eror8*$data8->ggt) }}</td>
        <td>{{ $h1baru-$g1baru }}</td>
        <td>{{ $h2baru-$g2baru }}</td>
        <td>{{ $h3baru-$g3baru }}</td>
        <td>{{ $h4baru-$g4baru }}</td>
        <td>{{ $h5baru-$g5baru }}</td>
        <td>{{ $h6baru-$g6baru }}</td>
    </tr>
  {{-- baris 8--}}

  {{-- baris 9 --}}
    <tr>
        <td>{{ $i1baru=($h1baru+$ln*$eror9*$data9->alb) }}</td>
        <td>{{ $i2baru=($h2baru+$ln*$eror9*$data9->alp) }}</td>
        <td>{{ $i3baru=($h3baru+$ln*$eror9*$data9->alt) }}</td>
        <td>{{ $i4baru=($h4baru+$ln*$eror9*$data9->ast) }}</td>
        <td>{{ $i5baru=($h5baru+$ln*$eror9*$data9->bil) }}</td>
        <td>{{ $i6baru=($h6baru+$ln*$eror9*$data9->ggt) }}</td>
        <td>{{ $i1baru-$h1baru }}</td>
        <td>{{ $i2baru-$h2baru }}</td>
        <td>{{ $i3baru-$h3baru }}</td>
        <td>{{ $i4baru-$h4baru }}</td>
        <td>{{ $i5baru-$h5baru }}</td>
        <td>{{ $i6baru-$h6baru }}</td>
    </tr>
  {{-- baris 9--}}

  {{-- baris 10 --}}
    <tr>
        <td>{{ $j1baru=($i1baru+$ln*$eror10*$data10->alb) }}</td>
        <td>{{ $j2baru=($i2baru+$ln*$eror10*$data10->alp) }}</td>
        <td>{{ $j3baru=($i3baru+$ln*$eror10*$data10->alt) }}</td>
        <td>{{ $j4baru=($i4baru+$ln*$eror10*$data10->ast) }}</td>
        <td>{{ $j5baru=($i5baru+$ln*$eror10*$data10->bil) }}</td>
        <td>{{ $j6baru=($i6baru+$ln*$eror10*$data10->ggt) }}</td>
        <td>{{ $j1baru-$i1baru }}</td>
        <td>{{ $j2baru-$i2baru }}</td>
        <td>{{ $j3baru-$i3baru }}</td>
        <td>{{ $j4baru-$i4baru }}</td>
        <td>{{ $j5baru-$i5baru }}</td>
        <td>{{ $j6baru-$i6baru }}</td>
    </tr>
  {{-- baris 10--}}

  {{-- baris 11 --}}
    <tr>
        <td>{{ $k1baru=($j1baru+$ln*$eror11*$data11->alb) }}</td>
        <td>{{ $k2baru=($j2baru+$ln*$eror11*$data11->alp) }}</td>
        <td>{{ $k3baru=($j3baru+$ln*$eror11*$data11->alt) }}</td>
        <td>{{ $k4baru=($j4baru+$ln*$eror11*$data11->ast) }}</td>
        <td>{{ $k5baru=($j5baru+$ln*$eror11*$data11->bil) }}</td>
        <td>{{ $k6baru=($j6baru+$ln*$eror11*$data11->ggt) }}</td>
        <td>{{ $k1baru-$j1baru }}</td>
        <td>{{ $k2baru-$j2baru }}</td>
        <td>{{ $k3baru-$j3baru }}</td>
        <td>{{ $k4baru-$j4baru }}</td>
        <td>{{ $k5baru-$j5baru }}</td>
        <td>{{ $k6baru-$j6baru }}</td>
    </tr>
  {{-- baris 11--}}

  {{-- baris 12 --}}
    <tr>
        <td>{{ $l1baru=($k1baru+$ln*$eror12*$data12->alb) }}</td>
        <td>{{ $l2baru=($k2baru+$ln*$eror12*$data12->alp) }}</td>
        <td>{{ $l3baru=($k3baru+$ln*$eror12*$data12->alt) }}</td>
        <td>{{ $l4baru=($k4baru+$ln*$eror12*$data12->ast) }}</td>
        <td>{{ $l5baru=($k5baru+$ln*$eror12*$data12->bil) }}</td>
        <td>{{ $l6baru=($k6baru+$ln*$eror12*$data12->ggt) }}</td>
        <td>{{ $l1baru-$k1baru }}</td>
        <td>{{ $l2baru-$k2baru }}</td>
        <td>{{ $l3baru-$k3baru }}</td>
        <td>{{ $l4baru-$k4baru }}</td>
        <td>{{ $l5baru-$k5baru }}</td>
        <td>{{ $l6baru-$k6baru }}</td>
    </tr>
  {{-- baris 12--}}

  {{-- baris 13 --}}
    <tr>
        <td>{{ $m1baru=($l1baru+$ln*$eror13*$data13->alb) }}</td>
        <td>{{ $m2baru=($l2baru+$ln*$eror13*$data13->alp) }}</td>
        <td>{{ $m3baru=($l3baru+$ln*$eror13*$data13->alt) }}</td>
        <td>{{ $m4baru=($l4baru+$ln*$eror13*$data13->ast) }}</td>
        <td>{{ $m5baru=($l5baru+$ln*$eror13*$data13->bil) }}</td>
        <td>{{ $m6baru=($l6baru+$ln*$eror13*$data13->ggt) }}</td>
        <td>{{ $m1baru-$l1baru }}</td>
        <td>{{ $m2baru-$l2baru }}</td>
        <td>{{ $m3baru-$l3baru }}</td>
        <td>{{ $m4baru-$l4baru }}</td>
        <td>{{ $m5baru-$l5baru }}</td>
        <td>{{ $m6baru-$l6baru }}</td>
    </tr>
  {{-- baris 13--}}

  {{-- baris 14 --}}
    <tr>
        <td>{{ $n1baru=($m1baru+$ln*$eror14*$data14->alb) }}</td>
        <td>{{ $n2baru=($m2baru+$ln*$eror14*$data14->alp) }}</td>
        <td>{{ $n3baru=($m3baru+$ln*$eror14*$data14->alt) }}</td>
        <td>{{ $n4baru=($m4baru+$ln*$eror14*$data14->ast) }}</td>
        <td>{{ $n5baru=($m5baru+$ln*$eror14*$data14->bil) }}</td>
        <td>{{ $n6baru=($m6baru+$ln*$eror14*$data14->ggt) }}</td>
        <td>{{ $n1baru-$m1baru }}</td>
        <td>{{ $n2baru-$m2baru }}</td>
        <td>{{ $n3baru-$m3baru }}</td>
        <td>{{ $n4baru-$m4baru }}</td>
        <td>{{ $n5baru-$m5baru }}</td>
        <td>{{ $n6baru-$m6baru }}</td>
    </tr>
  {{-- baris 14--}}

  {{-- baris 15 --}}
    <tr>
        <td>{{ $o1baru=($n1baru+$ln*$eror15*$data15->alb) }}</td>
        <td>{{ $o2baru=($n2baru+$ln*$eror15*$data15->alp) }}</td>
        <td>{{ $o3baru=($n3baru+$ln*$eror15*$data15->alt) }}</td>
        <td>{{ $o4baru=($n4baru+$ln*$eror15*$data15->ast) }}</td>
        <td>{{ $o5baru=($n5baru+$ln*$eror15*$data15->bil) }}</td>
        <td>{{ $o6baru=($n6baru+$ln*$eror15*$data15->ggt) }}</td>
        <td>{{ $o1baru-$n1baru }}</td>
        <td>{{ $o2baru-$n2baru }}</td>
        <td>{{ $o3baru-$n3baru }}</td>
        <td>{{ $o4baru-$n4baru }}</td>
        <td>{{ $o5baru-$n5baru }}</td>
        <td>{{ $o6baru-$n6baru }}</td>
    </tr>
  {{-- baris 15--}}

  {{-- baris 16 --}}
    <tr>
        <td>{{ $p1baru=($o1baru+$ln*$eror16*$data16->alb) }}</td>
        <td>{{ $p2baru=($o2baru+$ln*$eror16*$data16->alp) }}</td>
        <td>{{ $p3baru=($o3baru+$ln*$eror16*$data16->alt) }}</td>
        <td>{{ $p4baru=($o4baru+$ln*$eror16*$data16->ast) }}</td>
        <td>{{ $p5baru=($o5baru+$ln*$eror16*$data16->bil) }}</td>
        <td>{{ $p6baru=($o6baru+$ln*$eror16*$data16->ggt) }}</td>
        <td>{{ $p1baru-$o1baru }}</td>
        <td>{{ $p2baru-$o2baru }}</td>
        <td>{{ $p3baru-$o3baru }}</td>
        <td>{{ $p4baru-$o4baru }}</td>
        <td>{{ $p5baru-$o5baru }}</td>
        <td>{{ $p6baru-$o6baru }}</td>
    </tr>
  {{-- baris 16--}}

  {{-- baris 17 --}}
    <tr>
        <td>{{ $q1baru=($p1baru+$ln*$eror17*$data17->alb) }}</td>
        <td>{{ $q2baru=($p2baru+$ln*$eror17*$data17->alp) }}</td>
        <td>{{ $q3baru=($p3baru+$ln*$eror17*$data17->alt) }}</td>
        <td>{{ $q4baru=($p4baru+$ln*$eror17*$data17->ast) }}</td>
        <td>{{ $q5baru=($p5baru+$ln*$eror17*$data17->bil) }}</td>
        <td>{{ $q6baru=($p6baru+$ln*$eror17*$data17->ggt) }}</td>
        <td>{{ $q1baru-$p1baru }}</td>
        <td>{{ $q2baru-$p2baru }}</td>
        <td>{{ $q3baru-$p3baru }}</td>
        <td>{{ $q4baru-$p4baru }}</td>
        <td>{{ $q5baru-$p5baru }}</td>
        <td>{{ $q6baru-$p6baru }}</td>
    </tr>
  {{-- baris 17--}}

  {{-- baris 18 --}}
    <tr>
        <td>{{ $r1baru=($q1baru+$ln*$eror18*$data18->alb) }}</td>
        <td>{{ $r2baru=($q2baru+$ln*$eror18*$data18->alp) }}</td>
        <td>{{ $r3baru=($q3baru+$ln*$eror18*$data18->alt) }}</td>
        <td>{{ $r4baru=($q4baru+$ln*$eror18*$data18->ast) }}</td>
        <td>{{ $r5baru=($q5baru+$ln*$eror18*$data18->bil) }}</td>
        <td>{{ $r6baru=($q6baru+$ln*$eror18*$data18->ggt) }}</td>
        <td>{{ $r1baru-$q1baru }}</td>
        <td>{{ $r2baru-$q2baru }}</td>
        <td>{{ $r3baru-$q3baru }}</td>
        <td>{{ $r4baru-$q4baru }}</td>
        <td>{{ $r5baru-$q5baru }}</td>
        <td>{{ $r6baru-$q6baru }}</td>
    </tr>
  {{-- baris 18--}}

  {{-- baris 19 --}}
    <tr>
        <td>{{ $s1baru=($r1baru+$ln*$eror19*$data19->alb) }}</td>
        <td>{{ $s2baru=($r2baru+$ln*$eror19*$data19->alp) }}</td>
        <td>{{ $s3baru=($r3baru+$ln*$eror19*$data19->alt) }}</td>
        <td>{{ $s4baru=($r4baru+$ln*$eror19*$data19->ast) }}</td>
        <td>{{ $s5baru=($r5baru+$ln*$eror19*$data19->bil) }}</td>
        <td>{{ $s6baru=($r6baru+$ln*$eror19*$data19->ggt) }}</td>
        <td>{{ $s1baru-$r1baru }}</td>
        <td>{{ $s2baru-$r2baru }}</td>
        <td>{{ $s3baru-$r3baru }}</td>
        <td>{{ $s4baru-$r4baru }}</td>
        <td>{{ $s5baru-$r5baru }}</td>
        <td>{{ $s6baru-$r6baru }}</td>
    </tr>
  {{-- baris 19--}}

  {{-- baris 20 --}}
    <tr>
        <td>{{ $t1baru=($s1baru+$ln*$eror20*$data20->alb) }}</td>
        <td>{{ $t2baru=($s2baru+$ln*$eror20*$data20->alp) }}</td>
        <td>{{ $t3baru=($s3baru+$ln*$eror20*$data20->alt) }}</td>
        <td>{{ $t4baru=($s4baru+$ln*$eror20*$data20->ast) }}</td>
        <td>{{ $t5baru=($s5baru+$ln*$eror20*$data20->bil) }}</td>
        <td>{{ $t6baru=($s6baru+$ln*$eror20*$data20->ggt) }}</td>
        <td>{{ $t1baru-$s1baru }}</td>
        <td>{{ $t2baru-$s2baru }}</td>
        <td>{{ $t3baru-$s3baru }}</td>
        <td>{{ $t4baru-$s4baru }}</td>
        <td>{{ $t5baru-$s5baru }}</td>
        <td>{{ $t6baru-$s6baru }}</td>
    </tr>
  {{-- baris 20--}}
         
                </tbody>
            </table>
        {{-- Literasi  8--}}

    </div>

</div>

@endsection


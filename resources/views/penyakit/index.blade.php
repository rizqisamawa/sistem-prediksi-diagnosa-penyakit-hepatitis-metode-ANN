@extends('layouts.master')

@section('content')

<div class="main">
  <div class="main-content">
    <div class="content-header">
      <div class="container-fiuld">
        <div class="row">
          <div class="col-md-12">           
            <div class="panel-heading">
                    <h3 class="panel-title">Data Penyakit</h3><br>
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                     Tambah Data Penyakit
                    </button>
            </div>
            <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                  <div class="modal-body">
                                  <form action="/penyakit/create" method="POST">
                                    {{csrf_field()}}
                              <div class="form-group">
                                <label for="exampleInputEmail1">Kategory</label>
                                <input name="kategory" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Donor darah" readonly>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Umur</label>
                                <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Umur">
                              </div>
                              
                              <div class="form-group">
                                <label for="ExampleInputControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="ExampleInputControlSelect1">
                                  <option value="L">Laki-Laki</option>
                                  <option value="P">Perempuan</option>
                                </select>
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Alb</label>
                                <input name="alb" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alb">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Alp</label>
                                <input name="alp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alp">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Alt</label>
                                <input name="alt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alt">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Ast</label>
                                <input name="ast" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ast">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Bil</label>
                                <input name="bil" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bil">
                              </div>

                              <div class="form-group">
                                <label for="exampleInputEmail1">Ggt</label>
                                <input name="ggt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ggt"> 
                              </div>

                              <div class="form-group">
                                <label for="ExampleInputControlSelect">Status</label>
                                <select name="status" class="form-control" id="ExampleInputControlSelect">
                                  <option value="Negatif">Negatif</option>
                                  <option value="Positif">Positif</option>
                                </select>
                              </div>
                                  </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

            <div class="panel-body">
              <!-- table -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                                <th scope="col">No</th>
                                <th scope="col">Kategory</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Jenis Kelamin</th>
                                <th scope="col">Alb</th>
                                <th scope="col">Alp</th>
                                <th scope="col">Alt</th>
                                <th scope="col">Ast</th>
                                <th scope="col">Bil</th>
                                <th scope="col">Ggt</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                              @forelse ($dp as $data) 
                      <tr>
                          <th scope="row">{{$loop->iteration}}</th>
                          <td>{{$data->kategory}}</td>
                          <td>{{$data->umur}}</td>
                          <td>{{$data->jenis_kelamin}}</td>
                          <td>{{number_format($data->alb,1)}}</td>
                          <td>{{number_format($data->alp,1)}}</td>
                          <td>{{number_format($data->alt,1)}}</td>
                          <td>{{number_format($data->ast,1)}}</td>
                          <td>{{number_format($data->bil,1)}}</td>
                          <td>{{number_format($data->ggt,1)}}</td>
                          <td>{{$data->status}}</td>
                          <td>
                            <a href="/penyakit/{{$data->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <a href="/penyakit/{{$data->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau di hapus ?')">Delete</a>
                        </td>
                      </tr>
                      @empty
                          <tr>Data Kosong</tr>
                 
                      @endforelse
                  </tbody>
							  </table>
              <!-- table -->
            </div>
          </div>         
        </div>
      </div> 
    </div> 
  </div> 
</div>

@stop

@section('content1')

@php
$w1 = -71;
$w2 = -68;
$w3 = 25;
$w4 = 56;
$w5 = -12;
$w6 = 89;
$ln = 0.9;
$th = 0;
@endphp

<!-- <h3>Menghitung Nilai V</h3> -->
<!-- tabel perhitungan -->
<!-- <table class="table table-hover">
        <thead>
      
            <tr>
            <th scope="col">No</th>
            <th scope="col">Alb</th>
            <th scope="col">Alp</th>
            <th scope="col">Alt</th>
            <th scope="col">Ast</th>
            <th scope="col">Bil</th>
            <th scope="col">Ggt</th>
            <th scope="col">V</th>
            <th scope="col">Luaran Y</th>
            <th scope="col">Y</th>
            <th scope="col">Error</th>
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
            <tr>
                <th scope="row">{{1}}</th>
                <td>{{number_format($data1->alb,1)}}</td>
                <td>{{number_format($data1->alp,1)}}</td>
                <td>{{number_format($data1->alt,1)}}</td>
                <td>{{number_format($data1->ast,1)}}</td>
                <td>{{number_format($data1->bil,1)}}</td>
                <td>{{number_format($data1->ggt,1)}}</td>
                <td>{{number_format($hasil1=$data1->alb*$w1+$data1->alp*$w2+$data1->alt*$w3+$data1->ast*$w4+$data1->bil*$w5+$data1->ggt*$w6,1)}}</td>
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
                <td>{{$eror=($sts-$aa)}}</td>
                <td>{{$w1baru=($w1+$ln*$eror*$data1->alb)}}</td>
                <td>{{$w2baru=($w2+$ln*$eror*$data1->alp)}}</td>
                <td>{{$w3baru=($w3+$ln*$eror*$data1->alt)}}</td>
                <td>{{$w4baru=($w4+$ln*$eror*$data1->ast)}}</td>
                <td>{{$w5baru=($w5+$ln*$eror*$data1->bil)}}</td>
                <td>{{$w6baru=($w6+$ln*$eror*$data1->ggt)}}</td>
                <td>{{$w1baru-$w1}}</td>
                <td>{{$w2baru-$w2}}</td>
                <td>{{$w3baru-$w3}}</td>
                <td>{{$w4baru-$w4}}</td>
                <td>{{$w5baru-$w5}}</td>
                <td>{{$w6baru-$w6}}</td>
               



            </tr>
        </tbody>
</table> -->
<!-- tabel perhitungan -->

<!-- literasi 1 -->
<h3>Menghitung Literasi 1</h3> 
<table class="table table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Alb</th>
            <th scope="col">Alp</th>
            <th scope="col">Alt</th>
            <th scope="col">Ast</th>
            <th scope="col">Bil</th>
            <th scope="col">Ggt</th>
            <th scope="col">V</th>
            <th scope="col">Luaran Y</th>
            <th scope="col">Y</th>
            <th scope="col">Error</th>
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
            @foreach ($dp as $data) 
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{number_format($data->alb,1)}}</td>
                <td>{{number_format($data->alp,1)}}</td>
                <td>{{number_format($data->alt,1)}}</td>
                <td>{{number_format($data->ast,1)}}</td>
                <td>{{number_format($data->bil,1)}}</td>
                <td>{{number_format($data->ggt,1)}}</td>
                <td>{{number_format($hasil1=$data->alb*$w1+$data->alp*$w2+$data->alt*$w3+$data->ast*$w4+$data->bil*$w5+$data->ggt*$w6,1)}}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
<!-- literasi 1 -->

</div>
@endsection
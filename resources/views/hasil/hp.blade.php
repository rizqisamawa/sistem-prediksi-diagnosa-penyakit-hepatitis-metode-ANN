@extends('layouts.master')

@section('content')

<div class="main">
  <div class="main-content">
<div class="panel panel-headline">
  <div class="panel-heading">
          <h3 class="panel-title">Prediksi</h3>
        </div>
 
        <div class="panel-body">
          <form action="/hasildiagnosa/hd" method="HEAD">
            {{csrf_field()}}
              <div class="row">
                <div class="col-lg-6">
                  <label for="1">Nama</label>
                  <input name="Nama" id="1" class="form-control" type="text"><br>
                  <label for="1">Umur</label>
                  <input name="Umur" id="1" class="form-control" type="text"><br>
                  <label for="1">Jenis Kelamin</label>
                  <input name="Jenis_Kelamin" id="1" class="form-control" type="text"><br>
                  <label for="1">ALB</label>
                  <input name="ALB" id="1" class="form-control" type="text"><br>
                  <label for="1">ALP</label>
                  <input name="ALP" class="form-control" type="text"><br>
                </div>
                <div class="col-lg-6">
                  <label for="1">ALT</label>
                  <input name="ALT" class="form-control" type="text"><br>
                  <label for="1">AST</label>
                  <input name="AST"class="form-control" type="text"><br>
                  <label for="1">BIL</label>
                  <input name="BIL"class="form-control" type="text"><br>
                  <label for="1">GGT</label>
                  <input name="GGT"class="form-control" type="text"><br> 
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-block">Hasil Diagnosa</button>
                    </form>
                  </div>           
              </div>
        </div>

</div>
</div>
@endsection

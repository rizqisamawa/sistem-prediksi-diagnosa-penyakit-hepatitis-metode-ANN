@extends('layouts.master')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="content-header">
      <div class="container-fiuld">
        <div class="row">
          <div class="col-md-12">            
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body"><form action="/penyakit/{{$penyakit->id}}/update" method="POST">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Kategory</label>
    <input name="kategory" "type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kategory" value="{{$penyakit->kategory}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Umur</label>
    <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Umur" value="{{$penyakit->umur}}">
  </div>
  
  <div class="form-group">
    <label for="ExampleInputControlSelect1">Pilih Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="ExampleInputControlSelect1">
      <option value="L" @if($penyakit->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
      <option value="P" @if($penyakit->jenis_kelamin == 'P') selected @endif>Perempuan</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Alb</label>
    <input name="alb" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alb" value="{{$penyakit->alb}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Alp</label>
    <input name="alp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alp" value="{{$penyakit->alp}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Alt</label>
    <input name="alt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Alt" value="{{$penyakit->alt}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Ast</label>
    <input name="ast" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ast" value="{{$penyakit->ast}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Bil</label>
    <input name="bil" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Bil" value="{{$penyakit->bil}}">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Ggt</label>
    <input name="ggt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ggt" value="{{$penyakit->ggt}}"> 
  </div>

  <div class="form-group">
    <label for="ExampleInputControlSelect">Status</label>
    <select name="status" class="form-control" id="ExampleInputControlSelect">
      <option value="Negatif" @if($penyakit->status == 'Negatif') selected @endif>Negatif</option>
      <option value="Positif" @if($penyakit->status == 'Positif') selected @endif>Positif</option>
    </select>
  </div>

  <button type="submit" class="btn btn-warning">Update</button>
        </form>
        </div>
    </table>
    </div>
    </div>
							
          </div>         
        </div>
      </div> 
    </div> 
  </div> 
</div>

@stop

  
    


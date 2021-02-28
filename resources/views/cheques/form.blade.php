@extends('layouts.admin')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="ibox">
      <div class="ibox-head">
        <div class="ibox-title">Cadastro de cheques</div>
        <div class="ibox-tools">
          <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
          <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
        </div>
      </div>
      <div class="ibox-body">
        <form class="form-horizontal" action="{{route('cheques.store')}}" method="post">
          @csrf
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Foto:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control"  placeholder="" name="foto">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Banco:</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="digite o banco" name="banco">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Numero:</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="digite o n" name="n">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Data de vencimento:</label>
            <div class="col-sm-10">
               <input type="date" class="form-control" placeholder="" name="dt_venc">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Valor:</label>
            <div class="col-sm-10">
               <input type="number" class="form-control" placeholder="" name="valor">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nome pessoa:</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="" name="nome_pes">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Recebi de::</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="" name="recebi">
            </div>
          </div>
           <div class="form-group row">
            <label class="col-sm-2 col-form-label">Passei para::</label>
            <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="" name="pass_p">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10 ml-sm-auto">
              <button class="btn btn-info" type="submit">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

  
</form>
@endsection
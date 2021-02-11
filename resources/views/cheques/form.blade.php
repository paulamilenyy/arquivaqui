@extends('base.base')
@section('conteudo')

<h2>Cadastro de cheques</h2>  
 <form action="{{route('cheques.store')}}" method="post">
 	@csrf
 	<div class="form-group">
      <label for="foto">Foto:</label>
      <input type="text" class="form-control"  placeholder="" name="foto">
    </div>

    <div class="form-group">
      <label for="banco">Banco:</label>
      <input type="text" class="form-control" placeholder="digite o banco" name="banco">
    </div>
    <div class="form-group">
      <label for="n">Nº:</label>
      <input type="text" class="form-control" placeholder="digite o n" name="n">
    </div>
     <div class="form-group">
      <label for="dt_venc">Data de vencimento:</label>
      <input type="date" class="form-control" placeholder="" name="dt_venc">
    </div>
     <div class="form-group">
      <label for="valor">Valor:</label>
      <input type="number" class="form-control" placeholder="" name="valor">
    </div>
     <div class="form-group">
      <label for="nome_pes">Nome pessoa:</label>
      <input type="text" class="form-control" placeholder="" name="nome_pes">
    </div>
     <div class="form-group">
      <label for="recebi">Recebi de:</label>
      <input type="text" class="form-control" placeholder="" name="recebi">
    </div>
    <div class="form-group">
      <label for="pass_p">Passei para:</label>
      <input type="text" class="form-control" placeholder="" name="pass_p">
    </div>

    
    <button  class="btn btn-primary">enviar</button>
  </form>
@endsection
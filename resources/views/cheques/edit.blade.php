@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-10">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Edição de cheques</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                </div>
            </div>

            <div class="ibox-body">
                <form class="form-horizontal" action="{{route('cheques.update',['cheque'=>$cheque->id])}}"
                    method="post" enctype="multipart/form-data">
                    <!--vai ir para a função de update cheque no controller-->
                    @csrf
                    @method('PUT')
                    <label>Foto atual:<img src="{{ asset( $cheque->foto ) }}" style="width:90px;height:70px;"
                            onerror="this.src='{{asset('./assets/img/chequeanonimo.png')}}'"> </label><br>
                    <div class="form-group">
                        <!--IMAGEM DE CHEQUE-->

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Foto do cheque:</label>
                            <input id="foto" type="file" class="form-control @error('foto') is-invalid @enderror"
                                name="foto">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Banco:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="digite o banco" name="banco"
                                value="{{$cheque->banco}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Numero:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="n" value="{{$cheque->numero}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Data de vencimento:</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" placeholder="" name="dt_venc"
                                value="{{$cheque->data_vencimento}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Valor:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="" name="valor"
                                value="{{$cheque->valor}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nome pessoa:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="" name="nome_pes"
                                value="{{$cheque->nome_pessoa}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Recebi de::</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="" name="recebi"
                                value="{{$cheque->recebido_de}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Passei para::</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="" name="pass_p"
                                value="{{$cheque->passei_para}}">
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
@endsection
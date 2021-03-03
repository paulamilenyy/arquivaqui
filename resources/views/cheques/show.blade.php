@extends('layouts.admin')

@section('content')

<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-md-6">
            <div class="ibox">
                <div class="ibox-head">
                    <div class="ibox-title">Cheque de ID {{$cheque->id}}</div>
                    <div class="ibox-tools">
                        <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                </div>
                <div class="ibox-body">
                    <div class="card" style="width:200px;">
                        <img class="card-img-top" src="{{asset('./assets/img/blog/storm.jpg')}}" />
                        <div class="card-body">
                            <h4 class="card-title">Foto do cheque</h4>
                            <div class="text-muted card-subtitle">Cadastrado dia {{$cheque->created_at}}</div>
                            <p class="card-text">
                                <ul class="list-group list-group-bordered">
                                    <li class="list-group-item">Banco: {{$cheque->banco}}
                                        <span class="badge badge-info float-right"><i class="fa fa-university"></i></span>
                                    </li>
                                    <li class="list-group-item">Número:{{$cheque->numero}}
                                        <span class="badge badge-info float-right"><i class="fa fa-money"></i></span>
                                    </li>
                                    <li class="list-group-item">Valor:{{$cheque->valor}}
                                        <span class="badge badge-info float-right">$</span>
                                    </li>
                                    <li class="list-group-item">Nome no cheque:{{$cheque->nome_pessoa}}
                                        <span class="badge badge-info float-right"><i class="fa fa-user"></i></span>
                                    </li>
                                    <li class="list-group-item">Recebi do cliente:{{$cheque->recebido_de}}
                                        <span class="badge badge-info float-right"><i class="fa fa-user"></i></span>
                                    </li>
                                    <li class="list-group-item">Passei para o cliente:{{$cheque->passei_para}}
                                        <span class="badge badge-info float-right"><i class="fa fa-user"></i></span>
                                    </li>
                                </ul>
                            
                            <button class="btn btn-default btn-sm"><i class="fa fa-plus"></i> Add</button>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
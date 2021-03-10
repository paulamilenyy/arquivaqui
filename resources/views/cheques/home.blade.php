@extends('layouts.admin')

@section('content')
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Cheques</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html"><i class="la la-home font-20"></i></a>
        </li>
        <li class="breadcrumb-item">Cheques</li>
        <a href="{{route('cheques.create')}}"><i class="fa fa-plus-square fa-3x"></i></a>
    </ol>
</div>
@error('auth')
<div class="alert alert-success col-sm-4">
    <strong>
        {{$message}}
    </strong>
</div>
@enderror
<p></p>


<div class="ibox">
    <div class="ibox-head">
        <div class="ibox-title">Tabela de cheques adicionados</div>
    </div>
    <div class="ibox-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>foto</th>
                        <th>Nº</th>
                        <th>Data de Cadastro</th>
                        <th>Ver detalhes</th>
                        <th>Editar</th>
                        <th>Excluir</th>


                    </tr>
                </thead>
                <tbody>
                    @if(count($cheques)>0)
                    @foreach($cheques as $cheque)
                    @can('lista-cheques',$cheque)
                    <tr>
                        <td><a href="{{route('cheques.show',['cheque'=>$cheque->id])}}"><img
                                    src="{{ asset( $cheque->foto ) }}" style="width:90px;height:70px;"
                                    onerror="this.src='{{asset('./assets/img/chequeanonimo.png')}}'"></a></td>

                        <td>{{$cheque->numero}}</td>
                        <td>{{$cheque->created_at}}</td>
                        <td><a href="{{route('cheques.show',['cheque'=>$cheque->id])}}"><i
                                    class="fa fa-eye fa-2x"></i></a></td>
                        <td><a href="{{route('cheques.edit',['cheque'=>$cheque->id])}}"><i
                                    class="fa fa-edit fa-2x"></i></a></td>

                        <td>
                            <form action="{{route('cheques.destroy',['cheque'=>$cheque->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button style="border: none; cursor: pointer;background-color: transparent;"><a
                                        href="#"><i class="fa fa-trash fa-2x"></i></a>
                        </td></button>
                        </form>
                        </td>
                    </tr>
                    @endcan
                    @endforeach
                    @endif
                    
                   
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
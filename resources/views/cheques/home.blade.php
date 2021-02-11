@extends('base.base')

@section('conteudo')
<h2>Cheques</h2>  
<a href="{{route('cheques.create')}}"><img src="https://img.icons8.com/nolan/64/plus-2-math.png"/></a>
<p></p>          
<div class="table-responsive-lg">  
<table class="table table-hover">
	<thead>
		<tr>
			<th>foto</th>
			<th>Banco</th>
			<th>Nº</th>
			<th>Data vencimento</th>
			<th>Valor</th>
			<th>Nome pessoa</th>
			<th>Recebi de</th>
			<th>Pass p/</th>
			<th>Data de Cadastro</th>
			<th>editar</th>
			<th>excluir</th>
		</tr>
	</thead>
	<tbody>
		@if(count($cheques)>0)
		@foreach($cheques as $cheque)
		<tr>
			<td><a href="{{route('cheques.show',['cheque'=>$cheque->id])}}">{{$cheque->foto}}</a></td>
			<td>{{$cheque->banco}}</td>
			<td>{{$cheque->numero}}</td>
			<td>{{$cheque->data_vencimento}}</td>
			<td>{{$cheque->valor}}</td>
			<td>{{$cheque->nome_pessoa}}</td>
			<td>{{$cheque->recebido_de}}</td>
			<td>{{$cheque->passei_para}}</td>
			<td>{{$cheque->created_at}}</td>
			<td><a href="{{route('cheques.edit',['cheque'=>$cheque->id])}}"><img src="https://img.icons8.com/nolan/64/multi-edit.png"/></a></td>
			<td>
				<form action="{{route('cheques.destroy',['cheque'=>$cheque->id])}}" method="post">
				@csrf
				@method('DELETE')
				<button style="border: none; cursor: pointer;background-color: transparent;"><img src="https://img.icons8.com/nolan/64/trash.png"/></button>
				</form>
			</td>
		</tr>

	@endforeach
	@else
	<tr>
		<td>Nenhum cheque cadastrado  -----  <a href="{{route('cheques.create')}}">adicionar</a> </td>
	</tr>


	@endif
</tbody>
</table>
</div>
@endsection
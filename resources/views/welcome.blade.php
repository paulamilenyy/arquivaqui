@extends('base.base')

@section('conteudo')

<h2>Cheques</h2>
    <p></p>            
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Banco</th>
                <th>Nº</th>
                <th>Data vencimento</th>
                <th>Nome pessoa</th>
                <th>Recebi de</th>
                <th>Pass p/</th>
                <th>excluir</th>
                <th>editar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>brasil</td>
                <td>2222</td>
                <td>22/30/2020</td>
                <td>xico</td>
                <td>maria</td>
                <td>joao</td>
                <td>LIXO</td>
                <td>EDIT</td>
            </tr>
            <tr>
                <td>brasil</td>
                <td>2222</td>
                <td>22/30/2020</td>
                <td>xico</td>
                <td>maria</td>
                <td>joao</td>
                <td>LIXO</td>
                <td>EDIT</td>
            </tr>

        </tbody>
    </table>
@endsection
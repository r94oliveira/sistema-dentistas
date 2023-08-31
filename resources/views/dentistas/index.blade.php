<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
<div>
            <a href="{{route('dentista.cadastro')}}">Cadastrar um novo dentista</a>
        </div>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>CRO</th>
                <th>CRO/UF</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
            @foreach($dentistas as $dentista)
                <tr>
                    <td>{{$dentista->name}}</td>
                    <td>{{$dentista->email}}</td>
                    <td>{{$dentista->cro}}</td>
                    <td>{{$dentista->cro_uf}}</td>
                   
                    <td>
                        <a href="{{route('dentista.edicao', ['dentista' => $dentista])}}">Editar</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('dentista.excluir', ['dentista' => $dentista])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Excluir" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
</div>
</body>
</html>
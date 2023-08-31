<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
<div>
            <a href="{{route('especialidade.cadastro')}}">Cadastrar especialidade</a>
        </div>
        <table border="1">
            <tr>
                <th>Nome</th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
            @foreach($especialidades as $especialidade)
                <tr>
                    <td>{{$especialidade->nome}}</td>
                    <td>
                        <a href="{{route('especialidade.edicao', ['especialidade' => $especialidade])}}">Editar</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('especialidade.excluir', ['especialidade' => $especialidade])}}">
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
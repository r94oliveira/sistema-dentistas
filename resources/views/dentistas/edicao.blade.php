<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>
        <form method="post" action="{{route('dentista.editar', ['dentista' => $dentista])}}">
            @csrf 
            @method('put')

            <div>
                <label>Nome</label>
                <input type="text" name="name" value="{{$dentista->name}}" required />
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="{{$dentista->email}}" required />
            </div>
            <div>
                <label>CRO</label>
                <input type="number" name="cro" value="{{$dentista->cro}}" required />
            </div>
            <div>
                <label>CRO/UF</label>
                <input type="text" name="cro_uf" value="{{$dentista->cro_uf}}" maxlength="2" required />
            </div>
            <div>
                <input type="submit" value="Editar" />
            </div>
        </form>
    </body>
</html>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>
    Cooperativa de planos odontológicos
  </title>
</head>

<body>

  <!-- menu -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand">
          Planos Odontológicos
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{route('dentista.index')}}">
                Dentistas
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('especialidade.index')}}">
                Especialidades
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- main -->
  <main class="bg-light">
    <!-- content -->
    <div class="jumbotron">
      <div class="container">
        <h1>
          Especialidades
        </h1>
        <p>
          Faça a edição, exclusão ou adição de especialidades.
        </p>
        <a type="button" class="btn btn-secondary" href="{{route('especialidade.cadastro')}}">Cadastrar especialidade</a>
      </div>
    </div>
    </div>
    <!-- search -->

    <div class="container">
      <div class="row">
        <div class="col">
          @if(session()->has('success'))
          <div class="text-success">
            {{session('success')}}
          </div>
          @endif
        </div>
        <div class="col mb-3 d-flex justify-content-end align-items-end">

          <div class="form-inline">
            <div class="input-group rounded ">
              <form method="get" action="{{route('especialidade.buscar')}}">
                <input type="search" class="form-control rounded" placeholder="Digite para buscar..." name="search" />
                <input class="btn btn-secondary" type="submit" value="Pesquisar" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>

    </div>
    <div class="container">
      <div class="table-responsive">

        <!--Table-->
        <table class="table">
          <!--Table head-->
          <thead>
            <tr>
              <th>Nome</th>
              <th>Editar</th>
              <th>Deletar</th>
            </tr>
          </thead>
          <!--Table body-->
          <tbody>
            @foreach($especialidades as $especialidade)
            <tr>
              <td>{{$especialidade->nome}}</td>
              <td>
                <a class="btn btn-dark" href="{{route('especialidade.edicao', ['especialidade' => $especialidade])}}">Editar</a>
              </td>
              <td>
                <form method="post" action="{{route('especialidade.excluir', ['especialidade' => $especialidade])}}">
                  @csrf
                  @method('delete')
                  <input class="btn btn-dark" type="submit" value="Excluir" />
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

    </div>
    <div class="container">
      <!-- pagination -->
      <div class="d-flex justify-content-center align-items-center">
        {{ $especialidades->links() }}
      </div>
    </div>
  </main>
  <!-- footer -->
  <footer class="text-muted">
    <div class="container">
      <p class="my-4">
        Copyright © Website 2023
      </p>
    </div>
  </footer>
  <!-- Scripts: jQuery, Popper.js and Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
</body>


</html>
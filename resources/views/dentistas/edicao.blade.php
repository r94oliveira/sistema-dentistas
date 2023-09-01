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

  <div>
    @if(session()->has('success'))
    <div>
      {{session('success')}}
    </div>
    @endif
  </div>

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
          Dentista
        </h1>
        <p>
          Faça a alteração desejada no cadastro
        </p>


        <form method="post" action="{{route('dentista.editar', ['dentista' => $dentista])}}">
          @csrf
          @method('put')
          <div class="form-group">
            <div>
              <label class="mt-2">Nome</label>
              <input type="text" name="name" class="form-control" value="{{$dentista->name}}" required />
            </div>
            <div>
              <label class="mt-2">Email</label>
              <input type="email" name="email" class="form-control" value="{{$dentista->email}}" required />
            </div>
            <div>
              <label class="mt-2">CRO</label>
              <input type="number" name="cro" class="form-control" value="{{$dentista->cro}}" required />
            </div>
            <div>
              <label class="mt-2">CRO/UF</label>
              <input type="text" name="cro_uf" class="form-control" value="{{$dentista->cro_uf}}" maxlength="2" required />
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <input type="submit" class="btn btn-secondary mt-3 w-25" value="Editar" />
            </div>
          </div>
        </form>
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
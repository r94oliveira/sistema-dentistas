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

        <p>
          <b>Profissional:</b> {{$dentista->name}}
        </p>
        <p>
          <b>Email:</b> {{$dentista->email}}
        </p>
        <p>
          <b>CRO:</b> {{$dentista->cro}}
        </p>
        <p>
          <b>CRO/UF:</b> {{$dentista->cro_uf}}
        </p>
        <p>
          <b>Especialidades:</b>

          @foreach($dentistaEspecialidades as $dentistaEspecialidade)
          {{ $dentistaEspecialidade->nome }}
          @endforeach
        </p>

      </div>
    </div>
    </div>

    </div>
    <div class="container">
      <div class="table-responsive">

        <!--Table-->
        <table class="table">
          <!--Table head-->
          <thead>
            <tr>
              <th>Especialidade</th>
              <th>Adicionar</th>
              <th>Remover</th>
            </tr>
          </thead>
          <!--Table body-->
          <tbody>
            @foreach($especialidades as $especialidade)
            <tr>
              <td>{{$especialidade->nome}}</td>

              <td>

                <form method="post" action="{{route('dentistasEspecialidades.adicionar', ['especialidade' => $especialidade, 'dentista' => $dentista])}}">
                  @csrf
                  @method('post')
                  <input type="hidden" name="especialidade_id" value="{{$especialidade->id}}" />
                  <input class="btn btn-dark" type="submit" value="Adicionar" />
                </form>
              </td>
              <td>
                <form method="post" action="{{route('dentistasEspecialidades.remover', ['especialidade' => $especialidade,'dentista' => $dentista])}}">
                  @csrf
                  @method('delete')
                  <input type="hidden" name="especialidade_id" value="{{$especialidade->id}}" />
                  <input class="btn btn-dark" type="submit" value="Remover" />
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
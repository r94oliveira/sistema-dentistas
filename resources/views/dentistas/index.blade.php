<!doctype html>
<html lang="en">
  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
    crossorigin="anonymous">
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

<!-- header -->
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand">
        Planos Odontológicos
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
      aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
  <!-- menu -->
  <div class="jumbotron">
    <div class="container">
      <h1>
        Dentistas
      </h1>
      <p>
        Faça o gerenciamento dos profissionais e suas especialidades
      </p>
    <a type="button" class="btn btn-secondary" href="{{route('dentista.cadastro')}}">Cadastrar dentista</a>
    </div>
    </div>
  </div>
  <!-- search -->
  <div class="container">
    <div class="row mb-3 d-flex justify-content-end align-items-end">

      <div class="col-12 col-lg-6">
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Digite para buscar..."
          aria-label="Search" aria-describedby="search-addon" />
          <span class="btn btn-secondary" id="search-addon">
              Pesquisar
          </span>
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
            <th>Email</th>
            <th>CRO</th>
            <th>CRO/UF</th>
            <th>Especialidades</th>
            <th>Editar</th>
            <th>Deletar</th>
          </tr>
        </thead>
        <!--Table body-->
        <tbody>
        @foreach($dentistas as $dentista)
                <tr>
                    <td>{{$dentista->name}}</td>
                    <td>{{$dentista->email}}</td>
                    <td>{{$dentista->cro}}</td>
                    <td>{{$dentista->cro_uf}}</td>
                    <td>
                        <a class="btn btn-dark" href="{{route('dentistasEspecialidades.index', ['dentista' => $dentista])}}">Especialidades</a>
                    </td>
                    <td>
                        <a class="btn btn-dark" href="{{route('dentista.edicao', ['dentista' => $dentista])}}">Editar</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('dentista.excluir', ['dentista' => $dentista])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" class="btn btn-dark" value="Excluir" />
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
      <nav aria-label="Page navigation example">
        <ul class="pagination">
          <li class="page-item">
            <a class="page-link" href="#">
              Previous
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">
              1
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">
              2
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">
              3
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#">
              Next
            </a>
          </li>
        </ul>
      </nav>
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
crossorigin="anonymous">
</script>
</body>


</html>
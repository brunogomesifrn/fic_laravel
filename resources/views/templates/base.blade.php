<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cursos FIC - IFRN Campus Canguaretama</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('css/modern-business.css')}}" rel="stylesheet">

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <meta name="csrf-token" content="{{ csrf_token() }}" >

  <style type="text/css">

.carousel-item{
    height: 200px;
} 


</style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Cursos FICs</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/cursos">Cursos</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/cadastro"><i class="fa fa-floppy-o"></i> Cadastro</a>
          </li>
          @endguest
          @guest
          <li class="nav-item">
            <a class="nav-link" href="/autenticacao"><i class="fa fa-sign-in"></i> Login</a>
          </li>
          @endguest
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i> Perfil
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
              <a class="dropdown-item" href="/perfil_inscricoes">Inscrições</a>
              <a class="dropdown-item" href="/perfil_icursos">Cursos</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/desconectar"><i class="fa fa-sign-out"></i> Logout</a>
          </li>
          @endauth

        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

  @yield('conteudo')

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Cursos FICs - IFRN Cang 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

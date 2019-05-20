@extends('templates.base')

@section('conteudo')

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Administração
      <small>{{Auth::user()->apelido }}</small></h1>

   <hr />

    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      
      @include('templates.menu_perfil')

      <!-- Content Column -->
      <div class="col-lg-9 mb-4">
      

    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Perfil</h4>
          <div class="card-body">
            <p class="card-text">Visualize e edite suas informações pessoais.</p>
          </div>
          <div class="card-footer">
            <a href="perfil_dados.html" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Inscrições</h4>
          <div class="card-body">
            <p class="card-text">Visualize as suas inscrições em Cursos FICs no IFRN - Campus Canguaretama.</p>
          </div>
          <div class="card-footer">
            <a href="perfil_inscricoes.html" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header">Cursos</h4>
          <div class="card-body">
            <p class="card-text">Gerencie os cursos e inscrições desta plataforma.</p>
          </div>
          <div class="card-footer">
            <a href="perfil_cursos.html" class="btn btn-primary">Acessar</a>
          </div>
        </div>
      </div>
    </div>




      </div>
    </div>
    <!-- /.row -->

@endsection
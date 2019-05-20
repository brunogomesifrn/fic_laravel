@extends('templates.base')

@section('conteudo')
 

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Curso
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="cursos.html">Cursos</a></li>
      <li class="breadcrumb-item active">Curso</li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <a href="#"><img class="card-img-top img-fluid rounded" src="img/curso_no_img.jpg" alt=""></a>

        <hr/>
          <h2>Título do Curso</h2>
        <hr/>
          <p>Instrutores: Nome 1, Nome 2...</p>
        <hr/>
          <p>Descrição...</p>
        <hr/>
      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Inscrição</h5>
          <div class="card-body">
            <div class="input-group">
              <span class="input-group-btn">
                <a href="login.html"><button class="btn btn-secondary" type="button">Login</button></a>
                <a href="admin_inscricoes.html"><button class="btn btn-secondary" type="button">Realizar Inscrição</button></a>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Detalhes</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <p><strong>Data de Início:</strong> 23/03/2019</p>
                <p><strong>Data de Fim:</strong> 30/06/2019</p>
                <p><strong>Carga Horária:</strong> 80 Horas</p>
                <p><strong>Vagas:</strong> 20</p>
                <p><strong>Inscritos:</strong> 15</p>
                <p><strong>Área:</strong> Informática</p>
                <p><strong>Públicos:</strong></p>
                <ul>
                  <li>Discentes</li>
                  <li>Externo</li>
                </ul>
              </div>
              
            </div>
          </div>
        </div>

        <div class="card my-4">
          <h5 class="card-header">Pré-requisitos</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <p>....</p>
              </div>
              
            </div>
          </div>
        </div>

        
      </div>

    </div>
    <!-- /.row -->

 @endsection
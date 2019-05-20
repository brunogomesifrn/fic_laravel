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

          <h3>Áreas</h3>
          <br />
          <p><a href="perfil_cursos_cadastro.html"><button type="button" class="btn btn-primary">Cadastrar Área</button></a></p>
          <br />

            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Gerenciar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Área 1</th>
                  <td>
                      <a href="perfil_cursos_cadastro.html"><button type="button" class="btn btn-info">Editar</button></a>
                      <a href="perfil_cursos.html"><button type="button" class="btn btn-danger">Excluir</button></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Área 2</th>
                  <td>
                      <a href="perfil_cursos_cadastro.html"><button type="button" class="btn btn-info">Editar</button></a>
                      <a href="perfil_cursos.html"><button type="button" class="btn btn-danger">Excluir</button></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Área 3</th>
                  <td>
                      <a href="perfil_cursos_cadastro.html"><button type="button" class="btn btn-info">Editar</button></a>
                      <a href="perfil_cursos.html"><button type="button" class="btn btn-danger">Excluir</button></a>
                  </td>
                </tr>
              </tbody>
            </table>




      </div>
    </div>
    <!-- /.row -->


@endsection
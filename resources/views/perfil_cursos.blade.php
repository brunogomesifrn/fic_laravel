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

          <h3>Cursos Ofertados</h3>
          <br />
          <p><a href="perfil_cursos_cadastro.html"><button type="button" class="btn btn-primary">Cadastrar Curso</button></a></p>
          <br />

            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Curso</th>
                  <th scope="col">Período</th>
                  <th scope="col">Inscritos</th>
                  <th scope="col">Gerenciar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Título do Curso 1</th>
                  <td>02/03/2018 a 30/07/2018</td>
                  <td><a href="perfil_curso_lista.html" target="_blank"><button type="button" class="btn btn-secondary">Lista</button></a></td>
                  <td>
                      <a href="perfil_cursos_cadastro.html"><button type="button" class="btn btn-info">Editar</button></a>
                      <a href="perfil_cursos.html"><button type="button" class="btn btn-danger">Excluir</button></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Título do Curso 2</th>
                  <td>02/03/2018 a 30/07/2018</td>
                  <td><a href="perfil_curso_lista.html" target="_blank"><button type="button" class="btn btn-secondary">Lista</button></a></td>
                  <td>
                      <a href="perfil_cursos_cadastro.html"><button type="button" class="btn btn-info">Editar</button></a>
                      <a href="perfil_cursos.html"><button type="button" class="btn btn-danger">Excluir</button></a>
                  </td>
                </tr>
                <tr>
                  <th scope="row">Título do Curso 3</th>
                  <td>02/03/2018 a 30/07/2018</td>
                  <td><a href="perfil_curso_lista.html" target="_blank"><button type="button" class="btn btn-secondary">Lista</button></a></td>
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
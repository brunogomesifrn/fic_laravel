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
            
            <h3>Inscrições</h3>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Curso</th>
                  <th scope="col">Período</th>
                  <th scope="col">Cancelar Inscrição</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Título do Curso 1</th>
                  <td>02/03/2018 a 30/07/2018</td>
                  <td><button type="button" class="btn btn-danger">X</button></td>
                </tr>
                <tr>
                  <th scope="row">Título do Curso 2</th>
                  <td>02/03/2018 a 30/07/2018</td>
                  <td><button type="button" class="btn btn-danger">X</button></td>
                </tr>
                <tr>
                  <th scope="row">Título do Curso 3</th>
                  <td>02/03/2018 a 30/07/2018</td>
                  <td><button type="button" class="btn btn-danger">X</button></td>
                </tr>
              </tbody>
            </table>

      </div>
    </div>
    <!-- /.row -->


@endsection
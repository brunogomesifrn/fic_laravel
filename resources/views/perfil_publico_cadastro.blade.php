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

          <h3>Cadastro de Público:</h3>
          
        <form action="" method="post">
          <div class="control-group form-group">
            <div class="controls">
              <label>Nome:</label>
              <input type="text" class="form-control" name="nome" required>
              <p class="help-block"></p>
            </div>
          </div>
          <br />
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Cadastrar</button>
        </form>




      </div>
    </div>
    <!-- /.row -->

@endsection
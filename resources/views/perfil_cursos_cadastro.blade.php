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

          <h3>Cadastro de Curso:</h3>
          
        <form action="" method="post">
          <div class="control-group form-group">
            <div class="controls">
              <label>Título:</label>
              <input type="text" class="form-control" name="nome" required>
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>Descrição:</label>
              <textarea class="form-control" name="descricao" required>
              </textarea></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>Carga Horária:</label>
              <input type="number" class="form-control" name="ch" required max="160" min="8" step="1">
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>Data de Início:</label>
              <input type="date" class="form-control" name="inicio" required>
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>Previsão de Fim:</label>
              <input type="date" class="form-control" name="fim" required>
              <p class="help-block"></p>
            </div>
          </div>


          <div class="control-group form-group">
            <div class="controls">
              <label>Instrutores:</label>
              <input type="text" class="form-control" name="instrutores" required>
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>Pré-requisitos:</label>
              <input type="text" class="form-control" name="pre" required>
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <p>
              <label>Área:</label><br />
              <input type="radio" name="area" value="1"> Opção 1<br />
              <input type="radio" name="area" value="2"> Opção 2<br />
              <input type="radio" name="area" value="3"> Opção 3<br />
              </p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <p>
              <label>Público:</label><br />
              <input type="checkbox" name="publico[]" value="1"> Opção 1<br />
              <input type="checkbox" name="publico[]" value="2"> Opção 2<br />
              <input type="checkbox" name="publico[]" value="3"> Opção 3<br />
              </p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>Foto:</label>
              <input type="file" class="form-control" name="nome" required>
              <p class="help-block"></p>
            </div>
          </div>

          <div class="control-group form-group">
            <div class="controls">
              <label>PPC do Curso:</label>
              <input type="file" class="form-control" name="ppc" required>
              <p class="help-block"></p>
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <br />
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Cadastrar</button>
        </form>




      </div>
    </div>
    <!-- /.row -->

@endsection
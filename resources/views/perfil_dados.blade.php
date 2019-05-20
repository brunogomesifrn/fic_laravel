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
      

 <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
      <div class="col-8">
        <h3>Perfil:</h3>
        <form name="sentMessage" id="contactForm" novalidate action="admin.html">
          <div class="control-group form-group">
            <div class="controls">
              <label>Nome:</label>
              <input type="text" class="form-control" name="nome" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>CPF:</label>
              <input type="text" class="form-control" name="cpf" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Matrícula no IFRN (se tiver):</label>
              <input type="text" class="form-control" name="matricula" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Telefone:</label>
              <input type="text" class="form-control" name="telefone" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>E-mail:</label>
              <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Senha:</label>
              <input type="password" class="form-control" name="senha" required data-validation-required-message="Please enter your phone number.">
            </div>
          </div>
          <div id="success"></div>
          <!-- For success/fail messages -->
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Atualizar</button>
        </form>
      </div>

    </div>
    <!-- /.row -->




      </div>
    </div>
    <!-- /.row -->

@endsection
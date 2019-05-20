@extends('templates.base')

@section('conteudo')

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Cursos
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Cursos</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <div class="row">
          <div class="col-lg-6 portfolio-item">
            <div class="card h-100">
              <a href="curso_detalhes.html"><img class="card-img-top" src="{{asset('img/curso_no_img.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="curso_detalhes.html">Curso 1</a>
                </h4>
                <p class="card-text">Descrição.</p>
              </div>
            </div>
          </div>

           <div class="col-lg-6 portfolio-item">
            <div class="card h-100">
              <a href="curso_detalhes.html"><img class="card-img-top" src="{{asset('img/curso_no_img.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="curso_detalhes.html">Curso 2</a>
                </h4>
                <p class="card-text">Descrição.</p>
              </div>
            </div>
          </div>

           <div class="col-lg-6 portfolio-item">
            <div class="card h-100">
              <a href="curso_detalhes.html"><img class="card-img-top" src="{{asset('img/curso_no_img.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="curso_detalhes.html">Curso 3</a>
                </h4>
                <p class="card-text">Descrição.</p>
              </div>
            </div>
          </div>

           <div class="col-lg-6 portfolio-item">
            <div class="card h-100">
              <a href="curso_detalhes.html"><img class="card-img-top" src="{{asset('img/curso_no_img.jpg')}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="curso_detalhes.html">Curso 4</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
              </div>
            </div>
          </div>
        </div>



        

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">
 <!-- Categories Widget -->
       
        <div class="card mb-4">
          <h5 class="card-header">Filtros</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                
                <p>Palavra-chave:</p>
              <div class="input-group">
              <input type="text" class="form-control" >
              </div>

            <br />

            <p>Área:<br />
              <p>
                <input type="radio" name="" value=""> Opção 1<br />
                <input type="radio" name="" value=""> Opção 2<br />
                <input type="radio" name="" value=""> Opção 3<br />
              </p>

              <br />

              <p>Público:</p>
            
              <p>
                <input type="radio" name=""> Opção 1<br />
                <input type="radio" name=""> Opção 2<br />
                <input type="radio" name=""> Opção 3<br />
              </p>

                <br />
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Filtrar</button>
              </span>

              </div>  
            </div>
          </div>
        </div>


      </div>

    </div>
    <!-- /.row -->

   @endsection
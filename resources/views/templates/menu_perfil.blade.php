<div class="col-lg-3 mb-4">
    <div class="list-group">
      <a href="/perfil" class="list-group-item">Início</a>
      <a href="/perfil_inscricoes" class="list-group-item">Inscrições</a>

      @if(Auth::user()->is_coordenador == 1)
      <a href="/perfil_cursos" class="list-group-item">Cursos</a>
      <a href="/perfil_areas" class="list-group-item">Áreas</a>
      <a href="/perfil_publicos" class="list-group-item">Públicos</a>
      @endif

    </div>
</div>
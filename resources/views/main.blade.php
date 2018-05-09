<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.js" integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <title>Veterinario</title>
  </head>
  <body role="document">
    <div class="row">
        <div class="col-sm-3">
            <label>Selecionar Cursos: </label>
            <a href="/animal">
              <input type="button" class="btn btn-success btn-block" value="GET">
            </a>
        </div>
        <div class="col-sm-3">
            <label>Inserir Curso: </label>
            <a href="/insertAnimal">
              <input type="button" class="btn btn-primary btn-block" value="POST">
            </a>
        </div>
        <div class="col-sm-3">
            <label>Alterar Curso: </label>
            <a href="/editAnimal">
              <input type="button" class="btn btn-warning btn-block" value="PUT">
            </a>
        </div>
        <div class="col-sm-3">
            <label>Deletar Curso: </label>
            <a href="/deleteAnimal">
              <input type="button" class="btn btn-danger btn-block" value="DELETE">
            </a>
        </div>
    </div>
  </body>
</html>

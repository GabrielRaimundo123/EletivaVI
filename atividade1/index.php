<?php
 include("Atividade.php")
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>consulta</title>
  </head>
  <body>
    <h1>consulta</h1>
    <div class="col-md-6">
    <form method="post" class="row mt-5">
        <label> nome </label>
        <input type="text" name="valor1" class="form-control" />
        <label> cpf </label>
        <input type="text" name="valor1" class="form-control"/>
        <label> peso </label>
        <input type="text" name="valor1" class="form-control"/>
        <label> altura </label>
        <input type="text" name="valor1" class="form-control"/>
        <div class="row mt-5">
          <div class="col">
              <button type="submit" class="btn btn-blue">
                Enviar
              </button>
        <div class="row mt-5">
          <div class="col">
              <button type="clear" class="btn btn-red">
                limpar
              </button>
          </div>
    </div>
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

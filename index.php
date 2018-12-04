<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hello, world!</title>
  </head>
  <body>
<div class="container">
  <h1>Calculadora</h1>
  <div class="row">
    <form method="get" action="atividadeGet.ph">
      <div class="form-group">
        <label for="tipo" class="for-control"></label>
        <select>
          <option value="">.::Escolha a opção</option>
          <option value="soma">Soma</option>
          <option value="subtração">Subtração</option>
          <option value="mutiplicação">Multiplicação</option>
          <option value="divisão">Divisão</option>
        </select>
      </div>
      <div class="form-group">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" class="form-control">
      </div>
      <div class="form-group">
        <label for="num2">Numero 2:</label>
        <input type="text" name="num2" class="form-control">
      </div>
      <input type="submit" value"Calcular" class="btn btn-primary">
    </form>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
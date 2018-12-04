<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulário de Login</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="contaner">
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <div class="row">
    <div class="col"></div>
    <div class="col">

      <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
          <div class="text-center">
            <img src="img/login.png" width="130px" class="img-fluid">
          </div>
          <h3 class="text-center">Área restrita</h3>
          <form method="post" action="bemvindo.php">
            <div class="card-body alert alert-danger text-center"> 
              A senha esta errada!.
            </div>
            <div class="form-group">
              <label>Login:</label>
              <input type="text" name="login" class="form-control" placeholder="Digite seu usuário" required>
            </div>
            <div class="form-group">
              <label>Senha:</label>
              <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn btn-primary float-right">Logar</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col"></div>
  </div>

</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
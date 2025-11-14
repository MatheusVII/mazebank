<?php
  if(isset($_GET['erro'])){
    switch($_GET['erro']){
      case 1:
        $erro = "<p>Usuario ou senha inválidos</p>";
        break;
    }
  }
  else if(isset($_GET['ok'])){
    $ok = "Deu certo";
  }
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/assets/css/login.css">
    <link rel="stylesheet" href="../../../public/assets/css/index.css">
  </head>
  <body>
    <div class="container-sm login">
      <div class="logo">
        <img src="../../../public/assets/img/maze-bank.png" alt="">
      </div>
      <form action="../../controllers/UsuarioController.php" method="post">
        <div class="input mb-3" id="usuario">
          <label for="nome" class="form-label">Nome de usuario</label>
          <input type="text" name="nome" id="input-usuario" class="form-control" placeholder="Usuario" required>
        </div>
        <div class="input mb-3" id="senha">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" name="senha" id="input-senha" class="form-control" placeholder="Senha" oninput="verificarSenha()">
          <input type="hidden" name="action" value="login">
          <div class="alerta">
            <?php
              if(isset($erro)){
                echo $erro;
              }
            ?>
          </div>
        </div>
        <div class="btns">
          <button type="button" class="btn-login">Entrar</button>
          <p>Não tem uma conta? <a href="cadastro.php">Crie uma</a></p>
        </div>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="../../../public/assets/js/login.js"></script>
  </body>
</html>
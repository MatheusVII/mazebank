<?php
    include_once '../includes/nav.php';
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banco - Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/assets/css/cadastro.css">
  </head>
  <body>
    <div class="container-sm cadastro">
        <div class="logo">
            <img src="../../../public/assets/img/maze-bank.png" alt="">
        </div>
        <form action="../../controllers/UsuarioController.php" method="post">
            <div class="input mb-3" id="usuario">
                <label for="nome" class="form-label">Nome de usuario</label>
                <input type="text" name="nome" id="" class="form-control" placeholder="Usuario" required>
            </div>
            <div class="input mb-3" id="senha">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" name="senha" id="input-senha" class="form-control" placeholder="Senha" required oninput="verificarSenha()">
            </div>
            <div class="input mb-3" id="confirmar-senha">
                <label for="confirmar-senha" class="form-label">Confirmar senha</label>
                <input type="password" name="confirmar-senha" class="form-control" id="input-confirmar-senha" placeholder="Confirmar senha" oninput="verificarSenha()">
                <div class="alerta">

                </div>
            </div>
            <div class="btns">
                <button type="button" class="btn-cadastro btn btn">Cadastro</button>
                <p>Ja tem uma conta? <a href="login.php">Faça login</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="../../../public/assets/js/cadastro.js"></script>
  </body>
</html>
<?php
    require_once '../models/Usuario.php';
    require_once '../../config/conexao.php';

    class UsuarioController{
        private $usuario;

        public function __construct($pdo){
            $this->usuario = new Usuario($pdo);
        }

        public function cadastrar(){
            if($_SERVER['REQUEST_METHOD'] === 'POST'){
                $nome = trim($_POST['nome']);
                $senha = password_hash(trim($_POST['senha']), PASSWORD_DEFAULT);

                if($this->usuario->verificarUsuario($nome)){
                    header("Location: ../views/pages/cadastro.php?erro=1");
                    echo "<script>alert('Usuario ja existe')</script>";
                    die;
                }
                
                $ok = $this->usuario->cadastrar($nome,$senha);

                if($ok){
                    header("Location: ../views/pages/cadastro.php");
                    echo "<script>alert('Deu certo')</script>";
                }
                else{
                    header("Location: ../views/pages/cadastro.php");
                    echo "<script>alert('Algo deu errado')</script>";                    
                }
            }
        }

        public function login(){
            if($_SERVER['REQUEST_METHOD'] === "POST"){
                $nome = trim($_POST['nome']);
                $senha = trim($_POST['senha']);

                $usuario = $this->usuario->verificarUsuario($nome);
                if($usuario && password_verify($senha, $usuario['senha'])){
                    header("Location: ../views/pages/");
                }
                else{
                    header("Location: ../views/pages/login.php?erro=1");
                }
            }
        }
    }
    $ativar = new UsuarioController($pdo);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $action = $_POST['action'];

        if($action === "login"){
            $ativar->login();
        }
        else if($action = "cadastro"){
            $ativar->cadastrar();
        }
    }
?>
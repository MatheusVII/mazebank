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
                    header("Location: ../views/pages/cadastro.php");
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
    }
    $ativar = new UsuarioController($pdo);
    $ativar->cadastrar();
?>
<?php

    class Usuario{
        private $pdo;

        public function __construct($pdo){
            $this->pdo = $pdo;
        }

        public function verificarUsuario($user){
            $sql = "SELECT * FROM usuarios WHERE nome = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([$user]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        public function cadastrar($nome, $senha){
            $sql = "INSERT INTO usuarios (nome, senha) VALUES (?,?)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([$nome, $senha]);
        }
    }
?>
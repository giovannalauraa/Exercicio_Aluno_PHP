<?php
    require_once "Conexao.class.php";

    class Aluno{
        private $matricula;
        private $nome;
        private $dataNascimento;

        public function mostrarDados(){
            echo "<br />";
            echo "A matrícula do ". __CLASS__ ." é ". $this->matricula;
            echo "<br />";
            echo "O nome do ". __CLASS__ ." é ". $this->nome;
            echo "<br />";
            echo "A data de nascimento do  ".__CLASS__." é ". $this->dataNascimento;
        }

        public function __construct($matricula="", $nome="", $dataNascimento=""){
            $this->matricula = $matricula;
            $this->nome = $nome;
            $this->dataNascimento = $dataNascimento;
            echo "<br />classe Criada...";
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }
        
        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function inserirAluno(){
            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();

            $stmt = $conexaoBanco->prepare("INSERT INTO aluno VALUES (:matricula, :nome, :dataNascimento)");
            $stmt->bindParam(':matricula', $this->matricula);
            $stmt->bindParam(':nome', $this->nome);
            $stmt->bindParam(':dataNascimento', $this->dataNascimento);

            $resultado = $stmt->execute();

            if(!$resultado){
                echo "Erro, não foi possível inserir o aluno(a).";
                exit;
            }
            echo "Aluno(a) inserido(a) com sucesso!";
            
        }

        public function buscarTodosAlunos(){
            $cn = new Conexao();
            $conexaoBanco = $cn->getInstance();

            $stmt = $conexaoBanco->prepare("SELECT * FROM aluno");

            $stmt->execute();

            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }

    }
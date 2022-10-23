<?php
    require_once("Aluno.class.php");

    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $dataNascimento = $_POST["dataNascimento"];

    $objetoAluno = new Aluno($matricula, $nome, $dataNascimento);
    $objetoAluno->mostrarDados();
    $objetoAluno->inserirAluno();
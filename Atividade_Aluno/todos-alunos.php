<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todos Alunos</title>
</head>
<body>
    <?php
        require_once "Aluno.class.php";
        $objAluno = new Aluno();
        $alunos = $objAluno->buscarTodosAlunos();

        foreach($alunos AS $al){
            echo $al["matricula"]."<br>";
            echo $al["nome"]."<br>";
            echo $al["dataNascimento"]."<br>";
            echo "<br>";
        }
    ?>
    
</body>
</html>
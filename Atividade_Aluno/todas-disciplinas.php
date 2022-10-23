<!DOCTYPE html>
<html lang="en">
<head>
    <title>Todas Disciplinas</title>
</head>
<body>
    <?php
        require_once "Disciplina.class.php";
        $objDisciplina = new Disciplina();
        $disciplinas = $objDisciplina->buscarTodasDisciplinas();

        foreach($disciplinas AS $dc){
            echo $dc["nome"]."<br>";
            echo $dc["cargaHoraria"]."<br>";
            echo $dc["ementa"]."<br>";
            echo "<br>";
        }
    ?>
    
</body>
</html>
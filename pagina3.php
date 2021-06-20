<?php
    session_start();
    $nome = $_SESSION['nome'];
    $semestre = $_SESSION['semestre'];
    $materias = $_POST ['materias'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <title>Encruzilhada</title>
</head>
<body>
    <?php
        $encruzilhada = sizeof($materias);
    ?>
    <p class="flow-text">
        <?php echo $nome ?>, você tem que ir <?php echo $encruzilhada ?>  vez(es) na encruzilhada, para passar na(s) seguinte(s) materia(s): 
    </p>
    <p class="flow-text"> 
        <?php foreach ($materias as $valor) { echo $valor."<br>"; } ?>
    </p>
    <p>
        <form action="index.php" method="post">
            <button class="btn waves-effect waves-light" type="submit" name="rmagia">Refazer Magia</button>
        </form>
    </p>
</body>
</html>
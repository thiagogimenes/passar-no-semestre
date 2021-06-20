<?php
    session_start();
    $nome = $_POST['nome'];
    $semestre = $_POST['semestre'];
    $_SESSION ['nome'] = $nome;
    $_SESSION ['semestre'] = $semestre;
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
    <title>Materias</title>
</head>
<body>
    <p class="flow-text">No <?php echo $semestre ?>° Semestre, escolha as disciplinas que você quer passar</p>
    <form action="pagina3.php" method="POST">
    <?php
        switch($semestre) {
            case'1':
                $aulas['1'] = "DDNS";
                $aulas['2'] = "Lógica";
                $aulas['3'] = "Inglês";
                $aulas['4'] = "LTT";
                $aulas['5'] = "Photoshop";
            break;
            case'2':
                $aulas['1'] = "DS1";
                $aulas['2'] = "DDWS II";
                $aulas['3'] = "Corel";
                $aulas['4'] = "Banco I";
                $aulas['5'] = "OSA 2";
            break;
            case'3':
                $aulas['1'] = "TCC";
                $aulas['2'] = "DS2";
                $aulas['3'] = "ÉTICA";
                $aulas['4'] = "Banco II";
                $aulas['5'] = "Redes";
            break;
            default:
                echo "Erro de memória";
        }
    ?>
    <p>
        <label>
            <input type="checkbox" name="materias[]" value="<?php echo $aulas['1']?>" />
            <span><?php echo $aulas['1'] ?></span>
        </label>
    </p>
    <p>
        <label>
            <input type="checkbox" name="materias[]" value="<?php echo $aulas['2']?>" /> 
            <span><?php echo $aulas['2'] ?></span>
        </label>
    </p>
    <p>
        <label>
            <input type="checkbox" name="materias[]" value="<?php echo $aulas['3']?>" />
            <span><?php echo $aulas['3'] ?></span>
        </label>
    </p>
    <p>
        <label>
            <input type="checkbox" name="materias[]" value="<?php echo $aulas['4']?>" />
            <span><?php echo $aulas['4'] ?></span>
        </label>
    </p>
    <p>
        <label>
            <input type="checkbox" name="materias[]" value="<?php echo $aulas['5']?>" />
            <span><?php echo $aulas['5'] ?></span>
        </label> 
    </p>
        <button class="btn waves-effect waves-light" type="submit" name="fmagia">Fazer Magia</button>
    </form>
    <br>
    <form action="index.php" method="POST">
        <button class="btn waves-effect waves-light" type="submit" name="rmagia">Refazer Magia</button>
    </form>
</body>
</html>
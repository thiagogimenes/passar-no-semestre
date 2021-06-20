<?php
    session_start();
    session_destroy();
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
    <title>Index</title>
</head>

<body>
    <form action="pagina2.php" method="post">
        <p class="flow-text">Insira seu Nome: <input type="text" name="nome" /></p>
        <p class="flow-text">Informe o semestre que esta atuando:</p>        
        <p>
            <label>
                <input class="with-gap" type="radio" name="semestre" value="1" checked />
                <span>1° Semestre</span>
            </label>
        </p>
        <p>
            <label>
                <input class="with-gap" type="radio" name="semestre" value="2" />
                <span>2° Semestre</span>
            </label>
        </p>
        <p>
            <label>
                <input class="with-gap" type="radio" name="semestre" value="3" />
                <span>3° Semestre</span>
            </label>
        </p>
        <p>
            <button class="btn waves-effect waves-light" type="submit" name="enviar">Enviar</button>
        </p>
    </form>
</body>

</html>
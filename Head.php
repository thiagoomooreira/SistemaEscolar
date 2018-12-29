<?php
include("Url.php");
?>
<html>
<head>
    <!-- Materialize -->
    <link rel="stylesheet" href="<?php echo("$Url")?>/SistemaEscolar/materialize/css/materialize.min.css">

    <link href="<?php echo("$Url")?>/SistemaEscolar/Arquivos/icon/icon.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo("$Url")?>/SistemaEscolar/Arquivos/css/estilo.css">

    <link rel="icon" href="<?php echo("$Url")?>/SistemaEscolar/Arquivos/icon/book.ico" type="image/x-icon">

    <title>Universidade</title>
</head>
<body>
<nav>
    <div class="nav-wrapper  grey darken-3">
        <a href="<?php echo("$Url")?>/SistemaEscolar/Home.php" class="brand-logo">Universidade</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo("$Url")?>/SistemaEscolar/Aluno/Aluno.php">Alunos</a></li>
            <li><a href="<?php echo("$Url")?>/SistemaEscolar/Professor/Professor.php">Professor</a></li>
            <li><a href="<?php echo("$Url")?>/SistemaEscolar/Sala/Sala.php">Salas</a></li>
        </ul>
    </div>
</nav>
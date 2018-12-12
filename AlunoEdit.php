<?php
include ("php/edit.php");

?>

<html>
<head>
    <!-- Materialize -->
    <link rel="stylesheet" href="materialize/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilo.css">



    <title>Escola</title>
</head>
<body>
<nav>
    <div class="nav-wrapper  grey darken-3">
        <a href="#" class="brand-logo">Logo</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Alunos</a></li>
            <li><a href="#">Professor</a></li>
            <li><a href="#">Salas</a></li>
        </ul>
    </div>
</nav>

<div class="row box grey lighten-3">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s10">
                <i class="material-icons prefix">person</i>
                <input  value="<?php echo($dado['nome']);?>" name="nome" id="icon_prefix" type="text" class="validate">
                <label>Nome Completo</label>
            </div>
        </div>
        <div class="input-field col s10 row">
            <i class="material-icons prefix">school</i>
            <select name="serie" value="">
                <option value="" disabled selected><?php echo($dado['serie']); ?></option>
                <option value="1° Semestre">1° Semestre</option>
                <option value="2° Semestre">2° Semestre</option>
                <option value="3° Semestre">3° Semestre</option>
            </select>
        </div>
        <div class="row">
            <center>
                <button class="green btn waves-effect waves-light" type="submit" name="action">Adicionar</button>
                <a href="Aluno.php" class="red darken-1 waves-effect waves-light btn">Cancelar</a>
            </center>
        </div>
    </form>
</div>


<!-- Jquery e Script -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/script.js"></script>

<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>
</html>
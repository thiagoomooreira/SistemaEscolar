<?php

if($_POST){
    $page = "professor";
    include("../php/create.php");
    if($create){
        echo "<script> location.href='Professor.php';</script>";
    }

}
?>

<html>
<head>
    <!-- Materialize -->
    <link rel="stylesheet" href="../materialize/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/estilo.css">



    <title>Escola</title>
</head>
<body>
<?php include("../navbar.php"); ?>

<div class="row box grey lighten-3">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s10">
                <i class="material-icons prefix">person</i>
                <input  name="nome" id="icon_prefix" type="text" class="validate">
                <label>Nome Completo</label>
            </div>
        </div>
        <div class="input-field col s10 row">
            <i class="material-icons prefix">school</i>
            <select name="turma">
                <option value="" disabled selected>Turma</option>
                <option value="Turma A">Turma A</option>
                <option value="Turma B">Turma B</option>
                <option value="Turma C">Turma C</option>
            </select>
        </div>
        <div class="row col s10">
            <center>
                <button class="green btn waves-effect waves-light" type="submit" name="action">Adicionar</button>
                <a href="Professor.php" class="red darken-1 waves-effect waves-light btn">Cancelar</a>
            </center>
        </div>
    </form>
</div>


<!-- Jquery e Script -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../js/script.js"></script>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>
</html>
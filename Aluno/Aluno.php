<?php
$page = "aluno";
include("../php/read.php");
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


<div class="div-lista ">
    <div class="row">
        <legend><a class="amber accent-3 s12 m6 btn-floating btn-large waves-effect waves-light" href="AlunoCreate.php"><i class="material-icons">add</i></a></legend>

    </div>
    <div class="row transparent">
        <table class="table-lista highlight">
            <thead>
                <tr>
                    <th class="s12 m4">NOME</th>
                    <th class="s12 m4">SÉRIE</th>
                    <th class="s12 m4">EDITAR</th>
                    <th class="s12 m4">DELETAR</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($dado = $read->fetch_array()){?>
                <tr>
                    <td><?php echo $dado["nome"];?></td>
                    <td><?php  echo $dado["serie"];?></td>
                    <td>
                        <a class="waves-effect modal-trigger btn grey darken-3" href="AlunoEdit.php?id=<?= $dado['id']?>"><i class="material-icons prefix">create</i></a>
                    </td>
                    <td>
                        <a class="waves-effect modal-trigger btn red darken-2" href="../php/delete.php?id=<?= $dado['id']?>&page=aluno"><i class="material-icons prefix">delete</i></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>


<!-- Jquery e Script -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="../materialize/js/materialize.min.js"></script>
<script src="../js/script.js"></script>

</body>

</html>
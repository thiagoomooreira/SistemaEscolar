<?php
include ("php/read.php");
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


<div class="div-lista ">
    <div class="row">
        <legend><a class="amber accent-3 s12 m6 btn-floating btn-large waves-effect waves-light modal-trigger" href="#ModalAdicionar"><i class="material-icons">add</i></a></legend>

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
                        <a class="waves-effect modal-trigger btn grey darken-3" href="#ModalEditar"><i class="material-icons prefix">create</i></a>
                    </td>
                    <td>
                        <a class="waves-effect modal-trigger btn red darken-2" href="#ModalDelete"><i class="material-icons prefix">delete</i></a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal Adionar -->
<div id="ModalAdicionar" class="modal">
    <div class="modal-content">
        <h4>Aluno</h4>
        <hr>
        <form class="col s12" action="php/create.php" method="post">
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">person</i>
                    <input  name="nome" id="icon_prefix" type="text" class="validate">
                    <label>Nome Completo</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">school</i>
                    <input name="serie" id="icon_prefix" type="text" class="validate">
                    <label>Série</label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="green btn waves-effect waves-light" type="submit" name="action">Adicionar</button>
                <button class="red darken-1 btn waves-effect waves-light modal-close" type="button" name="action">Calcelar</button>
            </div>
        </form>
    </div>

</div>

<!-- Modal Editar -->
<div id="ModalEditar" class="modal">
    <div class="modal-content">
        <h4>Aluno</h4>
        <hr>
        <form class="col s12" >
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">person</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Nome Completo</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">school</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Série</label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="green btn waves-effect waves-light" type="submit" name="action">Salvar</button>
                <button class="red darken-1 btn waves-effect waves-light modal-close" type="button" name="action">Calcelar</button>
            </div>
        </form>
    </div>

</div>

<!-- Modal Delete -->
<div id="ModalDelete" class="modal">
    <div class="modal-content">
        <h5>Deletar Aluno?</h5>
        <hr>
        <form class="col s12">
            <div class="modal-footer">
                <button class="amber accent-3 btn waves-effect waves-light" type="submit" name="action">Confirmar</button>
                <button class="red darken-1 btn waves-effect waves-light modal-close" type="button" name="action">Calcelar</button>
            </div>
        </form>
    </div>

</div>

<!-- Jquery e Script -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/script.js"></script>

<script>
    $(document).ready(function () {
        $('.modal').modal();
    });
</script>
</body>

</html>
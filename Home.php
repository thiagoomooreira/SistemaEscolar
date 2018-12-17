<?php include("Head.php"); ?>

<div class="row">
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Alunos</span>
            </div>
            <div class="card-action">
                <a href="<?php echo("$Url")?>/SistemaEscolar/Aluno/Aluno.php">Acessar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Professor</span>
            </div>
            <div class="card-action">
                <a href="<?php echo("$Url")?>/SistemaEscolar/Professor/Professor.php">Acessar</a>
            </div>
        </div>
    </div>
    <div class="col s12 m4">
        <div class="card blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Salas</span>
            </div>
            <div class="card-action">
                <a href="<?php echo("$Url")?>/SistemaEscolar/Sala/Sala.php">Acessar</a>
            </div>
        </div>
    </div>
</div>

<?php include ("Footer.php");?>
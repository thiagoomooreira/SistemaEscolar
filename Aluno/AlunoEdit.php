<?php
$page = "aluno";
include("../php/edit.php");

$page = "sala" ;
include("../php/read.php");

if($queryValida){
    echo ("<script>location.href='Aluno.php'</script>");
}



?>

<?php include("../Head.php"); ?>

<div class="row box grey lighten-3">
    <h4 class="center s12">Aluno</h4>
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
            <select name="turma" value="">
                <optgroup label="Atual">
                    <option value="<?php echo $dado['idSala'];?>"><?php echo $dado['nomeSala'];?></option>
                </optgroup>
                <optgroup label="Todos">
                    <?php while($salas = $read->fetch_array()){?>
                        <option value="<?php echo $salas['idSala'];?>"><?php echo $salas['nomeSala'];?></option>
                    <?php }?>
                </optgroup>
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


<?php include ("../Footer.php");?>
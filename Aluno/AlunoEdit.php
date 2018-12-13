<?php
$page = "aluno";
include("../php/edit.php");

if($queryValida){
    echo ("<script>location.href='Aluno.php'</script>");
}

?>

<?php include("../Head.php"); ?>

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
                <optgroup label="Atual">
                    <option value="<?php echo($dado['serie']); ?>"><?php if($dado['serie']!=null){echo($dado['serie']);}else{echo("Selecione");}?></option>
                </optgroup>
                <optgroup label="Todos">
                    <option value="1° Semestre">1° Semestre</option>
                    <option value="2° Semestre">2° Semestre</option>
                    <option value="3° Semestre">3° Semestre</option>
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
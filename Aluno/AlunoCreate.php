<?php

if($_POST){
    $page = "aluno";
    include("../php/create.php");
    if($create){
        echo "<script> location.href='Aluno.php';</script>";
    }

}else{
    $page="sala";
    include("../php/read.php");
}
?>

<?php include("../Head.php"); ?>

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
            <select name="turma" value="">
                <optgroup label="Atual">
                    <option value="">Selecione</option>
                </optgroup>
                <optgroup label="Todos">
                    <?php while($dado = $read->fetch_array()){?>
                        <option value="<?php echo $dado['idSala'];?>"><?php echo $dado['nomeSala'];?></option>
                    <?php }?>
                </optgroup>
            </select>
        </div>
        <div class="row col s10">
            <center>
                <button class="green btn waves-effect waves-light" type="submit" name="action">Adicionar</button>
                <a href="Aluno.php" class="red darken-1 waves-effect waves-light btn">Cancelar</a>
            </center>
        </div>
    </form>
</div>


<?php include ("../Footer.php");?>
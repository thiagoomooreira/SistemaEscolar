<?php
$page = "sala";
include("../php/edit.php");

if($queryValida){
    echo ("<script>location.href='Sala.php'</script>");
}

?>

<?php include("../Head.php"); ?>

    <div class="row box box-sala grey lighten-3">
        <h4 class="center s4">Sala</h4>
        <form class="col s12" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <input  value="<?=$dado['nomeSala']?>" name="nome" id="icon_prefix" type="text" class="validate">
                    <label>Nome da Sala</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <i class="material-icons prefix">people</i>
                    <input value="<?=$dado['capacidadeAtual']?>" name="capacidadeAtual" id="icon_prefix" type="text" class="validate">
                    <label>Quantidade Atual</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">dehaze</i>
                    <input value="<?=$dado['capacidadeTotal']?>" name="capacidadeTotal" id="icon_prefix" type="text" class="validate">
                    <label>Capacidade Total</label>
                </div>
            </div>


            <div class="row col s10 center">
                <button class="green btn waves-effect waves-light" type="submit" name="action">Adicionar</button>
                <a href="sala.php" class="red darken-1 waves-effect waves-light btn">Cancelar</a>
            </div>
        </form>
    </div>


<?php include ("../Footer.php");?>
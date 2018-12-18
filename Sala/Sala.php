<?php
$page = "sala";
include("../php/read.php");
?>


<?php include("../Head.php"); ?>


    <div class="div-lista ">
        <div class="row">
            <h3 class="center s4">Salas</h3>
            <legend><a class="amber accent-3 s12 m6 btn-floating btn-large waves-effect waves-light" href="SalaCreate.php"><i class="material-icons">add</i></a></legend>

        </div>
        <div class="row transparent">
            <table class="table-lista highlight">
                <thead>
                <tr>
                    <th class="s12 m4">NOME</th>
                    <th class="s12 m4">CAPACIDADE</th>
                    <th class="s12 m4">EDITAR</th>
                    <th class="s12 m4">DELETAR</th>
                </tr>
                </thead>

                <tbody>
                <?php while ($dado = $read->fetch_array()){?>
                    <tr>
                        <td><?php echo $dado["nomeSala"];?></td>
                        <td><?php  echo ("<p>$dado[capacidadeAtual] / $dado[capacidadeTotal] </p>");?></td>
                        <td>
                            <a class="waves-effect modal-trigger btn grey darken-3" href="SalaEdit.php?id=<?= $dado['idSala']?>"><i class="material-icons prefix">create</i></a>
                        </td>
                        <td>
                            <a class="waves-effect modal-trigger btn red darken-2" href="../php/delete.php?id=<?= $dado['idSala']?>&page=sala&capacidadeAtual=<?=$dado['capacidadeAtual']?>"><i class="material-icons prefix">delete</i></a>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>


<?php include ("../Footer.php");?>
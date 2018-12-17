<?php
$page = "aluno";
include("../php/read.php");
?>

<?php include("../Head.php"); ?>


<div class="div-lista ">
    <div class="row">
        <legend><a class="amber accent-3 s12 m6 btn-floating btn-large waves-effect waves-light" href="AlunoCreate.php"><i class="material-icons">add</i></a></legend>

    </div>
    <div class="row transparent">
        <table class="table-lista highlight">
            <thead>
                <tr>
                    <th class="s12 m4">NOME</th>
                    <th class="s12 m4">TURMA</th>
                    <th class="s12 m4">EDITAR</th>
                    <th class="s12 m4">DELETAR</th>
                </tr>
            </thead>

            <tbody>
                <?php while ($dado = $read->fetch_array()){?>
                <tr>
                    <td><?php echo $dado["nome"];?></td>
                    <td><?php  echo $dado["nomeSala"];?></td>
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


<?php include ("../Footer.php");?>
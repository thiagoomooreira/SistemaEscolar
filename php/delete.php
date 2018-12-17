<?php
include ("conect/conect.php");

$id=$_GET['id'];
$page=$_GET['page'];


if($page == "professor"){
    $queryDelete = $conn->query("DELETE FROM Professor WHERE id='$id'");
    echo("<script>location.href='../Professor/Professor.php';</script>");
}elseif ($page == "aluno"){


    //DIMINUIR QUANTIDADE NA SALA

    $aluno = ($conn->query("SELECT aluno.turmaAluno,sala.capacidadeAtual,sala.idSala FROM aluno INNER JOIN sala on aluno.turmaAluno = sala.idSala WHERE id = '$id'")->fetch_array());
    $diminuirCapacidade = $aluno['capacidadeAtual'];
    $diminuirCapacidade --;
    $update = $conn->query("UPDATE sala SET capacidadeAtual = '$diminuirCapacidade' WHERE idSala = '$aluno[idSala]'")or die($mysqli->error);


    //DELETANDO DADOS DO BANCO
    $queryDelete = $conn->query("DELETE FROM Aluno WHERE id='$id'");
    echo("<script>location.href='../Aluno/Aluno.php';</script>");
}
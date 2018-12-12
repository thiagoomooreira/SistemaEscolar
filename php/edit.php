<?php

include("conect/conect.php");

$id = $_GET['id'];
if($page == "professor"){
    $queryRead= $conn->query("SELECT * FROM Professor WHERE id='$id'")or die($mysqli->error);
}elseif ($page == "aluno"){
    $queryRead= $conn->query("SELECT * FROM Aluno WHERE id='$id'")or die($mysqli->error);
}
$dado = $queryRead->fetch_array();

$queryValida = false;
if($_POST){
    if($page == "professor"){
        $nome = $_POST['nome'];
        $turma = $_POST['turma'];
        $query = "UPDATE Professor SET nome='$nome', turma='$turma' WHERE id='$id'";
    }elseif ($page == "aluno"){
        $nome = $_POST['nome'];
        $serie = $_POST['serie'];
        $query = "UPDATE Aluno SET nome='$nome', serie='$serie' WHERE id='$id'";
    }

    $queryUpdate = $conn->query($query);
    if($queryUpdate){
        $queryValida=true;
    }
}
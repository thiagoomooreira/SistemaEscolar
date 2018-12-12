<?php

include("conect/conect.php");

$id = $_GET['id'];
$queryRead= $conn->query("SELECT * FROM Aluno WHERE id='$id'")or die($mysqli->error);
$dado = $queryRead->fetch_array();

if($_POST){
    $nome = $_POST['nome'];
    $serie = $_POST['serie'];

    $queryUpdate = $conn->query("UPDATE Aluno SET nome='$nome', serie='$serie' WHERE id='$id'");
    echo ("<script>location.href='Aluno.php'</script>");
}
<?php
include ("conect/conect.php");
if($_POST){
    $nome = $_POST["nome"];
    $serie = $_POST["serie"];

    $query = "INSERT INTO aluno(nome,serie) VALUES ('$nome','$serie')";
    $create = $conn->query($query) or die($mysqli->error);
    if($create){
        echo "<script> location.href='Aluno.php';</script>";
    }

}




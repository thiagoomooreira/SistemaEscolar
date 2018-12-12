<?php
include ("conect/conect.php");

$id=$_GET['id'];
$queryDelete = $conn->query("DELETE FROM Aluno WHERE id='$id'");

if($page == "professor"){
    echo("<script>location.href='../Professor/Professor.php';</script>");
}elseif ($page == "aluno"){
    echo("<script>location.href='../Aluno/Aluno.php';</script>");
}
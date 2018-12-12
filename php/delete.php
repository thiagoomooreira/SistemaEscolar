<?php
include ("conect/conect.php");

$id=$_GET['id'];
$page=$_GET['page'];


if($page == "professor"){
    $queryDelete = $conn->query("DELETE FROM Professor WHERE id='$id'");
    echo("<script>location.href='../Professor/Professor.php';</script>");
}elseif ($page == "aluno"){
    $queryDelete = $conn->query("DELETE FROM Aluno WHERE id='$id'");
    echo("<script>location.href='../Aluno/Aluno.php';</script>");
}
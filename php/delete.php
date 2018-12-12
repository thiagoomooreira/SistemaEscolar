<?php
include ("conect/conect.php");

$id=$_GET['id'];
$queryDelete = $conn->query("DELETE FROM Aluno WHERE id='$id'");

echo("<script>location.href='../Aluno.php';</script>");
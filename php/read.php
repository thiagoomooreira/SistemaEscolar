<?php
include ("conect/conect.php");

if($page == "professor"){
    $consulta = "SELECT * FROM Professor";

}elseif ($page == "aluno"){
    $consulta = "SELECT * FROM Aluno";
}
$read = $conn->query($consulta) or die ($mysqli->error);

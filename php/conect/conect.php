<?php


$conn = new mysqli('localhost','root','','SistemaEscolar');
if ($conn->connect_error) {
    die("Falha ao estabelecer conexão");
}
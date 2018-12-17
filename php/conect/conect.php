<?php


$conn = new mysqli('localhost','root','','sistemaEscolar');
if ($conn->connect_error) {
    die("Falha ao estabelecer conexão");
}
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "cafebistro";

// criaçao da conexão
$coon = new mysqli($servername, $username, $password, $databasename);
// verificando a conexao
if (!$coon){
    die("conexão falhou".mysqli_conect_error());    
}else{
    echo "consegui conectar ao cafebistro!";
}
// localhost\CafeBistro\conexao.php   no navegador
$sql = "select * from cafe";
$result = $conn->querry($sql);

if
?>

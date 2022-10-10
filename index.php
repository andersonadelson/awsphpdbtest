<html>
<head><title>Seja bem-vindo ao meu site de teste php com MySQL</title></head>
<body>
<h1>Seja bem-vindo ao meu site de teste PHP com MySQL</h1>

<?php

$dbserver = "endpoint";
$dbuser = "usuario";
$dbpassword = "DBPASSWORD";

// colocar usuário e senha diretamente em um arquivo final não é uma prática correta.
// Em um blog de produção, não armazenaríamos a senha do MySQL
// na raiz do documento. Em vez disso, nós o armazenaríamos em um
// arquivo de configuração em outro lugar na instância de VM do servidor web.

$conn = new mysqli($dbserver, $dbuser, $dbpassword);

if (mysqli_connect_error()) {
        echo ("Conexão falhou: " . mysqli_connect_error());
} else {
        echo ("Conexão executada com sucesso.");
}
?>

</body></html>
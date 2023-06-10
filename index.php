<?php
// banck configurations
$host = "localhost"; // server
$usuario = "Kelvin"; // user name
$senha = "12345678"; // password bank
$banco = "users"; // name bank

// connection for bank
$conexao = new mysqli($host, $usuario, $senha, $banco);

// Verification error
if ($conexao->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conexao->connect_error);
}

// Verification sucess
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // recover
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    // Insert data in bank
    $sql = "INSERT INTO tabela (nome, email) VALUES ('$nome', '$email')";

    if ($conexao->query($sql) === true) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir os dados: " . $conexao->error;
    }

    // closed connection bank
    $conexao->close();
}
?>

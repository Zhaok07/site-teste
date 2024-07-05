<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "teste";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recuperar valores do formulário (certifique-se de que os nomes dos campos correspondam)
$um = mysqli_real_escape_string($conn, $_POST['um']);
$dois = mysqli_real_escape_string($conn, $_POST['dois']);
$tres = mysqli_real_escape_string($conn, $_POST['tres']);
$quatro = mysqli_real_escape_string($conn, $_POST['quatro']);
$cinco = mysqli_real_escape_string($conn, $_POST['cinco']);
$seis = mysqli_real_escape_string($conn, $_POST['seis']);
$sete = mysqli_real_escape_string($conn, $_POST['sete']);
$oito = mysqli_real_escape_string($conn, $_POST['oito']);
$nove = mysqli_real_escape_string($conn, $_POST['nove']);
$dez = mysqli_real_escape_string($conn, $_POST['dez']);


// Inserir dados no banco de dados
$sql = "INSERT INTO dado (pg_um, pg_dois, pg_tres, pg_quatro, pg_cinco, pg_seis, pg_sete, pg_oito, pg_nove, pg_dez)
VALUES ('$um', '$dois', '$tres', '$quatro', '$cinco', '$seis', '$sete', '$oito', '$nove', '$dez')";

if ($conn->query($sql) === TRUE) {
    echo "Respostas salvas com sucesso";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Limpar variáveis de sessão
session_unset();

$conn->close();

// Redirecionamento
header("Location: agradecimento.php");

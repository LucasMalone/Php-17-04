<?php
$dsn = "mysql:host=localhost;dbname=Exemplo";
$username = "root";
$password = "";
$pdo = new PDO($dsn, $username, $password);

$stmt = $pdo->query("SELECT * FROM login");
while ($aluno = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $aluno['usuario'] . " - " . $aluno['senha'] . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Peso Corporal</title>
</head>
<body>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $altura = $_POST["altura"];

    // Calcula o Índice de Massa Corporal (IMC)
    $imc = $peso / ($altura * $altura);

    // Exibe o resultado
    echo "<h2>Resultado</h2>";
    echo "<p>Nome: $nome</p>";
    echo "<p>Peso: $peso kg</p>";
    echo "<p>Altura: $altura m</p>";
    echo "<p>IMC: " . number_format($imc, 2) . "</p>";
}
?>

<!-- Formulário de entrada -->
<h2>Calculadora de Peso Corporal</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="peso">Peso (kg):</label>
    <input type="number" step="0.01" name="peso" required><br>

    <label for="altura">Altura (m):</label>
    <input type="number" step="0.01" name="altura" required><br>

    <button type="submit">Calcular</button>
</form>

</body>
</html>

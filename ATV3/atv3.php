<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="atv3.css">
</head>
<body>
    <main>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["sexo"]) && isset($_POST["altura"])) {
        $sexo = $_POST["sexo"];
        $altura = floatval($_POST["altura"]);

        if ($sexo == "M") {
            $pesoIdeal = (72.2 * $altura) - 58;
        } else if ($sexo == "F") {
            $pesoIdeal = (62.1 * $altura) - 44.7;
        } else {
            $pesoIdeal = null;
        }

        if ($pesoIdeal !== null) {
            echo "<h1>Seu peso ideal é: " . number_format($pesoIdeal, 2) . " kg</h1>";
        } else {
            echo "<h1>Erro: Sexo inválido.</h1>";
        }
    } else {
        echo "<h1>Erro: Todos os campos devem ser preenchidos.</h1>";
    }
}
?>


</main>
    
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Resultado do IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <?php  
    if (isset($_POST['peso']) && isset($_POST['altura'])) {
        $peso = floatval($_POST['peso']);
        $altura = floatval($_POST['altura']);
        $imc = $peso / ($altura * $altura);
        if ($imc < 18.5) {
            $categoria = "Abaixo do peso";
        } elseif ($imc >= 18.5 && $imc < 25) {
            $categoria = "Peso normal";
        } elseif ($imc >= 25 && $imc < 30) {
            $categoria = "Sobrepeso";
        } elseif ($imc >= 30 && $imc < 35) {
            $categoria = "Obesidade Grau 1";
        } elseif ($imc >= 35 && $imc < 40) {
            $categoria = "Obesidade Grau 2";
        } else {
            $categoria = "Obesidade Mórbida (Grau 3)";
        }

        echo "Seu IMC é: " . number_format($imc, 1) . "<br>";
        echo "Categoria de peso: " . $categoria;
    } else {
        echo "Por favor, preencha todos os campos.";
    }
    ?>

</body>
</html>

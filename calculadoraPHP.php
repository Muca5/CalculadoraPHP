<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h2>Calculadora em PHP</h2>
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Número 1</label>
        <input type="number" name="num1" required> <br> <br>
        <label>Número 2</label>
        <input type="number" name="num2" required> <br> <br>
        <label>Operações: </label>
        <select name="operacao">
            <option value="Soma">Soma</option>
            <option value="Subtração">Subtração</option>
            <option value="Multiplicação">Multiplicação</option>
            <option value="Divisão">Divisão</option>
        </select>
        <br> <br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];

        switch ($operacao) {
            case 'Soma':
                $resultado = $num1 + $num2;
                break;
            case 'Subtração':
                $resultado = $num1 - $num2;
                break;
            case 'Multiplicação':
                $resultado = $num1 * $num2;
                break;
            case 'Divisão':
                $resultado = $num1 / $num2;
                break;
            default:
                $resultado = "Sem resultados";
                break;
        }

        echo " <br> O resultado da operação ".$operacao." é igual a ".$resultado;
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma y resta</title>
</head>
<body>
    <h1>Eduardo Antonio Domínguez Santiago</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        
        <label for="numero1">Numero 1:</label>
        <input type="number" id="numero1" name="numero1" required>

        <label for="numero2">Numero 2:</label>
        <input type="number" id="numero2" name="numero2" required>

        <br><br>

        <input type="submit" name="operacion" value="Sumar">
        <input type="submit" name="operacion" value="Restar">
        <input type="submit" name="operacion" value="Multiplicar">
        <input type="submit" name="operacion" value="Dividir">
        
        <br>

        <?php
            if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacion'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $operacion = $_POST['operacion'];

                $resultado = 0;

                if ($operacion == "Sumar") {
                    $resultado = $numero1 + $numero2;
                } else if ($operacion == "Restar") {
                    $resultado = $numero1 - $numero2;
                } else if ($operacion == "Multiplicar") {
                    $resultado = $numero1 * $numero2;
                } else if ($operacion == "Dividir") {
                    if ($numero2 == 0) {
                        throw new Exception('No se puede dividir por cero.');
                    }
                    $resultado = $numero1 / $numero2;
                } else {
                    throw new Exception('Operación no válida.');
                }

                echo "<p>Resultado: $resultado</p>";
            }
        ?>
    </form>
</body>
</html>

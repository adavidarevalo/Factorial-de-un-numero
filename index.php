<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div>
    <div class="container">
    <h1>Factorial de un número</h1>

    <form method="post">
        <input type="text" name="numero" placeholder="Ingrese un número entero" required pattern="\d+">
        <button type="submit" name="calcular" <?php echo (isset($_POST['calcular']) && !empty($_POST['numero'])) ? '' : 'disabled'; ?>>Factorear</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['calcular'])) {
        $numero = intval($_POST['numero']);

        if ($numero >= 0) {
            $factorial = 1;
            for ($i = 2; $i <= $numero; $i++) {
                $factorial *= $i;
            }
            echo "<div id='resultado'>El factorial de $numero es: $factorial</div>";
        } else {
            echo "<div id='resultado'>Por favor, ingrese un número entero no negativo.</div>";
        }
    }
    ?>
</div>

<p class="creditos">Creado por: <b>David Arevalo</b></p>
</div>

</body>
</html>

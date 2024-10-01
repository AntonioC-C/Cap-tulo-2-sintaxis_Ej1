<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolver Ecuación de Segundo Grado</title>
</head>
<body>
    <h1>Resolver Ecuación Cuadrática</h1>
    <form method="post" action="">
        <label for="a">Valor de a:</label>
        <input type="number" step="any" name="a" required><br><br>

        <label for="b">Valor de b:</label>
        <input type="number" step="any" name="b" required><br><br>

        <label for="c">Valor de c:</label>
        <input type="number" step="any" name="c" required><br><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    function resolverEcuacionSegundoGrado($a, $b, $c) {
        // Verificar si a es diferente de cero
        if ($a == 0) {
            return FALSE; // No es una ecuación de segundo grado
        }

        // Calcular el discriminante
        $discriminante = pow($b, 2) - 4 * $a * $c;

        // Verificar si hay soluciones reales
        if ($discriminante < 0) {
            return FALSE; // No hay soluciones reales
        }

        // Calcular las soluciones
        $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
        $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

        return [$x1, $x2]; // Devolver un array con las soluciones
    }

    // Procesar el formulario
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los valores del formulario
        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $c = (float)$_POST['c'];

        // Llamar a la función
        $resultado = resolverEcuacionSegundoGrado($a, $b, $c);

        // Mostrar el resultado
        if ($resultado === FALSE) {
            echo "<h2>Resultado:</h2>";
            echo "<p>La ecuación no tiene soluciones reales.</p>";
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>Las soluciones son: x1 = {$resultado[0]}, x2 = {$resultado[1]}</p>";
        }
    }
    ?>
</body>
</html>

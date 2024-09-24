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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Obtener los valores del formulario
        $a = (float)$_POST['a'];
        $b = (float)$_POST['b'];
        $c = (float)$_POST['c'];

        function resolverEcuacionSegundoGrado($a, $b, $c) {
            // Verificar si a es diferente de cero (si es cero, no es una ecuación de segundo grado)
            if ($a == 0) {
                return "El valor de 'a' debe ser diferente de cero para ser una ecuación de segundo grado.";
            }

            // Calcular el discriminante
            $discriminante = pow($b, 2) - 4 * $a * $c;

            // Verificar si hay soluciones reales
            if ($discriminante < 0) {
                return "La ecuación no tiene soluciones reales.";
            }

            // Calcular las soluciones
            $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminante)) / (2 * $a);

            return "Las soluciones son: x1 = $x1 y x2 = $x2";
        }

        // Llamar a la función y mostrar el resultado
        $resultado = resolverEcuacionSegundoGrado($a, $b, $c);
        echo "<h2>Resultado:</h2>";
        echo "<p>$resultado</p>";
    }
    ?>
</body>
</html>

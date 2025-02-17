<?php
function convertir($valor, $de, $a) {
    $conversiones = [
        'metros' => ['metros' => 1, 'yardas' => 1.09361, 'pies' => 3.28084, 'varas' => 1.1963],
        'yardas' => ['metros' => 0.9144, 'yardas' => 1, 'pies' => 3, 'varas' => 1.09361],
        'pies' => ['metros' => 0.3048, 'yardas' => 0.333333, 'pies' => 1, 'varas' => 0.363636],
        'varas' => ['metros' => 0.836127, 'yardas' => 0.9144, 'pies' => 2.75, 'varas' => 1]
    ];
    return $valor * $conversiones[$de][$a];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $valor = floatval($_POST['valor']);
    $de = $_POST['de'];
    $a = $_POST['a'];
    $resultado = convertir($valor, $de, $a);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertir Unidades</title>
</head>
<body>
    <center>
    <h1>Convertir Unidades</h1>
    <h3>
    <form method="post">
        <label for="valor">Cantidad:</label>
        <input type="number" step="any" name="valor" required>
        </BR>
        </BR>
        
        <label for="de">Convertir de:</label>
        <select name="de">
            <option value="metros">Metros</option>
            <option value="yardas">Yardas</option>
            <option value="pies">Pies</option>
            <option value="varas">Varas</option>
        </select>
</BR>
</BR>
        
        <label for="a">A:</label>
        <select name="a">
            <option value="metros">Metros</option>
            <option value="yardas">Yardas</option>
            <option value="pies">Pies</option>
            <option value="varas">Varas</option>
        </select>
        </BR>
        </BR>
        </BR>
        
        <button type="submit">Convertir</button>

    </form>
    </h3>
    <?php if (isset($resultado)) : ?>
        <h2>Resultado: <font color="1e40bf"> <?php echo htmlspecialchars($valor) . " $de equivale a   " . round($resultado,2) . " $a"; ?></font></h2>
    <?php endif; ?>
    </center>
</body>
</html>

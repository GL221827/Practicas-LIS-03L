<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de dólares a euros</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    
<body>
<div class="container mt-5">
        <h2 class="text-center mb-4">Resultado de lacantidad en euros</h2>

        <?php
        // Verificar si se envió el formulario
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cantidad = $_POST['cantidad'];

            // Validar que sea un número
            if (is_numeric($cantidad)) {
                $cantidad = floatval($cantidad);
                $tasaCambio = 0.96; 
                $equivalenteEuros = $cantidad * $tasaCambio;
                ?>

                <!-- Tabla de resultados -->
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>Cantidad en Dólares (USD)</th>
                            <th>Equivalente en Euros (EUR)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= number_format($cantidad, 2) ?> USD</td>
                            <td><?= number_format($equivalenteEuros, 2) ?> EUR</td>
                        </tr>
                    </tbody>
                </table>

                <?php
            } else {
                echo '<div class="alert alert-danger">Por favor, ingrese un número válido.</div>';
            }
        } else {
            echo '<div class="alert alert-warning">No se ha enviado ninguna cantidad.</div>';
        }
        ?>
        <div id="link" class="text-center mt-4">
<a href="convertir_dolares.html" class="btn btn-primary">Ingresar nuevos datos</a>
</div>
</div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos personales</title>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php
    $name = "Cindy Valeria";
    $lastname = "Gonzalez Leon";
    $lugar_nacimiento = "San Salvador, El Salvador";
    $edad = 20;
    $carnet = "GL221827";
    ?>
    
    <div class="container mt-5">
        <h2 class="text-center mb-4">Datos Personales</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td>Nombre:</td>
                    <td><?= $name ?></td>
                </tr>
                <tr>
                    <td>Apellido:</td>
                    <td><?= $lastname ?></td>
                </tr>
                <tr>
                    <td>Lugar de nacimiento:</td>
                    <td><?= $lugar_nacimiento ?></td>
                </tr>
                <tr>
                    <td>Edad:</td>
                    <td><?= $edad ?></td>
                </tr>
                <tr>
                    <td>Carnet:</td>
                    <td><?= $carnet ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

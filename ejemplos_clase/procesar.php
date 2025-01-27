<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <?php
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $motivo=$_POST['motivo'];
    $mensaje=$_POST['message'];
    echo $nombre.''. $apellido.''. $correo;

    ?>

    <div class ="container">
        <div class= "row">
            <table class= "table table-bordered">
                <tr>
                    <td>nombre </td>
                    <td><?= $nombre ?> </td>
                </tr>
                <tr>
                    <td>apellido </td>
                    <td><?=$apellido?> </td>
                </tr>
                <tr>
                    <td>correo </td>
                    <td><?=$correo?> </td>
                </tr>
                <tr>
                    <td>motivo </td>
                    <td><?=$motivo?> </td>
                </tr>
                <tr>
                    <td>mensaje </td>
                    <td><?=$mensaje?> </td>
                </tr>
</div>
</div>
</div>


</body>
</html>
<?php
//matriz asociativa
$estudiantes = [
    ["Alumno" => "Cindy Gonzalez", "tarea" => 8.2, "investigacion" => 9, "examen" => 7.5],
    ["Alumno" => "Brenda Lopez", "tarea" => 7.8, "investigacion" => 5, "examen" => 8],
    ["Alumno" => "Laura Rivera", "tarea" => 6.5, "investigacion" => 9.8, "examen" => 8],
    ["Alumno" => "Baltazar Gurvara", "tarea" => 8, "investigacion" => 4, "examen" => 9],
];

// calcular el promedio
function obtenerPromedio($notas) {
    $promedio = ($notas['tarea'] * 0.5) + ($notas['investigacion'] * 0.3) + ($notas['examen'] * 0.2);
    return round($promedio, 2);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promedio de Estudiantes</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color:rgb(77, 90, 241);
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Tarea (50%)</th>
                <th>Investigación (30%)</th>
                <th>Examen (20%)</th>
                <th colspan="2">Promedio</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estudiantes as $estudiante): ?>
                <?php $promedio = obtenerPromedio($estudiante); ?>
                <tr>
                    <td><?= $estudiante['Alumno'] ?></td>
                    <td><?= $estudiante['tarea'] ?></td>
                    <td><?= $estudiante['investigacion'] ?></td>
                    <td><?= $estudiante['examen'] ?></td>
                    <td colspan="2" style="font-weight: bold;"> <?= $promedio ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

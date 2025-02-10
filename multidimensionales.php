<?php

$alumnos=[
    [
        'nombre'=>"Gabriel",
        'apellido'=>"Calderon",
        'carnet'=>"GL221827",
        'CUM'=>8,
        'materias'=>['LIS104', 'CAI402', 'JHD401']
    ],
    [
        'nombre'=>"Brandon",
        'apellido'=>"Lopez",
        'carnet'=>"BL221864",
        'CUM'=>8.5,
        'materias'=>['LIS104', 'CAI402', 'JHD401']
    ],
    [
        'nombre'=>"Anna",
        'apellido'=>"Corima",
        'carnet'=>"AC224785",
        'CUM'=>5,
        'materias'=>['LIS147', 'CAA402', 'JMD401']
    ]



];

?>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Carnet</th>
        <th>CUM</th>
        <th>Materias inscritas</th>
    </tr>

    <?php
    foreach($alumnos as $alumno){
        ?>
    
    <tr>
        <td><?=$alumno['nombre'] ?></td>
        <td><?=$alumno['apellido']?></td>
        <td><?=$alumno['carnet'] ?></td>
        <td><?=$alumno['CUM'] ?></td>
        <td><?= implode('  ,  ', $alumno['materias'],) ?></td>
    </tr>
    <?php
    }
    ?>
</table>
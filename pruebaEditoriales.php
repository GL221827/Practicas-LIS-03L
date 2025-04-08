<?php

include_once 'models/EditorialesModel.php';
$model= new EditorialesModel();
$editorial=[
    'codigo_editorial'=>"EDI001",
    'nombre_editorial'=>"Alfaguara",
    'contacto'=>"Jose",
    'telefono'=>"222222222"
];
$model->update($editorial);
//echo $model->insert($editorial);
//echo $model->delete('EDI789');
var_dump($model->get('EDI001'));
//var_dump($model->get('EDI001'));
?>
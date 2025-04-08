<?php
require_once 'models/AutoresModel.php';

$model= new AutoresModel();
$autores=[

        'codigo_autor'=>"AUT147",
        'nombre_autor'=>"Gabriela Mistral",
        'nacionalidad'=>"Chilena"
    
];
$model->insert($autores);
//$model->update($autores);
//$model->delete('AUT147');
var_dump($model->get('AUT147'));
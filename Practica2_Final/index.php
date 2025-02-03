<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculadora de CUM</title>
   
<!-- include a theme -->
<link rel="stylesheet" href="{PATH}/themes/default.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    </head>
<body>
    
<div class="container">
    <h1 class="page-header text-center">Calculadora de CUM</h1>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Agregar materia</a>
            
            <table class="table table-bordered table-striped" style="margin-top:20px;">
                <thead>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Uv</th>
                    <th>Notas</th>
                    <th>Acciones</th>
                </thead>
                <tbody>

            <?php
               $materias=simplexml_load_file('materias.xml');
              // var_dump($materias);
              $cum=0; $numerador=0; $denominador=0;
              foreach($materias -> materia as $materia){
                $numerador+=$materia->nota*$materia->uvs;
                $denominador+=$materia->uvs;
            ?>
                <tr>
                    <td><?=$materia ->codigo?></td>
                    <td><?=$materia ->nombre?></td>
                    <td><?=$materia ->uvs?></td>
                    <td><?=$materia ->nota?></td>
                    <td>
                        <a href="#editM" class="btn btn-success" onclick="openEditModal('<?=$materia->codigo?>', '<?=$materia->nombre?>', '<?=$materia->uvs?>', '<?=$materia->nota?>')">Editar</a>
                        
                        <a href="borrar.php?codigo=<?=$materia ->codigo?>"  class="btn btn-danger">Borrar</a>
                    </td>
                </tr>

                <?php 
                }
                ?>
                
                </tbody>
            </table>
            
            <?php
            
            if($denominador!=0){
                $cum=round($numerador/$denominador,2);
                echo "<h2>CUM:$cum</h2>";
            }
           
            ?>
         
        </div>
    </div>
</div>

<?php
include_once('nueva_modal.php');
include_once('editar_modal.php');
    ?>

  
<script>
function openEditModal(codigo, nombre, uvs, nota) {
    document.getElementById('edit_codigo').value = codigo;
    document.getElementById('edit_nombre').value = nombre;
    document.getElementById('edit_uvs').value = uvs;
    document.getElementById('edit_nota').value = nota;
    $('#editModal').modal('show');
          
}

</script>
 
 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>

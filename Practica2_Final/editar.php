<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['edit_codigo'])) {
    $codigoEdit = $_POST['edit_codigo'];
    $nombreEdit = $_POST['edit_nombre'];
    $uvEdit = $_POST['edit_uvs'];
    $notaEdit = $_POST['edit_nota'];
    
    $materias = simplexml_load_file('materias.xml');
    foreach ($materias->materia as $materia) {
        if ((string)$materia->codigo === $codigoEdit) {
            $materia->nombre = $nombreEdit;
            $materia->uvs = $uvEdit;
            $materia->nota = $notaEdit;
            break;
        }
    }
    $materias->asXML('materias.xml');

    
    header("Location: index.php");
    exit();
}
?>

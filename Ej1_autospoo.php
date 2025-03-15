<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Venta de autos</title>
</head>
<body>
<div class="container">
    <header>
        <h1>Autos disponibles</h1>
    </header>
    
    <form method="POST" class="mb-3">
        <label for="marca">Seleccione una marca:</label>
        <select name="marca" id="marca" class="form-control">
            <option value="">-- Seleccione --</option>
            <option value="Peugeot">Peugeot</option>
            <option value="Renault">Renault</option>
            <option value="BMW">BMW</option>
            <option value="Toyota">Toyota</option>
        </select>
        <button type="submit" class="btn btn-primary mt-2">Buscar</button>

    
    <div class="row">
        <?php
        spl_autoload_register(function($class){
            if (is_file("{$class}.class.php")){
                include_once("{$class}.class.php");
            } else {
                die("{$class}.class.php No existe en el proyecto");
            }
        });
        
        $movil[] = new auto("Peugeot", "307", "Gris", "img/peugeot.jpg");
        $movil[] = new auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg");
        $movil[] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
        $movil[] = new auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg");
        $movil[] = new auto();
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['marca'])) {
            $marcaSeleccionada = $_POST['marca'];
            foreach ($movil as $auto) {
                if ($auto->getMarca() === $marcaSeleccionada) {
                    $auto->mostrar();
                }
            }
        }

        ?>
    </div>
</div>
</body>
</html>

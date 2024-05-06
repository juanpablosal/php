<?PHP

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start() ; 

if (isset($_SESSION["listadoClientes"])) {
    //si existe la variavle de session listadoClientes asigno su contenido a aClientes
    $aClientes = $_SESSION["listadoClientes"];
}
else {
    $aClientes = array() ; 
}



if ($_POST) {


    $nombre = $_POST['txtNombre'];
    $DNI = $_POST['txtDNI'];
    $tel = $_POST['txtTel'];
    $edad = $_POST['txtEdad'];
    
    $aClientes[]= array( 
        "nombre" => $nombre, 
        "DNI" => $DNI, 
        "tel" => $tel, 
        "edad" => $edad, 
        ) ; 
        

    //actualiza el contenido del array. 

        $_SESSION["listadoClientes"] = $aClientes ; 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clientes_session</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 pb-4">
                <h1>
                    Listado de Clientes_session
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-4 py-4">
                <form action="" method="post">
                    <div>
                        <label for="txtNombre">Nombre: </label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control shadow">
                    </div>
                    <div>
                        <label for="txtDNI">DNI:  </label>
                            <input type="text" name="txtDNI" id="txtDNI" class="form-control shadow">
                    </div>
                    <div>
                        <label for="txtTel">Tel: </label>
                            <input type="tel" name="txtTel" id="txtTel" class="form-control shadow">
                    </div>
                    <div>
                        <label for="txtEdad">Edad: </label>
                        <input type="text" name="txtEdad" id="txtEdad" class="form-control shadow">
                    </div>
                    
                    <div class="py-4">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>

            <div class="col-8 py-5">
                <table class="table table-hover shadow">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>DNI</th>
                            <th>Tel</th>
                            <th>Edad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        
                        foreach ( $aClientes as $aClient) :
                        ?>
                         <tr>
                        <td><?php echo $aClient["nombre"]?></td>
                        <td><?php echo $aClient["DNI"]?></td>
                        <td><?php echo $aClient["tel"]?></td>
                        <td><?php echo $aClient["edad"]?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
           </div>
        </div>
        <!-- aqui empieza la tabla con espacio de 8 -->

            
    </div>
</body>

</html>
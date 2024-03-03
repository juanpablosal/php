<?php date_default_timezone_set("America/bogota");

$nombre = "Juan Pablo salazar";
$edad  = 20;
$aPeliculas = array("Avenger end game", "Iron man", "batman" )

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ficha personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <main class="container">
        <div class="row">

            <div class="col-12 text-center py-5">
                <h1>
                    ficha personal
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">

                    <tr>
                        <th>fecha:</th>
                        <td>
                            <?php
                            echo date("d/m/Y");
                            ?>
                        </td>
                    </tr>

                    <tr>
                        <th>Nombre Y apellido</th>
                        <td><?php echo $nombre; ?></td>
                    </tr>
                    <tr>
                        <th>Edad</th>
                        <td><?php echo $edad; ?></td>
                    </tr>

                    <tr>
                        <th>Peliculas favoritas</th>
                        <td>
                        <?php echo $aPeliculas[0]; ?><br>
                        <?php echo $aPeliculas[1]; ?><br>
                        <?php echo $aPeliculas[2]; ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>


</html>
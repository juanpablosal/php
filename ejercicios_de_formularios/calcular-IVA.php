<?php
ini_set('display-erros', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$iva = 23; 
$inporteSinIva = 0 ; 
$inporteConIva = 0 ; 

if ($_POST) {

    $iva = $_POST [""] ; 

    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Calcular IVA</title>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1>
                    calculadora de iva
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-5 py-5">

                <form action="POST">
                    <div class="mb-4">
                        <label for="lsIVA">IVA</label>
                         <select name="lsIVA" id="lsIVA" class="form-control">
                            <option value="10.5">10.5</option>
                            <option value="19">19</option>
                            <option value="21" selected>21</option>
                            <option value="27">27</option>
                         </select>
                    </div>
                    <div  class="mb-4">
                        <label for="txPrecioConIva">Precio con IVA: </label>
                        <input type="number" name="txPrecioConIva" id="txPrecioConIva" class="form-control">
                    </div>
                    <div  class="mb-4"> 
                        <label for="txPrecioSinIva">Precio sin IVA: </label>
                        <input type="number" name="txPrecioSinIva" id="txPrecioSinIva" class="form-control">
                    </div>
                    <div  class="mb-4">
                        <button type="submit" class="btn btn-primary">Calcular</button>
                    </div>
                </form>
            </div>

            <div class="col-7 py-5">
                <table class="table table-hover shadow py-5">
                  <thead>
                    <tr>
                        <th>IVA</th>
                        <td>$precio</td>
                    </tr>
                    <tr>
                        <th>Precio sin IVA</th>
                        <td>$precio</td>
                    </tr>
                    <tr>
                        <th>Precio con IVA</th>
                        <td>$precio</td>
                    </tr>
                    <tr>
                        <th>IVA Cantidad</th>
                        <td>$precio</td>
                    </tr>
                  </thead>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
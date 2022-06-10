<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM Persona";
    $query=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ProyectoFinal</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th> <a href="index.php">Base de Datos</a> </th>
                <th><a href="integrantes.html">Integrantes</a></th>
            </tr>
        </thead>
        
    </table>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Agregar persona</h1>

                <form action="insertar.php" method="POST">
                    
                    <input type="text" class="form-control mb-3" name="IDpersona" placeholder="IDpersona"> 
                    <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                    <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellido">
                    <input type="text" class="form-control mb-3" name="Edad" placeholder="Edad">
                    
                    <input type="submit" class="btn btn-primary" value="Agregar">
                </form>

            </div>
            <div class="col-md-8">
                <h1>Informacion</h1>
                
            </div>

        </div>
    </div>    
</body>
</html>
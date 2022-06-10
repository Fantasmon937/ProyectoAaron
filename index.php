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
                <table class="table">

                    <thead class="table table-dark">
                        <tr>
                            <th>IDpersona</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Edad</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($row=mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <th><?php  echo $row['IDpersona']?></th>
                            <th><?php  echo $row['Nombre']?></th>
                            <th><?php  echo $row['Apellido']?></th>
                            <th><?php  echo $row['Edad']?></th> 
                            <th><a href="actualizar.php?id=<?php echo $row['IDpersona'] ?>" class="btn btn-info">Editar</a></th>
                            <th><a href="delete.php?id=<?php echo $row['IDpersona'] ?>" class="btn btn-danger">Eliminar</a></th>
                        </tr>
                        <?php 
                             }
                         ?>
                    </tbody>

                </table>
            </div>

        </div>
    </div>    
</body>
</html>
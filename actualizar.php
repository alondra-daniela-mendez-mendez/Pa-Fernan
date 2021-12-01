<?php
include("conexion.php");
$con=conectar();

$Procesador=$_GET['Procesador'];

$sql="SELECT * FROM computadora WHERE Procesador='$Procesador'";
$query=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="Procesador" value="<?php echo $row['Procesador']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="Procesador" placeholder="Procesador" value="<?php echo $row['Procesador']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="Tarjetagrafica" value="<?php echo $row['Tarjetagrafica']  ?>">
                                <input type="text" class="form-control mb-3" name="RAM" placeholder="RAM" value="<?php echo $row['RAM']  ?>">
                                <input type="text" class="form-control mb-3" name="Discoduro" placeholder="Disco duro" value="<?php echo $row['Discoduro']  ?>">
                                <input type="text" class="form-control mb-3" name="Monitor" placeholder="Monitor" value="<?php echo $row['Monitor']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>
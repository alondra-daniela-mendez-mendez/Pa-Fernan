<?php
include ("conexion.php");
$con=conectar();
$sql="SELECT * FROM computadora";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computadora</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
     <div class="container">
         <div class="row">
       
          
         <div class="col-md-3">
         <h1>INGRESA LOS DATOS</h1>
         <form action="insertar.php" method="POST">

            <input type="text" class="form-control mb-3" name="Procesador" placeholder="Procesador">
            <input type="text" class="form-control mb-3" name="Tarjetagrafica" placeholder="Tarjetagrafica">
            <input type="text" class="form-control mb-3" name="RAM" placeholder="RAM">
            <input type="text" class="form-control mb-3" name="Discoduro" placeholder="Discoduro">
            <input type="text" class="form-control mb-3" name="Monitor" placeholder="Monitor">
            <input type="submit" class="btn btn-primary">
            </form>
         </div>
         <div class="col-md-8">
        <h1>MOSTRAR TABLA</h1>
         <table class="table">
             <thead  class="table-success table-striped">
               <tr>
                   <th>Procesador</th>
                   <th>Tarjeta Grafica</th>
                   <th>RAM</th>
                   <th>Disco Duro</th>
                   <th>Monitor</th>
               </tr>  
             </thead>

             <tbody>
                 <?php
                 while($row=mysqli_fetch_array($query)){
                     ?>
                   <tr>
                        <th><?php echo $row['Procesador']?></th>
                        <th><?php echo $row['Tarjetagrafica']?></th>
                        <th><?php echo $row['RAM']?></th>
                        <th><?php echo $row['Discoduro']?></th>
                        <th><?php echo $row['Monitor']?></th>
                        <th><a href="actualizar.php?Procesador=<?php echo $row['Procesador'] ?>" class="btn btn-info">Editar</a> </th>
                        <th><a href="delete.php?Procesador=<?php echo $row['Procesador'] ?>" class="btn btn-danger">Eliminar</a></th> 
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

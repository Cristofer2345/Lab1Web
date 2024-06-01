<?php
require_once 'db.php'; 
$tareas = getHomework();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./Estilos/Style.css">

    <title>Tareas</title>
</head>
<body>
<header class="header">
    <div>
      <button class="buttonHome"> <img src="img/icons8-casa-48.png" alt=""></button>
    </div>
    <div>
    <h1>Crud Basico para aprender</h1>
    </div>
    <div>
        <div> <button class="buttonHome"> <img src="img/icons8-menú-42.png" alt=""></button></div>
    </div>

</header>

<?php
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = null ; 
    $name = $_POST['name'];
    $cuota = $_POST['cuota'];
    $cuotaCapital = $_POST['cuotaCapital'];
    $fechaPago = $_POST['fecha']; 
   $mensajeExito= insertPago($name,$cuota,$cuotaCapital,$fechaPago);
    $tareas = getHomework();
    echo "<script>alert('$mensajeExito');</script>";
 }
?>
   <div>
    <div class="divForm">
<form action="index.php" method="POST">
    <div class="formGroup">
    <label for="name1">Deudor</label>
       <input type="text" id="name1" name="name" placeholder="Deudor">
    </div>
    <div class="formGroup"> 
    <label for="cuota"></label>
<input type="text" name="cuota" id="cuota1" placeholder="Cuota">
    </div>
    <div class="formGroup"> 
        <label for="cuotaCapital">Cuota Capital </label>
    <input type="text" name="cuotaCapital" id="cuotaCapital1" placeholder="cuota">
    </div>
    <div class="formGroup">
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha">
    </div>

<input type="submit" value="Agregar Pago " style="margin-top: 10px;">
</form>
</div>
<div>
    <h1>Crear un usuario </h1>
<table class="table">
<thead class="table-dark">
<tr>
<th>Id</th>
<th>Deudor</th>
<th>Cuota</th>
<th>Cuota Capital</th>
<th>Fecha Pago </th>
<th></th>
<th></th>
</tr>

</thead>
<tbody>
    <?php foreach($tareas as  $row) { ?>
<tr>
<th><?= $row->id ?></th>
 <th><?= $row->deudor ?></th>
 <th><?= $row->Cuota ?></th>
 <th><?= $row->cuotaCapital ?></th>
 <th><?= $row->fechaPago ?></th>
 <th><a href="">Editar</a></th>
 <th><a href="">Eliminar</a></th>
</tr>
<?php }  ?>
</tbody>

</table>

</div>
   </div>
 
</body>
</html>
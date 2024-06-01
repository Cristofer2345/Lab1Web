<?php
function getHomework()
 {
    $dataBase = new PDO('mysql:host=localhost;dbname=dbdeudas;charset=utf8', 'root', '');   
    $sentence = $dataBase-> prepare("select * from pagos");
    $sentence->execute();
    $tareas = $sentence-> fetchAll(PDO::FETCH_OBJ);
    return $tareas;
}
function insertPago($name,$cuota,$cuotaCapital,$fechaPago)  {
    $dataBase = new PDO('mysql:host=localhost;dbname=dbdeudas;charset=utf8', 'root', '');  
    $sentence = $dataBase->prepare("INSERT INTO pagos (deudor,Cuota,cuotaCapital,fechaPago) VALUES (?,?,?,?)");
   $ValueInsert = $sentence->execute([$name,$cuota,$cuotaCapital,$fechaPago]); 
 if ($ValueInsert) {
    $Exitoso = "Datos insertados correctamente.";
     return $Exitoso;
} else {
    $fallo = "Error al insertar datos.";
    return $fallo;
  
}
}
?>
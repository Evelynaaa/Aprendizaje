<?php
//conexion
   $mar = new PDO("mysql:host=localhost;dbname=doc1","root","");//la variable mar es un objeto 
   $mas = $mar->query("SELECT * from curso");

   $mas->execute();//ejecuta el sql 
   $crhis = $mas->fetchAll(PDO::FETCH_OBJ);//recupera la informacion  // CH_OBJ TRANSFORMA EL HTML
   //var_dump($crhis);//print o lee
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Curso</th>
      <th scope="col">Cant_creditos</th>
      <th scope="col">Grado</th>
    </tr>
  </thead>
  <tbody>
      <?php
         foreach ($crhis as $cresia){//echo es funcion , concatenar 
          echo "<tr>";// aca imprime 
            echo "<td>". $cresia->id."</td>";
            echo "<td>". $cresia->nombre."</td>";
            echo "<td>". $cresia->cant_cred."</td>";
            echo "<td>". $cresia->grado."</td>";
          echo "</tr>";// aca imprime 

         }
      ?>

   
    
  </tbody>
</table>
    
</body>
</html>

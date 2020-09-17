<?php

 include ('../config/db.php');

 if(!empty($_POST['nombre_completo'])){

  $nombre_completo = $_POST['nombre_completo'];
  $numero_documento = $_POST['numero_documento'];
  $email = $_POST['email'];
  $fecha_nacimiento = $_POST['fecha_nacimiento'];
  $fecha_creacion = $_POST['fecha_creacion'];


  
  $query = mysqli_query($conn,"INSERT INTO personas(nombre_completo, numero_documento, email, fecha_nacimiento, fecha_creacion) 
  	VALUES ('$nombre_completo', '$numero_documento', '$email', '$fecha_nacimiento', NOW() )");
  
  if($query){
      header('location:list.php');
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
    .n{
        margin-top: 100px;
        justify-content:  center;
    }
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
      <div class="row n">
      <div class="col-xs-12 col-lg-5">
      <form method="POST">
      <h1 class="text-center"><strong>Agregar Cliente</strong></h1>
      <br>
      <input type="text" required placeholder="Nombre Completo" name="nombre_completo" class="form-control">
      <br>
      <input type="text" required placeholder="Numero Documento" name="numero_documento" class="form-control">
      <br>
      <input type="text" required placeholder="Email" name="email" class="form-control">
      <br>
      Fecha de Nacimiento
      <input type = "date" name = "fecha_nacimiento" class="form-control" />      
      <br>           
     <input type="submit" name="editar" value="Agregar" class="btn btn-primary btn-block">
      </form>
      </div>
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
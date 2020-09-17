<?php
 include ('../config/db.php');

    $id = $_GET['id'];
    $result = mysqli_query($conn,"select * from personas where id = '$id'");
    $row = mysqli_fetch_assoc($result);
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

       $nombre_completo = $_POST['nombre_completo'];
       $numero_documento = $_POST['numero_documento'];
       $email = $_POST['email'];
       $fecha_nacimiento = $_POST['fecha_nacimiento'];

        $resultt = mysqli_query($conn,"update personas set 
          nombre_completo = '$nombre_completo'
          where id = '$id' ");

        $resultt = mysqli_query($conn,"update personas set 
          numero_documento = '$numero_documento'
          where id = '$id' ");

        $resultt = mysqli_query($conn,"update personas set 
          email = '$email'
          where id = '$id' ");

        $resultt = mysqli_query($conn,"update personas set 
          fecha_nacimiento = '$fecha_nacimiento'
          where id = '$id' ");
        
        if($resultt){
        header('location: list.php');
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
      <h1 class="text-center"><strong>Editar Producto</strong></h1>
      <br>
      <input type="text" value="<?php echo $row['nombre_completo'];?>" name="nombre_completo" class="form-control">
      <br>
      <input type="text" value="<?php echo $row['numero_documento'];?>" name="numero_documento" class="form-control">
      <br>
      <input type="text" value="<?php echo $row['email'];?>" name="email" class="form-control">
      <br>
      <input type="date" value="<?php echo $row['fecha_nacimiento'];?>" name="fecha_nacimiento" class="form-control">
      <br>
     <input type="submit" name="editar" value="Editar" class="btn btn-primary btn-block">
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
<?php
 include ('../config/db.php');
 $result = mysqli_query($conn,'SELECT * FROM personas');
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
    }
</style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <h1 class="text-center"><strong>Servitel Clientes</strong></h1>
        <br>
        <td><a href="add.php" class="btn btn-primary">Agregar Cliente</a></td>        
        <br>
        <br>
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" id= "search_name " placeholder="Busqueda por nombre">
          </div>
          <div class="col">
            <input type="text" class="form-control" id= "search_date" placeholder="Busqueda por fecha de creacion">
          </div>
        </div>
        <br>
        <br>
      <div class="row">      
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Fecha de Creacion</th>
      <th scope="col">Acciones</th>
      <th scope="col"> </th>
    </tr>
  </thead>
  <tbody id="my_table">
  <?php foreach($result as $row){ ?>
    <tr>
      <td><?php echo $row['id'] ?></td>
      <td><?php echo $row['nombre_completo']; ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['fecha_nacimiento'] ?></td>
      <td><?php echo $row['fecha_creacion'] ?></td>
      <td><a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-primary">Editar</a></td>
      <td><a href="delite.php?id=<?php echo $row['id']?>" class="btn btn-danger">Borrar</a></td>
    </tr>
        <?php }?>
  </tbody>
</table>

    
      </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      $(document).ready(function(){
        $("#search_name").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#my_table tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>

    <script>
      $(document).ready(function(){
        $("#search_date").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $("#my_table").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">      
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
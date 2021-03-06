<?php 
require_once 'php/init.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>PHP CRUD APP</title>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">TODO LIST</a>
    </nav>
    <div class="container mt-5">
      <?php waiter(); ?>
      <form action="" method="GET">
        <div class="row">
          <div class="col-md-9 form-group">
            <input class="form-control" type="text" name="items" id="" placeholder="Insert a new task" required>
          </div>
          <div class="col-md">
            <input class="btn btn-success" type="submit" value="Add Task">
          </div>
        </div>
      </form>

      <?php viewTable();?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  </body>
</html>
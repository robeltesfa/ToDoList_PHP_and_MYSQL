<?php 
    include "db.inc.php";
// query statement variable (contain SQL statement)
    $query = "SELECT * FROM todo";
    $result= mysqli_query($connection, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Robel's TODO APP WITH PHP AND MYSQL</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet"  type="text/css" href="style.css">
  <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">
</head>
<body>
  <div class="container">
  </form>
    <div class="todo">
      <h1>Robel's TODO APP WITH PHP AND MYSQL</h1>
      <h3>Add a new Todo</h3>
      <form action="<?php echo $_server['PHP_SELF']; ?>" METHOD="POST">
        <div class="form-group">
          <input class="form-control" type="text" name="todo"   placeholder="Todo Name">
        </div>
        <div class="form-group">
              <input type="submit" class="btn btn-primary" value="Add a new todo task">
        </div>
      </form>
    </div>
    <div class= "table-responsive">
        <table class="table table-bordered table-striped table-hover">
          <thead>
            <th>ID</th>
            <th>Todo</th>
            <th>Date Added</th>
            <th>Edit Todo</th>
            <th> Delete Todo</th>
          </thead>
          <tbody>
          <?php
          // a while loop
             while ($row = mysqli_fetch_assoc($result)){
               echo $row['id']. "<br>";
             } 

          ?>
            <tr>
              <td>1</td>
              <td>Morning Physical exercise</td>
              <td>Tuesday 13th April, 2020</td>
              <td><a href="#" class="btn btn-success">Edit Todo</a></td>
              <td><a href="#" class="btn btn-danger">Delete Todo</a></td>
            </tr>
          </tbody>
          </table>
    </div>
  </div>
</body>
</html>

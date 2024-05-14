<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin rozhranie</title>
</head>
<?php 
    session_start();
    include('partials/header.php');
    include('Autentifikacia.php');
?>
<div class="textadmin">
<h1 class= "Admintext">Admin rozhranie:</h1>  
</div>
<div class="container">
    <div>
        <h2>List kontaktov:</h2>
    </div>
<div class="table-container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Meno</th>
        <th scope="col">Email</th>
        <th scope="col">Poznamka</th>
        <th scope="col">Acceptance</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT * FROM kontakt";
            $query_run = mysqli_query($conn, $query);

            if(mysqli_num_rows($query_run) > 0) {
                foreach($query_run as $item) {
                    ?>
                        <tr>
                            <td><?= $item['id']?></td>
                            <td><?=$item['meno']?></td>
                            <td><?=$item['email']?></td>
                            <td><?=$item['poznamka']?></td>
                            <td><?=$item['acceptance']?></td>
                            <td><a href="Kontakt-edit.php?id=<?=$item['id']?>" class="btn btn-success">Edit</a></td>
                            <td>
                              <form action = "Kontakt-update.php" method="POST">
                                <button type="submit" name="kontakt_delete" value="<?= $item['id']?>" class="btn btn-danger">Delete</button>
                              </form>
                            </td> 
                        </tr>
                    <?php
                }
            } else {
                ?>
                  <tr>
                    <td colspan="5">Nenašli sa žiadne dáta</td>
                  </tr>  
                <?php 
            }
        ?>
    </tbody>
  </table>
</div>
<div class="container">
    <div>
        <h2>List požívateľov:</h2>
    </div>
<div class="table-container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Role</th>
          <th scope="col">Edit</th>
          <th scope="col">Delete</th>
        </tr>
      </thead>
      <tbody>
          <?php 
              $query = "SELECT * FROM users";
              $query_run = mysqli_query($conn, $query);

              if(mysqli_num_rows($query_run) > 0) {
                  foreach($query_run as $item) {
                      ?>
                          <tr>
                              <td><?= $item['id']?></td>
                              <td><?=$item['email']?></td>
                              <td><?=$item['password']?></td>
                              <td><?=$item['role']?></td>
                              <td><a href="User-edit.php?id=<?=$item['id']?>" class="btn btn-success">Edit</a></td>
                              <td>
                                <form action = "User-update.php" method="POST">
                                  <button type="submit" name="user_delete" value="<?= $item['id']?>" class="btn btn-danger">Delete</button>
                                </form>
                              </td> 
                          </tr>
                      <?php
                  }
              } else {
                  ?>
                    <tr>
                      <td colspan="5">Nenašli sa žiadne dáta</td>
                    </tr>  
                  <?php 
              }
          ?>
      </tbody>
  </table>          
</div>
<?php
include "db_connect.php";


$select_query = "SELECT * FROM students_data";

$result = mysqli_query($db_connect, $select_query);

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- cdnjs font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1>Hello Bootstrap</h1>
    </div>

    <section class="box">
        <div class="container">
            <div class="row">
                <div class="felx-column col-4 btn btn-primary text-end my-4">
                    <h1>Hello World</h1>
                </div>
                <div class="felx-column col-4 btn btn-success text-center my-4">
                    <h1>Hello World</h1>
                </div>
                <div class="felx-column col-4 btn btn-danger text-start my-4">
                    <h1>Hello World</h1>
                </div>
            </div>
        </div>
    </section>




    <!-- bootstrap registration form -->
    <section class="h-100">
  <div class="container py-5 h-100">
   <div class="row">
    <div class="col-3 bg-secondary my-4 dashboard">
        <h2 class="my-4">DashBoard</h2>
        <a href="students_data.php" class="btn btn-success">View All Students Info</a>
        <a href="insert_students.php" class="btn btn-primary my-4">Insert Students Info</a>
    </div>
    <div class="col-9 my-4">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


  <?php while($row = mysqli_fetch_assoc($result)){?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['phone'];?></td>
      <td><?php echo $row['email'];?></td>
      <td>
            <a href="#" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
            <a href="#" class="btn btn-success"><i class="fa-regular fa-eye"></i></a>
            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
   <?php }?>
    
  </tbody>
</table>
    </div>
   </div>
  </div>
</section>
      <!-- Bootstrap JS and Popper via CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</body>
</html>
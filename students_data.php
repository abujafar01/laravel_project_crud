<?php

include "db_connect.php";


$select_query = "SELECT * FROM  student_data";

$result = mysqli_query($db_connect, $select_query);


// $row = mysqli_fetch_assoc($result);

// echo $row['name'];

// echo $row['name'];



?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud</title>
  <!-- bootstrap css link -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- cdnjs link awoesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- custom link -->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
    <div class="container">
      <h2>Hello world</h2>
    </div>
    <section class="box">
      <div class="container">
        <div class="row">
          <div class="flex-column col-md-6 bg-danger text-right">
            <h1>Column 1</h1>
          </div>
          <div class="flex-column col-md-3 bg-success text-center">
            <h1>Column 2</h1>
          </div>
          <div class="flex-column col-md-3 bg-primary">
            <h1>Column 3</h1>
          </div>
        </div>
      </div>
</section>




    <!-- registration form code -->
  <section class="h-100">
  <div class="container py-5 h-100">
   <div class="row">
    <div class="col-3 bg-secondary my-4 dashboard">
        <h1 class="my-4">DashBoard</h1>
        <a href="students_data.php" class="btn btn-primary">View All Students Info</a>
        <a href="insert_students.php" class="btn btn-success my-4">Insert Students Info</a>
    </div>
    <div class="col-9 my-4" >

    <table class="table table-dark"">
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


<?php while($row = mysqli_fetch_assoc($result)){   ?>


    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td>
          <a href="#" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i></a>
          <a href="#" class="btn btn-success"><i class="fa-regular fa-eye"></i></a>
          <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
      </td>
    </tr>
  

<?php } ?>
    

  </tbody>
</table>
  
    </div>
   </div>
  </div>
</section> 
    <!-- jQuery and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
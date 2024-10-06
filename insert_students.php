<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud</title>
  <!-- bootstrap css link -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="col-3 bg-secondary my-4">
        <h1 class="my-4">DashBoard</h1>
        <a href="students_data.php" class="btn btn-primary">View All Students Info</a>
        <a href="insert_students.php" class="btn btn-success my-4">Insert Students Info</a>

    </div>
    <div class="col-9">


    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0 bg-info">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="image/img4.webp"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <h3 class="mb-5 text-uppercase">Student registration form</h3>

                        <form action="insert_query.php" method="POST">
                          <div class="row">
                            <div class="name col-6">
                                  <input type="text" placeholder="Name" class="form-control" name="name">
                            </div>
                            <div class="phone col-6">
                                   <input type="text" placeholder="Phone" class="form-control" name="phone">
                            </div>
                          </div>
                            
                            


                            <input type="text" placeholder="Email" class="form-control" name="email">
                            <textarea placeholder="About Yourself" class="form-control" name="about_your_self"></textarea>
                            <input type="text" placeholder="Father's Name" class="form-control" name="fathers_name">
                            <input type="text" placeholder="Mother's Name" class="form-control" name="mothers_name">
                            <input type="date" placeholder="DOB" class="form-control"" name="dob">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
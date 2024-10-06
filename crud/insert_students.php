<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <div class="col-3 bg-secondary my-4">
        <h2 class="my-4">DashBoard</h2>
        <a href="students_data.php" class="btn btn-success">View All Students Info</a>
        <a href="insert_students.php" class="btn btn-danger">Insert Students Info</a>
    </div>
    <div class="col-9">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4 bg-info">
          <div class="row g-0">
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
                  <textarea  placeholder="About Yourself" class="form-control" name="about_your_self"></textarea>
                  <input type="text" placeholder="Father's Name" class="form-control" name="fathers_name">
                  <input type="text" placeholder="Mother's Name" class="form-control" name="mothers_name">
                  <input type="date" placeholder="DOB" class="form-control" name="dob">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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
      <!-- Bootstrap JS and Popper via CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js" integrity="sha512-7Pi/otdlbbCR+LnW+F7PwFcSDJOuUJB3OxtEHbg4vSMvzvJjde4Po1v4BR9Gdc9aXNUNFVUY+SK51wWT8WF0Gg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</body>
</html>
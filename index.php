<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDRSSP</title>
    <link rel="css/layout.css" type="text/css" href="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        nav{
          background: #063146;
        }
    </style>
  
</head>
<body>
    <!-- Navigation bar -->
    <?php include_once('includes/nav.php');?>

    <!-- main image & intro text -->
  <section id="intro">
    <div class="container-lg">
      <div class="row g-4 justify-content-center align-items-center">
        <div class="col-md-5 text-center d-none d-md-block">
          <img src="assets/ebook.png" class="img-fluid" alt="ebook">
        </div>
        <div class="col-md-5 text-center text-md-start">
          <h1>
            <div class="display-4">EDRSSP</div>
            <div class="display-6 text-muted">Student Document Repository</div>
          </h1>
          <p class="lead my-4 text-muted">EDRSSP is a document repository system that is aimed at helping students to submit their project documents for grading 
            and they can also download sample projects posted by their supervisors.
          </p>
          <a href="student/login.php" class="btn btn-secondary btn-lg">Student</a>
          <a href="lecturer/login.php" class="btn btn-info btn-lg">Lecturer</a>
        </div>
        
      </div>
    </div>
  </section>
 <?php include_once('footer.php');?>
</body>
</html>
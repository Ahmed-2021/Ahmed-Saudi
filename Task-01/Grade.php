<?php 



if($_SERVER['REQUEST_METHOD']== "POST"){
  $Physics     =  $_POST['Physics'];
  $Chemistry   = $_POST['Chemistry'];
  $Biology     = $_POST['Biology'];
  $Mathematics = $_POST['Mathematics'];
  $Computer    = $_POST['Computer'];

$Total_grade = $Physics + $Chemistry + $Biology + $Mathematics + $Computer;
$Final_grade = $Total_grade / 500 * 100 ."%";

if($Final_grade >= 90){
  $grade = " Your Percent is: {$Final_grade}"." ** ". " Your Grade A";
}elseif($Final_grade >= 80 ){
  $grade = " Your Percent is: {$Final_grade}"." ** ". " Your Grade B";

}elseif($Final_grade >= 70 ){
  $grade = " Your Percent is: {$Final_grade}"." ** ". " Your Grade C";

}elseif($Final_grade >= 60 ){
  $grade = " Your Percent is: {$Final_grade}"." ** ". " Your Grade D";

}elseif($Final_grade >= 50 ){
  $grade = " Your Percent is: {$Final_grade}"." ** ". " Your Grade E";

}
else{
  $grade = " Your Percent is: {$Final_grade}"." ** ". " Your Grade F";

}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>

</head>
<body>
    <!-- start nav -->
  
<div class="section">
    <div class="row">
        <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

        </div>
    </div>
</div>

   <!-- End nav -->

<div class="container">
    <div class="row">
        <div class="col-12 ">
   <h1 class="text-center text-success font-weight-bold mt-5">Show Me Grade </h1>
        </div>
    </div>
</div>

<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-4">
    <form action="" method="post">
    <input name="Physics" max="100" type="number" class="form-control mb-3" placeholder="Physics" aria-label="Physics" aria-describedby="basic-addon1"> 
    <input name="Chemistry"  max="100" type="number" class="form-control mb-3"  placeholder="Chemistry" aria-label="Chemistry" aria-describedby="basic-addon1">
    <input name="Biology"  max="100" type="number" class="form-control mb-3"  placeholder="Biology" aria-label="Biology" aria-describedby="basic-addon1">
    <input name="Mathematics"  max="100" type="number" class="form-control mb-3"  placeholder="Mathematics" aria-label="Mathematics" aria-describedby="basic-addon1">
    <input name="Computer"   max="100" type="number" class="form-control mb-3"  placeholder="Computer" aria-label="Computer" aria-describedby="basic-addon1">

    <button class="btn btn-success">Show</button>
    <?= $grade??"" ?>

    </form>

    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
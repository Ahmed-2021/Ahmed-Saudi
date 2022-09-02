<?php
session_start();
    


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Error = [];

    $Clint_Name = $_POST['Clint_Name'];
    $Loan_Amount = $_POST['Loan_Amount'];
    $Loan_years = $_POST['Loan_years'];

// Start validation for input name 
    if(empty($Clint_Name)){
        $Error['Clint_Name'] = "<div class='alert alert-danger' role='alert'>please type your name</div>";
 

    }elseif(strlen($Clint_Name) < 4){

        $Error['Clint_Name'] = "<div class='alert alert-danger' role='alert'>the name must be grater than 4 chars </div>"; 

    }elseif(strlen($Clint_Name) > 10){

        $Error['Clint_Name'] = "<div class='alert alert-danger' role='alert'>the name must be smaller than 15 chars </div>"; 
        

    }
    // End validation for input name 

// Start validation for input product  Loan_years
if(empty($Loan_Amount) ){
    $Error['Loan_Amount'] = "<div class='alert alert-danger' role='alert'>please type Loan_Amount </div>";     
}
// End validation for input product 
if(empty($Loan_years) ){
    $Error['Loan_years'] = "<div class='alert alert-danger' role='alert'>please type Loan_years </div>";     
}
// End validation for input product

$creat_table = ["Clint Name","Rate Interest","Loan After Interest","Monthly"];


$_SESSION ['Clint_Name'] = $Clint_Name;
$_SESSION ['Loan_Amount'] = $Loan_Amount;
$_SESSION ['Loan_years'] = $Loan_years;




}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank</title>
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"></head>

</head>
<body>
    <!-- start nav -->
  
   <!-- End nav -->

<div class="container">
    <div class="row  ">
        <div class="col-12 ">
   <h1 class="text-center text-success font-weight-bold mt-5">The Bank </h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 ">

      <form method="post">
            <div class="mb-3">
            <label class="" for="inputGroupFile04">Clint Name :</label>
            <input name="Clint_Name" type="text" value="<?= $_SESSION ['Clint_Name'] ?>" class="form-control" id="inputGroupFile04" placeholder="Type Your Name" aria-label="Username" aria-describedby="basic-addon1">
          <?= $Error['Clint_Name'] ?? ""?>

        </div>
            <div class="mb-3">
            <label class="" for="inputGroupFile04">Loan Amount :</label>
            <input  name="Loan_Amount" value="<?= $_SESSION ['Loan_Amount']??"" ?>" type="number" class="form-control  " id="inputGroupFile04" placeholder="Type Loan_Amount" aria-label="Products" aria-describedby="basic-addon1">
            <?= $Error['Loan_Amount'] ?? ""?>
        </div>

            <div class="mb-3">
            <label class="" for="inputGroupFile04">Loan years :</label>
            <input  name="Loan_years" value="<?= $_SESSION ['Loan_years']??""?>" type="number" class="form-control  " id="inputGroupFile04" placeholder="Type Loan_Years" aria-label="Products" aria-describedby="basic-addon1">
            <?= $Error['Loan_years'] ?? ""?>
        </div>


            <button name = "First_submit" type="submit" class="btn btn-success btn-md btn-block">Enter Products</button>

            <table class="table">
  <thead class="thead-light">
    <tr>
         <?php
        if(empty($Error)){ // true
            
         if(isset($creat_table)){ // true
         foreach($creat_table as $Head_Table){ ?>

      <th  scope="col"><?= $Head_Table  ?? ""?></th>
          <?php }}?>
    </tr>
  </thead>
  <tbody>


       <tr>
        <td><?=$_SESSION ['Clint_Name']?></td>
        <td><?php  
        
        if(isset($Loan_Amount)  && isset($Loan_years)){
            if ($Loan_years <= 3 ){
            
                $interset_first = $Loan_Amount *10 /100;
            
                echo $interset_first;

            }elseif ($Loan_years > 3 ) {
                $interset_second = $Loan_Amount * 15 /100;
            
                echo $interset_second;
            }
            }
        
        
        ?></td>
        <td><?php  
        
        if(isset($Loan_Amount)  && isset($Loan_years)){
            if ($Loan_years <= 3 ){
            
                $interset_first = $Loan_Amount *10 /100;
            
                echo $After_interset_first = $interset_first + $Loan_Amount;

                $count_month = $Loan_years *12;
                $month_low = $After_interset_first / $count_month ;

            }elseif ($Loan_years > 3 ) {


                $interset_second = $Loan_Amount * 15 /100;

                echo $After_interset_second = $interset_second + $Loan_Amount;
                $count_month = $Loan_years *12;
                $month_low = $After_interset_second / $count_month ;

            }
            }
        
        
        ?></td>
        <td><?php  
        
        if(isset($Loan_Amount) &&  isset($month_low)){

            echo round($month_low);     

            }
        
        
        ?></td>

    </tr>



    <?php }?>
  </tbody>




      </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>


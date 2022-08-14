<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $Error = [];

    $Clint_Name = $_POST['Clint_Name'];
    $Location = $_POST['Location'];
    $Number_OF_Products = $_POST['Number_OF_Products'];

// Start validation for input name 
    if(empty($Clint_Name)){
        $Error['Clint_Name'] = "<div class='alert alert-danger' role='alert'>please type your name</div>";
 

    }elseif(strlen($Clint_Name) < 4){

        $Error['Clint_Name'] = "<div class='alert alert-danger' role='alert'>the name must be grater than 4 chars </div>"; 

    }elseif(strlen($Clint_Name) > 10){

        $Error['Clint_Name'] = "<div class='alert alert-danger' role='alert'>the name must be smaller than 15 chars </div>"; 
        

    }
    // End validation for input name 

// Start validation for input location 
if($Location == "NULL"){
    $Error['Location'] =  "<div class='alert alert-danger' role='alert'>please choose your citiy </div>"; 
    

}
// End validation for input location 


// Start validation for input product 
if(empty($Number_OF_Products) ){
    $Error['Number_OF_Products'] = "<div class='alert alert-danger' role='alert'>please type Number_OF_Products </div>";     
}
// End validation for input product 


$creat_table = ["Product Name","price","Quantity","Sub Total"];


if(isset($_POST['Product_Name'])  && isset($_POST['Product_Price']) && isset($_POST['Quantity'])){

if(count($_POST['Product_Name']) > 0 &&count($_POST['Product_Price']) > 0 && count($_POST['Quantity']) > 0)
{
$Product_Name    = $_POST['Product_Name'];
$Product_Price   = $_POST['Product_Price'];
$Quantity        = $_POST['Quantity'];

foreach($Product_Price as $key=>$value){

$Final[]= (int)$value * (int)$Quantity[$key];

}
}


$_SESSION ['Product_Name'] = $Product_Name;
$_SESSION ['Product_Price'] = $Product_Price;
$_SESSION ['Quantity'] = $Quantity;


}






$_SESSION ['Clint_Name'] = $Clint_Name;
$_SESSION ['Location'] = $Location;
$_SESSION ['Number_OF_Products'] = $Number_OF_Products;




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
  
   <!-- End nav -->

<div class="container">
    <div class="row  ">
        <div class="col-12 ">
   <h1 class="text-center text-success font-weight-bold mt-5">Choos Products </h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 ">

      <form method="post">
            <div class ="mb-3">
            <label class="" for="inputGroupFile04">Clint Name :</label>
            <input name="Clint_Name" type="text" value="<?= $_SESSION ['Clint_Name'] ?? ""?>" class="form-control" id="inputGroupFile04" placeholder="Type Your Name" aria-label="Username" aria-describedby="basic-addon1">
          <?= $Error['Clint_Name'] ?? ""?>
        </div>
            <div class="mb-3">
            <label for="validationDefault04">Location :</label>
           <select name="Location" value="  " class="custom-select" id="validationDefault04" >
               <option value="NULL">choose your location</option>
                 <option value="cairo" >cairo</option>
                 <option selected value="Giza"  >Giza</option>
                <option value="October">October</option>


         </select>
         <?= $Error['Location'] ?? ""?>
            </div>

            <div class="mb-3">
            <label class="" for="inputGroupFile04">Number OF Products :</label>
            <input  name="Number_OF_Products" value="<?= $_SESSION ['Number_OF_Products'] ??""?>" type="number" class="form-control  " id="inputGroupFile04" placeholder="Type Your Name" aria-label="Products" aria-describedby="basic-addon1">
            <?= $Error['Number_OF_Products'] ?? ""?>

        </div>
            <button name = "First_submit" type="submit" class="btn btn-success btn-md btn-block">Enter Products</button>

            <table class="table">
  <thead class="thead-light">
    <tr>
         <?php
        if(empty($Error)){ // true
            

         if(isset($creat_table)){ // tru
         foreach($creat_table as $Head_Table){ ?>

      <th  scope="col"><?= $Head_Table  ?? ""?></th>
          <?php }}?>
    </tr>
  </thead>
  <tbody>

    <?php 
    if(isset($Number_OF_Products) ){ // true
    for($row = 1 ; $row <= $Number_OF_Products; $row++ ){ ?>
     <tr>   


      <td>
       <input name="Product_Name[]"  type="text" class="form-control  " placeholder="Product" >
        </td>

        <td>
       <input name= "Product_Price[]"    type="text" class="form-control  " placeholder="Price">
        </td>
 
        <td>
       <input name="Quantity[]"  type="text" class="form-control  " placeholder="Quantity">
        </td>
      
        <td>
         <?php if(isset($Final)){?> 
        <input name="Sub_Total" value = "<?= $Final[$row-1] ?? ""?>"  type="number" class="form-control  " placeholder="Price">
            <?php }  ?>   
    </td>

    </tr>
    <?php }}}?>
  </tbody>
<!--  -->
<?PHP if(!empty($Final)){?>
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Clint Name</th>
      <td scope="col"><?= $_SESSION ['Clint_Name'] ?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>City</th>
      <td><?= $_SESSION ['Location'] ?></td>
    </tr>
    <tr>
      <th>Total products</th>
      <td><?= $calc =  array_sum($Final) ?> </td>
    </tr>
    <tr>
      <th>Discount</th>
      <td>
        
        <?php


            if( $calc <= 1000 ){
            
              echo "No Discount";
          // die;
          }if ($calc <= 3000 ){
              $First_disc=  $calc * 10 /100  ;
                echo $First_disc;
          // die;
          }if ($calc <= 4500 ){
            $First_disc=  $calc * 15 /100  ;
              echo $First_disc;
        // die;
        }if ($calc > 4500 ){
          $First_disc=  $calc * 20 /100  ;
            echo $First_disc;
      // di
      }



      
      ?> </td>
    </tr>
    <tr>
      <th>Total after discount</th>
      <td><?= $calc - $First_disc ?> </td>
    </tr>
    <tr>
      <th>Delivery</th>
      <td>
      <?php 
      
      if(isset($Location)){
        if($Location== "cairo"){
          echo $city =30;
        }        if($Location== "Giza"){
          echo $city =50;
        }        if($Location== "October"){
          echo $city =100;
        }
      }
      ?>
      </td>
    </tr>
    <tr>
      <th>Total</th>
      <td><?= $calc - $First_disc +$city?> </td>
    </tr>

  </tbody>
</table>

<?php } ?>
<!--  -->
</table>

<?php 
  if(isset($Number_OF_Products)){
  if($Number_OF_Products  > 0){ ?>
<button name = "" type="submit" class="btn btn-success btn-md btn-block">calc</button>
<?php } } ?>



      </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>


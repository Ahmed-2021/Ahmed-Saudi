<?php 



// dynamic table
// dynamic rows //4 
// dynamic columns // 4
// check if gender of user == m ==> male // 1
// check if gender of user == f ==> female // 1

$users = [
    (object)[  // $users->name ; $user->gender[0]-gender
        'id' => 1,
        'name' => 'ahmed', // $user->name;
        "gender" => (object)[ 'gender' => 'm' ],  
            
        'hobbies' => [ 'football', 'swimming', 'running'],
          
        'activities' => [
            "school" => 'drawing',
            'home' => 'painting'
        ],
        'phones'=>[1231513513,012312312,89746543],
    ],
    (object)[
        'id' => 2,
        'name' => 'mohamed',
        "gender" => (object)[
            'gender' => 'm'
        ],
        'hobbies' => [
            'swimming', 'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[1231513513,89746543],
    ],
    (object)[
        'id' => 3,
        'name' => 'menna',
        "gender" => (object)[
            'gender' => 'f'
        ],
        'hobbies' => [
            'running',
        ],
        'activities' => [
            "school" => 'painting',
            'home' => 'drawing'
        ],
        'phones'=>[],
    ],  
];

// print_r($users);


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
    <div class="row  ">
        <div class="col-12 ">
   <h1 class="text-center text-success font-weight-bold mt-5">User's </h1>
        </div>
    </div>
</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <table class="table table-bordered">
  <thead>
    <tr>

      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Hobbies</th>
      <th scope="col">Activities</th>
      <th scope="col">Phones</th>
    </tr>

  </thead>
  <tbody>
    <?php foreach($users As $key => $user){  ?>
    <tr>
      <th scope="row"><?php echo $user->id?> </th>
      <td><?php echo $user->name?></td>
      <td><?php echo ($user->gender->gender == "m") ? "male" : "female" ; ?> </td>
      <td><?php echo implode ( "<br>",$user->hobbies) ?></td>  
      <td><?php echo implode ( " <br>",$user->activities);  ?></td>
      <td><?php echo  implode ( "<br>",$user->phones)  ?></td> 
    </tr>
    
<?php }?>
  </tbody>
</table>
<!--  -->

        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>
</html>
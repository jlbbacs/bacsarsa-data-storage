<?php

include "conn.php";
 
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $image = $_POST['image'];

    $sql = "INSERT INTO `tbl_info`(`id`, `first_name`, `last_name`, `age`, `address`, `gender`, `number`, `email`, `image`) VALUES (NULL,'$first_name','$last_name','$age','$address','$gender','$number','$email','$image')";
    
    $result = mysqli_query($conn, $sql);

    
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="add_new.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Bacsarsa Crud</title>
</head>
<body>
<header class="bg-info text-center py-3"><h2>Registration</h2></header>
    <div class="container">

<form action="" method="post" class="mt-5 mb-5">
<div class="card mb-3 mt-3 border-0">

<div class="row gx-4">

  <div class="col-md-6">
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label text-start fw-bold">First name</label>
      <input type="text" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter first name" name="first_name" required = "true">
  </div>
  </div>

  <div class="col-md-6 ">
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label text-start fw-bold">Last name</label>
      <input type="text" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter last name" name="last_name" required = "true">
  </div>
  </div>

</div>

<div class="row gx-4">
  
<div class="col-md-6">
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label text-start fw-bold">Age</label>
      <input type="number" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter age" name="age" required = "true">
  </div>
  </div>

  <div class="col-md-6 ">
  <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label text-start fw-bold">Address</label>
      <input type="text" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter address" name="address" required = "true">
  </div>
  </div>

</div>

<div class="row gx-4">
  
  <div class="col-md-6">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-start fw-bold">Gender</label>
        <input type="text" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter gender" name="gender" required = "true">
    </div>
    </div>

    <div class="col-md-6 ">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-start fw-bold">Mobile number</label>
        <input type="number" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter mobile no." name="number" required = "true">
    </div>
    </div>

  </div>

  <div class="row gx-4">
  
  <div class="col-md-6">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label text-start fw-bold">Email</label>
        <input type="email" class="form-control border-dark" id="exampleFormControlInput1" placeholder="Enter email" name="email" required = "true">
    </div>
    </div>

    <div class="col-md-6 ">
    <div class="mb-3">
      <label for="formFile" class="form-label fw-bold">Browse image</label>
      <input class="form-control border-dark" type="file" id="formFile" name="image">
    </div>
    </div>

  </div>

  

</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<button type="clear" class="btn btn-warning" onChange={handleChange} value={value} name="clear">Clear fields</button>
</form>
    


      
    </div>

</body>
</html>
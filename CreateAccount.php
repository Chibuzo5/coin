<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
    <title>Create Account | Coin</title>
</head>
<body class='createaccount'>
     <div class='container'>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 ">
  <a class="navbar-brand" href="index.php">
    <img src="SVG/coins-29516.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Coin
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav ">
      
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="CreateAccount.php">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
      </li>
    </ul>
    
  </div>
</nav>
</div>
<!-- Sign up form-->
<div class='container'>
<h2 class="text-uppercase display-4 ">Create Account</h2>
<form class='createForms'>
  <div class="form-group row">
    <label for="FirstName" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="FirstName"  placeholder='enter your first name'>
    </div>
  </div>
  <div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastName" placeholder="enter your last name">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="enter your email">
    </div>
  </div>
  <div class="form-group row">
    <label for="phonenumber" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="phonenumber" placeholder="enter your phone number">
    </div>
  </div>
  <div class="form-group row">
    <label for="dateofbirth" class="col-sm-2 col-form-label">Date of birth</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="dateofbirth" placeholder="enter your date of birth">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="enter your password">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="confirm password">
    </div>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Click to agree with our <a href='#'> terms and conditions</a></label>
  </div>
  <button type="submit" class="btn btn-primary">Create </button>
   <button type="reset" class="btn btn-danger">Cancel</button>
</form>
<img class='img-c'src='SVG/contract-4545562.svg'>
</div>
</body>
</html>
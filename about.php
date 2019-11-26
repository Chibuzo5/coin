<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>About | Coin</title>
    <meta name="description" content="">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/main.css">
  </head>
<body class="about_page" >
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Sign Up
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="CreateAccount.php">Individual Account</a>
          <a class="dropdown-item" href="cooperateAccount.php">Cooperate Account</a>
          
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
      </li>
    </ul>
    
  </div>
</nav>
</div>
  
      <div class="aboutPage" style="color:white; ">
        <div class="container">
          <h2 class="text-uppercase display-3" >About Coin </h2>
          
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi iure ducimus ad quas doloremque accusamus
           perferendis pariatur laboriosam optio, nisi porro debitis cumque assumenda repellendus hic sint blanditiis 
           praesentium maiores aut. Quae animi velit, mollitia quibusdam porro molestiae dolor, temporibus maxime 
           voluptas sunt natus. Magnam, nostrum minus. Quos fugiat error, ex aspernatur aut maxime dolorum est possimus 
           iusto, corrupti officia. Ex ullam, provident veniam, magni, ratione esse magnam odit corporis neque sed doloremque 
           culpa commodi vitae ab? Optio consequuntur corrupti ducimus reiciendis maxime odio nam est illo necessitatibus, 
           impedit aspernatur et modi exercitationem obcaecati perferendis nostrum deserunt, libero sed vero eius veniam nobis 
           repellat praesentium error! Vel blanditiis alias officia dolorum quidem, itaque, sint corrupti eius tenetur ducimus 
           nemo voluptatibus, inventore doloribus. Officiis, quas vel? Aspernatur quidem libero facilis veniam cum in repellat 
           quae officiis, pariatur magnam,
           animi delectus doloribus? Et deserunt totam nostrum, nam dolor quisquam modi dolorum veniam?</p>

           
           <a href="https://twitter.com/nathanbolt5?ref_src=twsrc%5Etfw" class="twitter-follow-button" 
           data-size="large" data-show-count="false">Follow @nathanbolt5</a>
           <script defer async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>       
            <div ><img  class='aboutPage-svg' src='SVG/undraw_newspaper_k72w.svg'></div>
        <div>
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
          
      <div class="modal-body">
        <h3>Select Account Type</h3>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Individual</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Cooperate</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<form>
  <div class="form-group">
    <label for="individualEmail">Email address</label>
    <input type="email" name='individualEmail' class="form-control" id="individualEmail" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="individualPassword">Password</label>
    <input type="password" name='individualPassword' class="form-control" id="individualPassword" placeholder="Password">
  </div>
  <div >
</div>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <form>
  <div class="form-group">
    <label for="cooperateEmail">Email address</label>
    <input type="email"name='cooperateEmail' class="form-control" id="cooperateEmail" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  
  <div class="form-group">
    <label for="cooperatePassword">Password</label>
    <input type="password" name='cooperatePassword' class="form-control" id="cooperatePassword" placeholder="Password">
  </div>
  <div >
</div>
  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</div>   
      </div>
    </div>
  </div>
</div>
</body>
</html>
 
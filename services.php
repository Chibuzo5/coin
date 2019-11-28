<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coin</title>
    <meta name="description" content="">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
     <script src="sweetalert2.min.js"></script>
      <link rel="stylesheet" href="sweetalert2.min.css"> 
    
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./css/main.css">
  </head>

  <body class='container service'>
                                    <!-- Navigation Element -->
     
    <nav class="navbar navbar-expand-lg navbar-light bg-light mt-3 ">
  <a class="navbar-brand" href="home.php">
    <img src="SVG/coins-29516.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Coin
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cards.php">Cards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="summary.php">Summary</a>
      </li>
    </ul>
  <div class='justify-content-end'>
    
    <ul class="navbar-nav ">
     
      <li class="nav-item">
        <a class="nav-link" href="settings.php">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log Out</a>
      </li>
      
    </ul>
    </div>
  </div>
</nav>
<img id='svg' class='mt-7' src='SVG/thinking.svg'>
 
 
</body>
</html>
<script>
  Swal.fire({
  title: 'Oops!',
  text: 'Services Are Temporary Unavailable.',
  imageUrl: 'images/undraw_not_found_60pq.png',
  imageWidth: 400,
  imageHeight: 300,
  imageAlt: 'Custom image',
})
  </script>
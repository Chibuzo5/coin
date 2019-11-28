<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coin</title>
    <meta name="description" content="">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="sweetalert2.min.js"></script>
      <link rel="stylesheet" href="sweetalert2.min.css"> -->
    
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="./css/main.css">
  </head>

  <body class='container home'>
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
<div class="jumbo" ></div>
 <h1  id='hello'>Hello Ekwue</h1>
 <script src='skycons.js'></script>
 <canvas id="cloudy" width="128" height="128"></canvas>
 <p id='info'></p>
</body>
</html>
<script>
  async function Location(){
  const api_url = 'https://api.ipdata.co/?api-key=076874e70ff89ab0329a1e75a7267274549cdce77434641981b7751a'
  const response = await fetch(api_url);
  const data = await response.json();
   const {country_name, flag, latitude, longitude} = data;
 const proxy ='https://cors-anywhere.herokuapp.com/';
    const api = `${proxy}https://api.darksky.net/forecast/463024df279ce704bb693dab01fe8933/${latitude},${longitude}`
    const response2 = await fetch(api)
    const data2 = await response2.json()
    console.log(data2)
    const {icon,summary} = data2.currently
    let chi= (icon.replace(/-/g,"_").toUpperCase())
    console.log(chi)
     let icons = new Skycons({"color": "orange"});
   icons.set("cloudy", Skycons[chi]);
   icons.play();
   document.getElementById('info').innerHTML=summary
    
}
Location()
</script>

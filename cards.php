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
    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" href="./css/main.css">
  </head>

  <body class='container cards'>
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
<!-- <div class="row">
    <div class="col text-center">
      <button class="btn btn-default" data-toggle="modal" data-target="#addnewcards">Add New Card</button>
    </div>
  </div> -->
  <div class='row d-flex justify-content-center mt-3'>
    
 <button  class='btn btn-primary' id='addnewcard' data-toggle="modal" data-target="#addnewcards">Add New Card</button>

</div>
 <!-- Modal to add new cards -->
<div class="modal fade" id="addnewcards" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <form>
            
    <div class="form-group">
    <label for="cardnumber">Card Number</label>
    <input type="number" class="form-control" id="cardnumber" aria-describedby="emailHelp" placeholder="Enter Card Number">
  </div>
  <div class="form-group">
    <label for="cardtype">Card Type</label>
    <input type="number" readonly class="form-control" id="cardtype" aria-describedby="emailHelp" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlSelect1">Card Type</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>... </option>
      <option>Master Card </option>
        <option>Visa Card </option>
        <option>Verve </option>
    </select>
  </div>
  <div class="form-group">
    <label for="cardpassword"> Card Password</label>
    <input type="password" class="form-control" id="cardpassword" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="bank">Bank Name</label>
    <input type="text" class="form-control" id="bank" placeholder="Optional Three (3) Letter Word To Remember Your Card">
  </div>
  
  <div class="form-group">
    <label for="expiringdate">Expiring Date</label>
    <input type="number" class="form-control" id="expiringdate" placeholder="Card Expring Date">
  </div>
  
        </form>
 </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add Card</button>
      </div>
    </div>
  </div>
</div>
<body>
            <div class="my-cc">
       
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="item">
                        <!-- Transparent Image -->
                        <img src="images/transparent.png" alt="" class="img-responsive" />
                        <!-- Heading -->
                        <div class="item-heading clearfix">
                            <!-- Heading -->
                            <h3>Debit Card</h3>
                            <!-- Bank Name -->
                            <h4>AR Bank</h4>
                        </div>
                        <!-- Account -->
                        <div class="item-account">
                            <!-- Value -->
                            <span>1234</span>
                            <span>5678</span>
                            <span>0011</span>
                            <span>1626</span>
                        </div>
                        <!-- Validity Starts -->
                        <div class="item-validity">
                            <div class="row">
                                
                                
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <!-- Item -->
                                    <div class="item-valid clearfix">
                                        <!-- Valid Thru -->
                                        <h5>Valid Thru</h5>
                                        <!-- Date -->
                                        <span>12/15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Validity Ends -->

                        <!-- Card Type Starts -->
                        <div class="item-cc-type clearfix">
                            <!-- Type -->
                            <h6>VISA CARD</h6>
                            <!-- Icon -->
                            <i class="fa fa-cc-visa"></i>
                        </div>
                        <!-- Card Type Ends -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="item">
                        <!-- Transparent Image -->
                        <img src="images/transparent.png" alt="" class="img-responsive" />
                        <!-- Heading -->
                        <div class="item-heading clearfix">
                            <!-- Heading -->
                            <h3>Debit Card</h3>
                            <!-- Bank Name -->
                            <h4>AR Bank</h4>
                        </div>
                        <!-- Account -->
                        <div class="item-account">
                            <!-- Value -->
                            <span>1234</span>
                            <span>5678</span>
                            <span>0011</span>
                            <span>1626</span>
                        </div>
                        <!-- Validity Starts -->
                        <div class="item-validity">
                            <div class="row">
                                
                                
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <!-- Item -->
                                    <div class="item-valid clearfix">
                                        <!-- Valid Thru -->
                                        <h5>Valid Thru</h5>
                                        <!-- Date -->
                                        <span>12/15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Validity Ends -->

                        <!-- Card Type Starts -->
                        <div class="item-cc-type clearfix">
                            <!-- Type -->
                            <h6>VISA CARD</h6>
                            <!-- Icon -->
                            <i class="fa fa-cc-visa"></i>
                        </div>
                        <!-- Card Type Ends -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="item">
                        <!-- Transparent Image -->
                        <img src="images/transparent.png" alt="" class="img-responsive" />
                        <!-- Heading -->
                        <div class="item-heading clearfix">
                            <!-- Heading -->
                            <h3>Debit Card</h3>
                            <!-- Bank Name -->
                            <h4>AR Bank</h4>
                        </div>
                        <!-- Account -->
                        <div class="item-account">
                            <!-- Value -->
                            <span>1234</span>
                            <span>5678</span>
                            <span>0011</span>
                            <span>1626</span>
                        </div>
                        <!-- Validity Starts -->
                        <div class="item-validity">
                            <div class="row">
                                
                                
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <!-- Item -->
                                    <div class="item-valid clearfix">
                                        <!-- Valid Thru -->
                                        <h5>Valid Thru</h5>
                                        <!-- Date -->
                                        <span>12/15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Validity Ends -->

                        <!-- Card Type Starts -->
                        <div class="item-cc-type clearfix">
                            <!-- Type -->
                            <h6>VISA CARD</h6>
                            <!-- Icon -->
                            <i class="fa fa-cc-visa"></i>
                        </div>
                        <!-- Card Type Ends -->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Card -->
                    <div class="item">
                        <!-- Transparent Image -->
                        <img src="images/transparent.png" alt="" class="img-responsive" />
                        <!-- Heading -->
                        <div class="item-heading clearfix">
                            <!-- Heading -->
                            <h3>Debit Card</h3>
                            <!-- Bank Name -->
                            <h4>AR Bank</h4>
                        </div>
                        <!-- Account -->
                        <div class="item-account">
                            <!-- Value -->
                            <span>1234</span>
                            <span>5678</span>
                            <span>0011</span>
                            <span>1626</span>
                        </div>
                        <!-- Validity Starts -->
                        <div class="item-validity">
                            <div class="row">
                                
                                
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <!-- Item -->
                                    <div class="item-valid clearfix">
                                        <!-- Valid Thru -->
                                        <h5>Valid Thru</h5>
                                        <!-- Date -->
                                        <span>12/15</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Validity Ends -->

                        <!-- Card Type Starts -->
                        <div class="item-cc-type clearfix">
                            <!-- Type -->
                            <h6>VISA CARD</h6>
                            <!-- Icon -->
                            <i class="fa fa-cc-visa"></i>
                        </div>
                        <!-- Card Type Ends -->
                    </div>
                </div>
</div>

<div>

</body>
</html>
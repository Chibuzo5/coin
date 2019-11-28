<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<!-- Sign up form-->
<div class='container'>
<h2 class='row d-flex justify-content-center mt-3'>Create Cooperate Account</h2>
<form class='createForms' onsubmit="return validate()">
  <div class="form-group row">
    <label for="businessName" class="col-sm-2 col-form-label">Business Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="businessName"  placeholder='enter your business name'>
    <div class="alert alert-danger mt-2 fade show" id='businessNameerror' role="alert">
          <p id='businessNameerrorinfo'></p>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="RegistrationNumber" class="col-sm-2 col-form-label">Registration Number</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="RegistrationNumber" placeholder="enter your last name">
    <div class="alert alert-danger mt-2 fade show" id='RegistrationNumbererror' role="alert">
          <p id='RegistrationNumbererrorinfo'></p>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="enter your email">
      <div class="alert alert-danger mt-2 fade show" id='emailerror' role="alert">
          <p id='emailerrorinfo'></p>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="phonenumber" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="tel" class="form-control" id="phonenumber" placeholder="enter your phone number">
     <div class="alert alert-danger mt-2 fade show" id='phonenumbererror' role="alert">
          <p id='phonenumbererrorinfo'></p>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="countriesList"class="col-sm-2 col-form-label">Country</label>
    <div class="col-sm-10">
  <select class="form-control" id="countriesList">
         <option>....</option>
         <option value="AF">Afghanistan</option>
        <option value="AX">Åland Islands</option>
        <option value="AL">Albania</option>
        <option value="DZ">Algeria</option>
        <option value="AS">American Samoa</option>
        <option value="AD">Andorra</option>
        <option value="AO">Angola</option>
        <option value="AI">Anguilla</option>
        <option value="AQ">Antarctica</option>
        <option value="AG">Antigua and Barbuda</option>
        <option value="AR">Argentina</option>
        <option value="AM">Armenia</option>
        <option value="AW">Aruba</option>
        <option value="AU">Australia</option>
        <option value="AT">Austria</option>
        <option value="AZ">Azerbaijan</option>
        <option value="BS">Bahamas</option>
        <option value="BH">Bahrain</option>
        <option value="BD">Bangladesh</option>
        <option value="BB">Barbados</option>
        <option value="BY">Belarus</option>
        <option value="BE">Belgium</option>
        <option value="BZ">Belize</option>
        <option value="BJ">Benin</option>
        <option value="BM">Bermuda</option>
        <option value="BT">Bhutan</option>
        <option value="BO">Bolivia, Plurinational State of</option>
        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
        <option value="BA">Bosnia and Herzegovina</option>
        <option value="BW">Botswana</option>
        <option value="BV">Bouvet Island</option>
        <option value="BR">Brazil</option>
        <option value="IO">British Indian Ocean Territory</option>
        <option value="BN">Brunei Darussalam</option>
        <option value="BG">Bulgaria</option>
        <option value="BF">Burkina Faso</option>
        <option value="BI">Burundi</option>
        <option value="KH">Cambodia</option>
        <option value="CM">Cameroon</option>
        <option value="CA">Canada</option>
        <option value="CV">Cape Verde</option>
        <option value="KY">Cayman Islands</option>
        <option value="CF">Central African Republic</option>
        <option value="TD">Chad</option>
        <option value="CL">Chile</option>
        <option value="CN">China</option>
        <option value="CX">Christmas Island</option>
        <option value="CC">Cocos (Keeling) Islands</option>
        <option value="CO">Colombia</option>
        <option value="KM">Comoros</option>
        <option value="CG">Congo</option>
        <option value="CD">Congo, the Democratic Republic of the</option>
        <option value="CK">Cook Islands</option>
        <option value="CR">Costa Rica</option>
        <option value="CI">Côte d'Ivoire</option>
        <option value="HR">Croatia</option>
        <option value="CU">Cuba</option>
        <option value="CW">Curaçao</option>
        <option value="CY">Cyprus</option>
        <option value="CZ">Czech Republic</option>
        <option value="DK">Denmark</option>
        <option value="DJ">Djibouti</option>
        <option value="DM">Dominica</option>
        <option value="DO">Dominican Republic</option>
        <option value="EC">Ecuador</option>
        <option value="EG">Egypt</option>
        <option value="SV">El Salvador</option>
        <option value="GQ">Equatorial Guinea</option>
        <option value="ER">Eritrea</option>
        <option value="EE">Estonia</option>
        <option value="ET">Ethiopia</option>
        <option value="FK">Falkland Islands (Malvinas)</option>
        <option value="FO">Faroe Islands</option>
        <option value="FJ">Fiji</option>
        <option value="FI">Finland</option>
        <option value="FR">France</option>
        <option value="GF">French Guiana</option>
        <option value="PF">French Polynesia</option>
        <option value="TF">French Southern Territories</option>
        <option value="GA">Gabon</option>
        <option value="GM">Gambia</option>
        <option value="GE">Georgia</option>
        <option value="DE">Germany</option>
        <option value="GH">Ghana</option>
        <option value="GI">Gibraltar</option>
        <option value="GR">Greece</option>
        <option value="GL">Greenland</option>
        <option value="GD">Grenada</option>
        <option value="GP">Guadeloupe</option>
        <option value="GU">Guam</option>
        <option value="GT">Guatemala</option>
        <option value="GG">Guernsey</option>
        <option value="GN">Guinea</option>
        <option value="GW">Guinea-Bissau</option>
        <option value="GY">Guyana</option>
        <option value="HT">Haiti</option>
        <option value="HM">Heard Island and McDonald Islands</option>
        <option value="VA">Holy See (Vatican City State)</option>
        <option value="HN">Honduras</option>
        <option value="HK">Hong Kong</option>
        <option value="HU">Hungary</option>
        <option value="IS">Iceland</option>
        <option value="IN">India</option>
        <option value="ID">Indonesia</option>
        <option value="IR">Iran, Islamic Republic of</option>
        <option value="IQ">Iraq</option>
        <option value="IE">Ireland</option>
        <option value="IM">Isle of Man</option>
        <option value="IL">Israel</option>
        <option value="IT">Italy</option>
        <option value="JM">Jamaica</option>
        <option value="JP">Japan</option>
        <option value="JE">Jersey</option>
        <option value="JO">Jordan</option>
        <option value="KZ">Kazakhstan</option>
        <option value="KE">Kenya</option>
        <option value="KI">Kiribati</option>
        <option value="KP">Korea, Democratic People's Republic of</option>
        <option value="KR">Korea, Republic of</option>
        <option value="KW">Kuwait</option>
        <option value="KG">Kyrgyzstan</option>
        <option value="LA">Lao People's Democratic Republic</option>
        <option value="LV">Latvia</option>
        <option value="LB">Lebanon</option>
        <option value="LS">Lesotho</option>
        <option value="LR">Liberia</option>
        <option value="LY">Libya</option>
        <option value="LI">Liechtenstein</option>
        <option value="LT">Lithuania</option>
        <option value="LU">Luxembourg</option>
        <option value="MO">Macao</option>
        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
        <option value="MG">Madagascar</option>
        <option value="MW">Malawi</option>
        <option value="MY">Malaysia</option>
        <option value="MV">Maldives</option>
        <option value="ML">Mali</option>
        <option value="MT">Malta</option>
        <option value="MH">Marshall Islands</option>
        <option value="MQ">Martinique</option>
        <option value="MR">Mauritania</option>
        <option value="MU">Mauritius</option>
        <option value="YT">Mayotte</option>
        <option value="MX">Mexico</option>
        <option value="FM">Micronesia, Federated States of</option>
        <option value="MD">Moldova, Republic of</option>
        <option value="MC">Monaco</option>
        <option value="MN">Mongolia</option>
        <option value="ME">Montenegro</option>
        <option value="MS">Montserrat</option>
        <option value="MA">Morocco</option>
        <option value="MZ">Mozambique</option>
        <option value="MM">Myanmar</option>
        <option value="NA">Namibia</option>
        <option value="NR">Nauru</option>
        <option value="NP">Nepal</option>
        <option value="NL">Netherlands</option>
        <option value="NC">New Caledonia</option>
        <option value="NZ">New Zealand</option>
        <option value="NI">Nicaragua</option>
        <option value="NE">Niger</option>
        <option value="NG">Nigeria</option>
        <option value="NU">Niue</option>
        <option value="NF">Norfolk Island</option>
        <option value="MP">Northern Mariana Islands</option>
        <option value="NO">Norway</option>
        <option value="OM">Oman</option>
        <option value="PK">Pakistan</option>
        <option value="PW">Palau</option>
        <option value="PS">Palestinian Territory, Occupied</option>
        <option value="PA">Panama</option>
        <option value="PG">Papua New Guinea</option>
        <option value="PY">Paraguay</option>
        <option value="PE">Peru</option>
        <option value="PH">Philippines</option>
        <option value="PN">Pitcairn</option>
        <option value="PL">Poland</option>
        <option value="PT">Portugal</option>
        <option value="PR">Puerto Rico</option>
        <option value="QA">Qatar</option>
        <option value="RE">Réunion</option>
        <option value="RO">Romania</option>
        <option value="RU">Russian Federation</option>
        <option value="RW">Rwanda</option>
        <option value="BL">Saint Barthélemy</option>
        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
        <option value="KN">Saint Kitts and Nevis</option>
        <option value="LC">Saint Lucia</option>
        <option value="MF">Saint Martin (French part)</option>
        <option value="PM">Saint Pierre and Miquelon</option>
        <option value="VC">Saint Vincent and the Grenadines</option>
        <option value="WS">Samoa</option>
        <option value="SM">San Marino</option>
        <option value="ST">Sao Tome and Principe</option>
        <option value="SA">Saudi Arabia</option>
        <option value="SN">Senegal</option>
        <option value="RS">Serbia</option>
        <option value="SC">Seychelles</option>
        <option value="SL">Sierra Leone</option>
        <option value="SG">Singapore</option>
        <option value="SX">Sint Maarten (Dutch part)</option>
        <option value="SK">Slovakia</option>
        <option value="SI">Slovenia</option>
        <option value="SB">Solomon Islands</option>
        <option value="SO">Somalia</option>
        <option value="ZA">South Africa</option>
        <option value="GS">South Georgia and the South Sandwich Islands</option>
        <option value="SS">South Sudan</option>
        <option value="ES">Spain</option>
        <option value="LK">Sri Lanka</option>
        <option value="SD">Sudan</option>
        <option value="SR">Suriname</option>
        <option value="SJ">Svalbard and Jan Mayen</option>
        <option value="SZ">Swaziland</option>
        <option value="SE">Sweden</option>
        <option value="CH">Switzerland</option>
        <option value="SY">Syrian Arab Republic</option>
        <option value="TW">Taiwan, Province of China</option>
        <option value="TJ">Tajikistan</option>
        <option value="TZ">Tanzania, United Republic of</option>
        <option value="TH">Thailand</option>
        <option value="TL">Timor-Leste</option>
        <option value="TG">Togo</option>
        <option value="TK">Tokelau</option>
        <option value="TO">Tonga</option>
        <option value="TT">Trinidad and Tobago</option>
        <option value="TN">Tunisia</option>
        <option value="TR">Turkey</option>
        <option value="TM">Turkmenistan</option>
        <option value="TC">Turks and Caicos Islands</option>
        <option value="TV">Tuvalu</option>
        <option value="UG">Uganda</option>
        <option value="UA">Ukraine</option>
        <option value="AE">United Arab Emirates</option>
        <option value="GB">United Kingdom</option>
        <option value="US">United States</option>
        <option value="UM">United States Minor Outlying Islands</option>
        <option value="UY">Uruguay</option>
        <option value="UZ">Uzbekistan</option>
        <option value="VU">Vanuatu</option>
        <option value="VE">Venezuela, Bolivarian Republic of</option>
        <option value="VN">Viet Nam</option>
        <option value="VG">Virgin Islands, British</option>
        <option value="VI">Virgin Islands, U.S.</option>
        <option value="WF">Wallis and Futuna</option>
        <option value="EH">Western Sahara</option>
        <option value="YE">Yemen</option>
        <option value="ZM">Zambia</option>
        <option value="ZW">Zimbabwe</option>
    </select>
</div>
  </div>
  <div class="form-group row">
    <label for="companyaddress"class="col-sm-2 col-form-label">Address</label>    
         <div class="col-sm-10">
    <textarea class="form-control" id="companyaddress" rows="3"></textarea>
    <div class="alert alert-danger mt-2 fade show" id='companyaddresserror' role="alert">
          <p id='companyaddresserrorinfo'></p>
        </div>
  </div>
</div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword" placeholder="enter your password">
     <div class="alert alert-danger mt-2 fade show" id='inputPassworderror' role="alert">
          <p id='inputPassworderrorinfo'></p>
        </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-2 col-form-label"> Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="confirmPassword" placeholder="confirm password">
       <div class="alert alert-danger mt-2 fade show" id='confirmPassworderror' role="alert">
          <p id='confirmPassworderrorinfo'></p>
        </div>
    </div>
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="check">
    <label class="form-check-label" for="exampleCheck1">Click to agree with our <a href='#'> terms and conditions</a></label>
  </div>
  <button type="submit" class="btn btn-primary">Create </button>
   <button type="reset" class="btn btn-danger">Cancel</button>
</form>

</div>
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
<div id='thinking'>
    <svg width="400" height="500" viewBox="0 0 851 747" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g id="ideas 1" clip-path="url(#clip0)">
    <path id="Vector" d="M376.5 746.054C206.12 746.054 68 721.654 68 691.554C68 661.455 206.12 637.054 376.5 637.054C546.88 637.054 685 661.455 685 691.554C685 721.654 546.88 746.054 376.5 746.054Z" fill="#3F3D56"/>
    <g id="idea2">
    <path id="Vector_2" d="M581.807 338.68C562.198 309.532 553.684 274.322 557.808 239.435C561.933 204.548 578.423 172.294 604.289 148.522C630.154 124.751 663.682 111.036 698.793 109.864C733.903 108.692 768.271 120.141 795.664 142.135C823.057 164.13 841.661 195.212 848.102 229.746C854.544 264.281 848.396 299.98 830.774 330.371C813.153 360.761 785.223 383.83 752.051 395.395C718.879 406.959 682.662 406.253 649.965 393.405C647.846 400.971 643.883 407.893 638.432 413.552C632.981 419.211 626.212 423.43 618.73 425.831C611.249 428.232 603.289 428.74 595.563 427.311C587.837 425.881 580.586 422.558 574.459 417.638C568.332 412.719 563.521 406.357 560.456 399.123C557.391 391.888 556.167 384.006 556.895 376.183C557.624 368.359 560.28 360.838 564.628 354.294C568.975 347.749 574.878 342.384 581.807 338.68V338.68Z" fill="#6C63FF"/>
    <path id="Vector_3" d="M616.473 227.304H791.219V241.1H616.473V227.304Z" fill="white"/>
    <path id="Vector_4" d="M616.473 250.297H791.219V264.092H616.473V250.297Z" fill="white"/>
    <path id="Vector_5" d="M616.473 273.29H791.219V287.085H616.473V273.29Z" fill="white"/>
    </g>
    <g id="idea1">
    <path id="Vector_6" d="M269.193 229.406C288.802 200.258 297.316 165.048 293.192 130.161C289.067 95.2741 272.577 63.0203 246.711 39.2487C220.846 15.4772 187.318 1.76188 152.207 0.590104C117.097 -0.581677 82.729 10.8676 55.3361 32.8617C27.9432 54.8559 9.33906 85.9384 2.89755 120.473C-3.54395 155.007 2.60367 190.706 20.2256 221.097C37.8474 251.487 65.7768 274.557 98.9486 286.121C132.121 297.686 168.338 296.98 201.035 284.131C203.154 291.697 207.117 298.619 212.568 304.278C218.019 309.937 224.788 314.156 232.27 316.557C239.751 318.958 247.711 319.467 255.437 318.037C263.163 316.607 270.414 313.284 276.541 308.365C282.668 303.445 287.479 297.084 290.544 289.849C293.609 282.614 294.833 274.732 294.105 266.909C293.376 259.086 290.72 251.565 286.372 245.02C282.025 238.475 276.122 233.11 269.193 229.406V229.406Z" fill="#6C63FF"/>
    <path id="Vector_7" d="M234.527 131.826L59.7815 131.826V118.03L234.527 118.03V131.826Z" fill="white"/>
    <path id="Vector_8" d="M234.527 154.819L59.7815 154.819V141.023L234.527 141.023V154.819Z" fill="white"/>
    <path id="Vector_9" d="M234.527 177.812L59.7815 177.812V164.016L234.527 164.016V177.812Z" fill="white"/>
    </g>
    <path id="Vector_10" d="M524.287 631.491C535.235 615.218 539.988 595.561 537.685 576.084C535.382 556.607 526.176 538.6 511.736 525.329C497.295 512.058 478.577 504.4 458.975 503.746C439.374 503.092 420.187 509.484 404.894 521.763C389.6 534.042 379.214 551.395 375.618 570.675C372.022 589.955 375.454 609.886 385.292 626.852C395.13 643.819 410.722 656.698 429.242 663.154C447.761 669.611 467.981 669.217 486.235 662.044C487.418 666.268 489.631 670.132 492.674 673.291C495.717 676.451 499.496 678.806 503.673 680.146C507.85 681.487 512.294 681.771 516.607 680.973C520.921 680.174 524.969 678.319 528.389 675.573C531.81 672.826 534.496 669.275 536.207 665.236C537.918 661.197 538.601 656.796 538.195 652.429C537.788 648.061 536.305 643.862 533.878 640.208C531.451 636.554 528.156 633.559 524.287 631.491V631.491Z" fill="#6C63FF"/>
    <path id="Vector_11" d="M488.449 593.331C483.207 593.331 478.958 589.082 478.958 583.84C478.958 578.599 483.207 574.349 488.449 574.349C493.691 574.349 497.94 578.599 497.94 583.84C497.94 589.082 493.691 593.331 488.449 593.331Z" fill="white"/>
    <path id="Vector_12" d="M456.068 593.331C450.827 593.331 446.577 589.082 446.577 583.84C446.577 578.599 450.827 574.349 456.068 574.349C461.31 574.349 465.559 578.599 465.559 583.84C465.559 589.082 461.31 593.331 456.068 593.331Z" fill="white"/>
    <path id="Vector_13" d="M423.688 593.331C418.446 593.331 414.197 589.082 414.197 583.84C414.197 578.599 418.446 574.349 423.688 574.349C428.929 574.349 433.178 578.599 433.178 583.84C433.178 589.082 428.929 593.331 423.688 593.331Z" fill="white"/>
    <path id="Vector_14" d="M446.564 289.408C446.564 289.408 404.217 290.559 397.224 293.104C390.23 295.648 387.103 313.843 387.103 313.843L419.982 324.178L444.574 322.785L463.082 324.092L452.747 297.027L446.564 289.408Z" fill="#2F2E41"/>
    <path id="Vector_15" d="M444.737 275.513C444.737 275.513 441.951 286.273 448.135 293.893C454.318 301.512 421.552 328.662 421.552 328.662L404.267 325.691C404.267 325.691 408.077 292.627 402.959 284.255C397.842 275.882 444.737 275.513 444.737 275.513Z" fill="#9F616A"/>
    <path id="Vector_16" opacity="0.1" d="M444.737 275.513C444.737 275.513 441.951 286.273 448.135 293.893C454.318 301.512 421.552 328.662 421.552 328.662L404.267 325.691C404.267 325.691 408.077 292.627 402.959 284.255C397.842 275.882 444.737 275.513 444.737 275.513Z" fill="black"/>
    <path id="Vector_17" d="M329.78 590.132L367.919 640.709L341.891 655.905L306.069 597.296L329.78 590.132Z" fill="#9F616A"/>
    <path id="Vector_18" d="M356.532 641.562C356.532 641.562 370.577 625.243 369.951 628.882C369.326 632.521 379.944 663.382 370.065 666.367C360.186 669.352 275.464 677.27 274.299 667.703C273.133 658.136 299.573 651.441 299.573 651.441C299.573 651.441 315.281 636.345 318.763 637.88C322.246 639.416 356.532 641.562 356.532 641.562Z" fill="#2F2E41"/>
    <path id="Vector_19" d="M338.337 638.435L307.874 690.333L284.875 677.014L315.593 634.525L338.337 638.435Z" fill="#9F616A"/>
    <path id="Vector_20" d="M290.248 514.963L299.289 527.757C299.289 527.757 342.389 587.616 337.811 592.449C333.234 597.282 314.172 615.549 304.477 612.009C294.783 608.469 260.34 547.288 260.34 547.288L269.324 511.367L290.248 514.963Z" fill="#2F2E41"/>
    <path id="Vector_21" d="M475.91 502.853C475.91 502.853 466.258 520.863 441.794 526.961C417.33 533.059 391.772 545.526 390.862 545.369C389.952 545.213 387.379 543.834 386.754 547.473C386.128 551.112 379.419 557.452 379.419 557.452C379.419 557.452 352.396 649.281 342.076 649.38C331.756 649.48 310.547 642.088 310.106 639.202C309.666 636.317 341.706 542.541 342.019 540.721L345.772 518.887C345.772 518.887 303.397 525.653 299.445 526.847C295.494 528.041 260.34 547.288 260.34 547.288C260.34 547.288 224.504 521.459 258.023 495.375C291.542 469.291 349.155 450.158 349.155 450.158L369.824 444.344L387.837 443.268L390.49 433.098L433.152 435.559L477.673 454.451L475.91 502.853Z" fill="#2F2E41"/>
    <path id="Vector_22" d="M419.605 296.932C401.252 296.932 386.374 282.053 386.374 263.7C386.374 245.347 401.252 230.468 419.605 230.468C437.958 230.468 452.837 245.347 452.837 263.7C452.837 282.053 437.958 296.932 419.605 296.932Z" fill="#9F616A"/>
    <path id="Vector_23" d="M449.67 290.41L445.673 289.723C445.673 289.723 438.454 317.518 416.122 322.109C416.122 322.109 405.103 308.909 405.574 306.682C406.044 304.454 396.847 292.571 391.957 299.223C387.067 305.876 393.151 423.064 389.043 425.168C384.934 427.271 376.121 429.503 383.214 437.279C390.308 445.054 418.482 455.517 424.722 451.906C430.962 448.296 443.713 417.705 449.229 407.413C454.744 397.122 463.572 362.11 463.572 362.11C463.572 362.11 474.844 323.773 467.908 315.087C460.971 306.402 449.67 290.41 449.67 290.41Z" fill="#D0CDE1"/>
    <path id="Vector_24" d="M417.865 434.681C418.608 442.844 419.88 450.95 421.672 458.949C423.302 465.457 425.199 469.386 427.365 469.219C432.891 468.806 435.402 476.91 436.697 486.253C438.081 496.166 438.081 507.474 438.84 511.47C439.845 516.75 446.275 520.78 459.123 519.597C466.775 518.726 474.285 516.884 481.471 514.116C498.819 507.809 498.305 456.66 495.403 418.707C493.628 395.443 490.96 377.125 490.96 377.125C490.96 377.125 496.229 361.408 497.914 350.635C498.25 348.67 498.418 346.679 498.417 344.686C498.16 335.275 480.98 309.846 470.599 294.006C460.206 278.166 446.029 289.787 446.029 289.787L450.963 304.678C450.963 304.678 443.317 316.477 443.261 327.707C443.205 338.937 424.954 347.041 418.401 352.477C414.282 355.893 414.383 401.493 417.865 434.681Z" fill="#2F2E41"/>
    <path id="Vector_25" d="M403.436 295.108C403.436 295.108 402.238 296.523 396.755 295.833C390.178 295.005 381.136 297.28 379.036 303.559C375.183 315.073 364.323 361.911 364.323 361.911C364.323 361.911 359.803 415.459 357.77 427.286C355.737 439.112 356.746 449.589 354.742 455.801C352.738 462.013 374.529 444.216 382.561 446.533C390.592 448.85 395.752 418.828 394.743 408.351C393.734 397.875 392.881 386.489 395.667 375.728C398.453 364.967 393.514 336.488 393.698 329.963C393.883 323.438 411.408 306.994 403.436 295.108Z" fill="#2F2E41"/>
    <path id="Vector_26" d="M379.922 461.534C379.922 461.534 344.736 480.729 341.369 508.051C338.001 535.373 388.431 481.597 388.431 481.597L379.922 461.534Z" fill="#9F616A"/>
    <path id="Vector_27" d="M359.836 442.159C359.836 442.159 349.055 496.504 332.259 493.617C315.464 490.73 341.641 439.031 341.641 439.031L359.836 442.159Z" fill="#9F616A"/>
    <path id="Vector_28" d="M302.316 679.075C302.316 679.075 310.916 688.983 313.049 687.476C315.181 685.969 320.085 706.482 315.664 710.405C311.243 714.328 294.214 720.768 294.029 727.292C293.844 733.817 248.171 732.523 246.537 725.686C244.902 718.848 252.265 703.255 257.44 700.397C262.614 697.54 281.746 671.243 281.746 671.243C281.746 671.243 296.73 673.432 302.316 679.075Z" fill="#2F2E41"/>
    <path id="Vector_29" opacity="0.1" d="M385.527 494.77C393.687 489.01 416.47 487.582 436.697 486.253C445.572 485.684 453.955 485.126 460.396 484.222C466.603 483.362 472.184 477.691 477.14 469.241C484.653 456.437 490.726 437.237 495.403 418.707C493.628 395.443 490.96 377.125 490.96 377.125C490.96 377.125 496.229 361.408 497.914 350.635C496.726 348.982 495.196 347.603 493.427 346.594C471.972 337.385 451.488 428.016 448.887 442.238C448.842 442.472 448.809 442.696 448.775 442.885C447.514 450.208 433.884 456.471 421.672 458.949C414.148 460.478 407.149 460.579 403.923 458.591C395.45 453.39 369.396 474.208 367.42 474.8C365.445 475.403 373.806 503.064 385.527 494.77Z" fill="black"/>
    <path id="Vector_30" d="M493.423 341.015C493.423 341.015 509.017 348.379 502.165 382.793C495.314 417.208 481.511 475.716 460.402 478.645C439.292 481.573 397.259 480.905 385.531 489.192C373.804 497.479 365.446 469.817 367.421 469.22C369.397 468.623 395.454 447.812 403.926 453.015C412.398 458.217 446.741 449.134 448.774 437.307C450.807 425.481 471.618 331.648 493.423 341.015Z" fill="#2F2E41"/>
    <path id="Vector_31" d="M381.054 324.512L363.916 364.279C363.916 364.279 362.191 363.418 360.186 369.63C358.182 375.842 357.244 381.3 353.733 385.38C350.222 389.46 334.599 447.656 334.13 450.385C333.661 453.114 355.707 462.523 360.633 454.94C365.559 447.357 381.054 324.512 381.054 324.512Z" fill="#2F2E41"/>
    <path id="Vector_32" d="M438.512 263.237C437.238 262.897 437.051 261.206 437.008 259.889C436.78 252.834 432.531 245.594 425.778 243.54C423.186 242.829 420.473 242.68 417.819 243.102C414.031 243.607 410.373 244.827 407.041 246.698C405.282 247.687 403.556 248.878 401.561 249.18C400.244 249.379 394.538 251.038 393.226 251.272C390.341 251.785 387.66 254.366 384.892 253.405C382.244 252.487 381.658 249.058 381.594 246.255C381.448 239.871 386.295 231.034 390.564 226.284C393.803 222.68 398.681 221.016 403.45 220.151C409.02 219.256 414.665 218.913 420.302 219.126C427.934 219.262 435.776 219.851 442.657 223.153C449.539 226.455 455.319 233.026 455.648 240.652C455.717 242.24 455.553 243.835 455.687 245.419C456.013 249.284 458.065 252.775 459.028 256.532C459.716 259.289 459.819 262.159 459.33 264.958C458.84 267.757 457.77 270.423 456.188 272.783C453.634 276.541 449.62 279.94 449.768 284.481L444.23 278.744C443.403 278.113 442.818 277.217 442.572 276.206C442.326 275.195 442.434 274.13 442.878 273.189L444.838 265.544C445.342 264.179 445.401 262.69 445.008 261.289C442.907 256.097 440.635 263.804 438.512 263.237Z" fill="#2F2E41"/>
    <path id="Vector_33" d="M186.854 645.576C187.083 645.201 192.494 636.166 194.37 617.404C196.091 600.191 194.984 571.177 179.938 530.706C151.432 454.035 186.507 392.172 186.865 391.556L185.135 390.552C185.044 390.708 175.993 406.481 170.646 431.596C163.582 464.894 166.154 499.515 178.062 531.403C206.52 607.943 185.363 644.176 185.146 644.534L186.854 645.576Z" fill="#3F3D56"/>
    <path id="Vector_34" d="M198 387.054C190.82 387.054 185 381.234 185 374.054C185 366.874 190.82 361.054 198 361.054C205.18 361.054 211 366.874 211 374.054C211 381.234 205.18 387.054 198 387.054Z" fill="#6C63FF"/>
    <path id="Vector_35" d="M157 435.054C149.82 435.054 144 429.234 144 422.054C144 414.874 149.82 409.054 157 409.054C164.18 409.054 170 414.874 170 422.054C170 429.234 164.18 435.054 157 435.054Z" fill="#3F3D56"/>
    <path id="Vector_36" d="M185 467.054C177.82 467.054 172 461.234 172 454.054C172 446.874 177.82 441.054 185 441.054C192.18 441.054 198 446.874 198 454.054C198 461.234 192.18 467.054 185 467.054Z" fill="#6C63FF"/>
    <path id="Vector_37" d="M151 494.054C143.82 494.054 138 488.234 138 481.054C138 473.874 143.82 468.054 151 468.054C158.18 468.054 164 473.874 164 481.054C164 488.234 158.18 494.054 151 494.054Z" fill="#6C63FF"/>
    <path id="Vector_38" d="M195 536.054C187.82 536.054 182 530.234 182 523.054C182 515.874 187.82 510.054 195 510.054C202.18 510.054 208 515.874 208 523.054C208 530.234 202.18 536.054 195 536.054Z" fill="#3F3D56"/>
    <path id="Vector_39" d="M179 646.054C179 646.054 192 614.054 153 590.054L179 646.054Z" fill="#3F3D56"/>
    <path id="Vector_40" d="M194.988 645.474C194.988 645.474 200.904 611.444 246.696 611.736L194.988 645.474Z" fill="#3F3D56"/>
    </g>
    <defs>
    <clipPath id="clip0">
    <rect width="851" height="746.054" fill="white" transform="matrix(-1 0 0 1 851 0)"/>
    </clipPath>
    </defs>
    </svg>
</div>
</body>
</html>
<script>
 
  async function Location(){
  const api_url = 'https://api.ipdata.co/?api-key=076874e70ff89ab0329a1e75a7267274549cdce77434641981b7751a'
  const response = await fetch(api_url);
  const data = await response.json();
   const {country_code} = data;
 console.log(data)
document.getElementById('countriesList').value = country_code
}
Location()
//form validation
$('.alert').hide()
let business_name = document.getElementById('businessName')
let business_nameerrormessage = document.getElementById('businessNameerrorinfo')
const registration_number = document.getElementById('RegistrationNumber')
const registration_numbererrormessage = document.getElementById('RegistrationNumbererrorinfo')
const email = document.getElementById('email')
const emailerrormessage = document.getElementById('emailnameerrorinfo')
const phone = document.getElementById('phonenumber')
const phoneerrormessage = document.getElementById('phonenumbererrorinfo')
const companyaddress = document.getElementById('companyaddress')
const companyaddresserrormessage = document.getElementById('companyaddresserrorinfo')
const password = document.getElementById('inputPassword')
const passworderrormessage = document.getElementById('inputPassworderrorinfo')
const confirmpassword = document.getElementById('confirmPassword')
const confirmerrormessage = document.getElementById('confirmPassworderrorinfo')
const check = document.getElementById('check')
let password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{10,})/
  
  function validate(){
    if(business_name.value==''){
      $('#businessNameerror').show()
      business_nameerrormessage.innerHTML = "Please enter a Business Name"
      return false
    }
    if(registration_number.value==''){
      $('#RegistrationNumbererror').show()
      registration_numbererrormessage.innerHTML = "Please enter your business registration number"
      return false
    }
     if(email.value==''){
      $('#emailerror').show()
      emailerrormessage.innerHTML = "Please enter an Email address"
      return false
    }
    if(email.value.indexOf("@")== -1){
      $('#emailerror').show()
      emailerrormessage.innerHTML = "Please enter a valid Email address"
      return false
    }
    if(phone.value == ''){
      $('#phonenumbererror').show()
      phoneerrormessage.innerHTML = "Please enter phone number"
      return false
    }
     if(companyaddress.value == ''){
      $('#addresserror').show()
      companyaddresserrormessage.innerHTML = "Please enter your address"
      return false
    }
    if (password_regex.test(password.value) == false){
       $('#inputPassworderror').show()
      passworderrormessage.innerHTML = "Should at least 1 lower and uppercase character and 1 number as well as 1 special character total lenght 10"
      return false
    }
    if (password.value !== confirmpassword.value ){
       $('#confirmPassworderror').show()
      confirmerrormessage.innerHTML = "Password does not match"
      return false
    }
     if(!check.checked){
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'You must agree to the terms first.',
        footer: '<a href>Why do I have this issue?</a>'
        })
     return false;
    }
  }
  </script>
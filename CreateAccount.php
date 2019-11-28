<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
     <script src="sweetalert2.min.js"></script>
     
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
<h2 class='row d-flex justify-content-center mt-3'>Create Individual Account</h2>
<form class='createForms' onsubmit="return validate()" >

  <div class="form-group row">
    <label for="firstName" class="col-sm-2 col-form-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstName"  placeholder='enter your first name'>
      <div class="alert alert-danger mt-2 fade show" disabled id='firstnameerror' role="alert">
          <p id='firstnameerrorinfo'></p>
        </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="lastName" class="col-sm-2 col-form-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="lastName" placeholder="enter your last name">
      <div class="alert alert-danger mt-2 fade show" id='lastnameerror' role="alert">
          <p id='lastnameerrorinfo'></p>
        </div>
    </div>
    </div>

  <div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" placeholder="enter your email">
      <div class="alert alert-danger mt-2 fade show" id='emailnameerror' role="alert">
          <p id='emailnameerrorinfo'></p>
        </div>
    </div>
    </div>
  

  <div class="form-group row">
    <label for="phonenumber" class="col-sm-2 col-form-label">Phone</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="phonenumber" placeholder="enter your phone number">
      <div class="alert alert-danger mt-2 fade show" id='phoneerror' role="alert">
          <p id='phoneerrorinfo'></p>
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
    <label for="dateofbirth" class="col-sm-2 col-form-label">Date of birth</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="dateofbirth" placeholder="enter your date of birth">
      <div class="alert alert-danger mt-2 fade show" id='dateofbirtherror' role="alert">
          <p id='dateofbirtherrorinfo'></p>
        </div>
    </div>
    </div>

   <div class="form-group row">
    <label for="sex"class="col-sm-2 col-form-label">Sex</label>
    <div class="col-sm-10">
    <select class="form-control" id="sex">
      <option>Male</option>
      <option>Female</option>
    </select>
</div>
  </div>

  <div class="form-group row">
    <label for="billingaddress"class="col-sm-2 col-form-label">Billing-Address</label>    
         <div class="col-sm-10">
    <textarea class="form-control" id="billingaddress" rows="3"></textarea>
    <div class="alert alert-danger mt-2 fade show" id='addresserror' role="alert">
          <p id='billingaddresserrorinfo'></p>
        </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputpassword" placeholder="enter your password">
      <div class="alert alert-danger mt-2 fade show" id='inputpassworderror' role="alert">
          <p id='inputpassworderrorinfo'></p>
        </div>
    </div>
    </div>
  
  <div class="form-group row">
    <label for="confirmpassword" class="col-sm-2 col-form-label"> Confirm Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="confirmpassword" placeholder="confirm password">
      <div class="alert alert-danger mt-2 fade show" id='confirmpassworderror' role="alert">
          <p id='inputassworderrorinfo'></p>
        </div>
    </div>
  </div>
  
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="check">
    <label class="form-check-label" for="check">Click to agree with our <a href='#'> terms and conditions</a></label>
    <div class="alert alert-danger mt-2 fade show" id='checkerror' role="alert">
          <p id='checkerrorinfo'></p>
        </div>
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
<img id='young'src='SVG/youngwoman.svg'>
</body>
</html>
<script>
  async function Location(){
  const api_url = 'https://api.ipdata.co/?api-key=076874e70ff89ab0329a1e75a7267274549cdce77434641981b7751a'
  const response = await fetch(api_url);
  const data = await response.json();
   const {country_code,calling_code} = data;
 console.log(data)
document.getElementById('countriesList').value = country_code
}
Location()

// form validation

$('.alert').hide()
let firstname = document.getElementById('firstName')
let firstnameerrormessage = document.getElementById('firstnameerrorinfo')
const lastname = document.getElementById('lastName')
const lastnameerrormessage = document.getElementById('lastnameerrorinfo')
const email = document.getElementById('email')
const emailerrormessage = document.getElementById('emailnameerrorinfo')
const phone = document.getElementById('phonenumber')
const phoneerrormessage = document.getElementById('phoneerrorinfo')
const dob = document.getElementById('dateofbirth')
const doberrormessage = document.getElementById('dateofbirtherrorinfo')
const billingaddress = document.getElementById('billingaddress')
const billingaddresserrormessage = document.getElementById('billingaddresserrorinfo')
const password = document.getElementById('inputpassword')
const passworderrormessage = document.getElementById('inputpassworderrorinfo')
const confirmpassword = document.getElementById('confirmpassword')
const confirmerrormessage = document.getElementById('inputassworderrorinfo')
const check = document.getElementById('check')
const checkederrormessage = document.getElementById('checkerrorinfo')
// regex expressions to be used
let no_number = /^(?=[A-Za-z]{2,})(?!\d)/;
let password_regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{10,})/

function validate(){
    if(firstname.value==''){
      $('#firstnameerror').show()
      firstnameerrormessage.innerHTML = "Please enter a username"
      return false
    }
    if ( no_number.test(firstname.value) == false){
       $('#firstnameerror').show()
      firstnameerrormessage.innerHTML = "Should at least 2 letters long with no numbers"
      return false
    }
    if(lastname.value==''){
      $('#lastnameerror').show()
      lastnameerrormessage.innerHTML = "Please enter a username"
      return false
    }
    if ( no_number.test(lastname.value) == false){
       $('#lastnameerror').show()
      lastnameerrormessage.innerHTML = "Should at least 2 letters long with no numbers"
      return false
    }
    if(email.value==''){
      $('#emailnameerror').show()
      emailerrormessage.innerHTML = "Please enter an Email address"
      return false
    }
    if(email.value.indexOf("@")== -1){
      $('#emailnameerror').show()
      emailerrormessage.innerHTML = "Please enter an Email address"
      return false
    }
    if(phone.value == ''){
      $('#phoneerror').show()
      phoneerrormessage.innerHTML = "Please enter phone number"
      return false
    }
    if(dob.value == ''){
      $('#dateofbirtherror').show()
      doberrormessage.innerHTML = "Please enter your date of birth"
      return false
    }
    if(billingaddress.value == ''){
      $('#addresserror').show()
      billingaddresserrormessage.innerHTML = "Please enter your address"
      return false
    }
     if (password_regex.test(password.value) == false){
       $('#inputpassworderror').show()
      passworderrormessage.innerHTML = "Should at least 1 lower and uppercase character and 1 number as well as 1 special character total lenght 10"
      return false
    }
    if (password.value !== confirmpassword.value ){
       $('#confirmpassworderror').show()
      confirmerrormessage.innerHTML = "Password doe not match"
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
     firstname.addEventListener("keypress",function(){
        $('#firstnameerror').hide()
        console.log(' i dont work')
    });

    
  </script>
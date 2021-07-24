<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine&effect=fire-animation"><!--font-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--icons-->
  
  <title> Tiffin serrvice</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* header */
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
/* header */

/* slide show */

* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 100%;
  padding: 8px 12px;
  position: absolute;
  top: 0%;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: 5.5s ease;
  background-color: #585858;
}

.slideshow-container:hover .overlay {
  opacity: 0.6;
}


.slideshow-container .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 100%; /* Full width */
  padding: 20px; /* Some padding */
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}


/* slide show */

/* Modal image */
.myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  height: 10%;
  width: 10%;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 20%;
  max-width: 700px;
  height: 80%;
  max-height: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}



/* Modal image */


/* Login */


/* Full-width input fields */
input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modallog {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modallog-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
/* Login */
        .selectt { 
            color: #fff; 
            padding: 30px; 
            display: none; 
            margin-top: 30px; 
            width: 60%; 
            background: green 
        }


#feedback {
  max-width: 60%;
  width: 100%;
  margin: 10px auto;
  padding: 20px;
  border: solid 1px #f1f1f1;
  background: #fbfbfb;
  box-shadow: #e6e6e6 0 0 4px ;
  border-radius: 0.25rem;
}

@media (max-width: 720px) {
  #feedback{
    max-width: 90%;
  }
}

@media (max-width: 500px) {
  #feedback{
    padding: 10px;
  }
}

#fh2{
 padding: 2px 15px;
 color: #ff4d4d;
 text-align: center;
 
 
}

@media (max-width: 400px) {
  #fh2{
    font-size: 20px;
  }
}


#fh6 {
 padding: 2px 15px;
 color: #4d0er;
 text-align: center;
 font-weight: normal;
}

@media (max-width: 400px) {
  #fh6{
    font-size: 12px;
  }
}

.pinfo {
 margin: 8px auto;
 font-weight: bold;
 line-height: 1.5;
 color: #0d0d0d;
}
.form-group {
  margin-bottom: 1rem;
}
  
.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 1rem;
  line-height: 1.25;
  font-weight: bold;
  color: #6C6262;
  background-color: #fff;
  background-image: none;
  -webkit-background-clip: padding-box;
          background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
  -webkit-transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s, -webkit-box-shadow ease-in-out 0.15s;
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:focus {
  color: #696060;
  background-color: #fff;
  border-color: #5cb3fd;
  outline: none;
}

.form-control::-webkit-input-placeholder {
  color: #F34949;
  opacity: 1;
}

.form-control::-moz-placeholder {
  color: brown;
  opacity: 1;
}

.form-control:-ms-input-placeholder {
  color: blue;
  opacity: 1;
}

.form-control::placeholder {
  color: white;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: red;
  opacity: 1;
}

.form-control:disabled {
  cursor: not-allowed;
}

select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
}

select.form-control:focus::-ms-value {
  color: green;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
}

.input-group {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
}

.input-group .form-control {
  position: relative;
  z-index: 2;
  -webkit-box-flex: 1;
  -webkit-flex: 1 1 auto;
      -ms-flex: 1 1 auto;
          flex: 1 1 auto;
  width: 1%;
  margin-bottom: 0;
}

.input-group .form-control:focus, .input-group .form-control:active, .input-group .form-control:hover {
  z-index: 3;
}

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}

.input-group-addon,
.input-group-btn {
  white-space: nowrap;
  vertical-align: middle;
}

.input-group-addon {
  width: 45px;
  padding: 0.5rem 0.75rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.25;
  color: #2e2e2e;
  text-align: center;
  background-color: #eceeef;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 0.25rem;
}

.input-group-addon.form-control-sm,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .input-group-addon.btn {
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  border-radius: 0.2rem;
}

.input-group-addon.form-control-lg,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .input-group-addon.btn {
  padding: 0.75rem 1.5rem;
  font-size: 1.25rem;
  border-radius: 0.3rem;
}

.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}

.input-group .form-control:not(:last-child),
.input-group-addon:not(:last-child),
.input-group-btn:not(:last-child) > .btn,
.input-group-btn:not(:last-child) > .btn-group > .btn,
.input-group-btn:not(:last-child) > .dropdown-toggle,
.input-group-btn:not(:first-child) > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:not(:first-child) > .btn-group:not(:last-child) > .btn {
  border-bottom-right-radius: 0;
  border-top-right-radius: 0;
}

.input-group-addon:not(:last-child) {
  border-right: 0;
}

.input-group .form-control:not(:first-child),
.input-group-addon:not(:first-child),
.input-group-btn:not(:first-child) > .btn,
.input-group-btn:not(:first-child) > .btn-group > .btn,
.input-group-btn:not(:first-child) > .dropdown-toggle,
.input-group-btn:not(:last-child) > .btn:not(:first-child),
.input-group-btn:not(:last-child) > .btn-group:not(:first-child) > .btn {
  border-bottom-left-radius: 0;
  border-top-left-radius: 0;
}

.form-control + .input-group-addon:not(:first-child) {
  border-left: 0;
}

table {
  border : 1px solid black;
  border-collapse: collapse;
}

</style>
</head>
<body>
<?php
if(isset($_POST['login'])){
  session_start();
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($email) || !empty($password)) {
    # code...
    $conn = mysqli_connect("localhost","root","","tiffin");
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      die();
    }
    else{
      $queryEmail=mysqli_query($conn,"SELECT * from tiffin where email='$email';");
      if(!mysqli_num_rows($queryEmail)){
        echo"<script>alert('Not registered email');</script>";
      }
      else{
        $queryPass = mysqli_query($conn,"SELECT * from tiffin where email='$email' AND  password='$password';");
        if(mysqli_num_rows($queryPass)){
          $_SESSION['email'] = $email;
          echo"<script>alert('Employer Login!');window.location.href='placeorder.php';</script>";
          
        }
        else{
          echo"'<script>alert('Email or password does not match. Please Enter valid credentials ');</script>'";
        }
      
      }
    } 
  }
  else{echo "All fields are required";}
  mysqli_close($conn);
}
?>

<div class="header">
  <a href="index.php" class="logo"> <img src="LOGO.png" alt="CompanyLogo" style="height: 10%; width: 15%;"></a>
  <div class="header-right" id="myDIV">
    <a class="btn active" href="#home">Home</a>
    <a class="btn " href="#about">About</a>
    <a class="btn " href="#menu">Menu</a>
    <a class="btn " href="#review">Review</a>
    <a class="btn " href="#contact">Contact</a>
    <a class="btn " onclick="document.getElementById('id01').style.display='block'">Log In</a>
  </div>
  <script>
  // Add active class to the current button (highlight it)
  var header = document.getElementById("myDIV");
  var btns = header.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
  }
  </script>
</div>


<div id="id01" class="modallog">
  
  <form class="modallog-content animate" action="placeorder.php" method="POST">


    <div class="container">
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" name="login">Login</button>

    </div>



    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <a href="register.html">Reigster</a>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>





<div id="home">
<!-- slide show start-->

  <div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="slide show4.jpg" style="width:100%">
      <div class="overlay">
        <div class="text" style="font-family: 'Tangerine', serif;"><h1>Welcome to our Service</h1><br><h2>A bite to delight</h2></div>
      </div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="slide show5.jpg" style="width:100%">
      <div class="text" style="font-family: ">Hygenic Food</div>
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="slide show6.jpg" style="width:100%">
      <div class="text">Caption Three</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>

  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
  </div>

  <script>
  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  }
  </script>

  <!-- slide show -->
</div>


<br>
<hr style="width: 70%;">
<hr style="width: 80%;">
<hr style="width: 70%;">
<br>


<div id="about" style="padding-left:20px; text-align: center;">
  <h1>About Us</h1>
  <div>
      <label> 
          <input type="radio" name="colorRadio" onclick="loadWho()"> Who we are</label> 
      <label> 
          <input type="radio" name="colorRadio" onclick="loadEthos()">Our ethos</label> 
      <label> 
          <input type="radio" name="colorRadio" onclick="loadService()"> Our services</label> 
      <label> 
          <input type="radio" name="colorRadio" onclick="loadProcess()"> Process</label> 
  </div> 
  <center>
    <p id="infoabout" style="background-color: orange;">Choose Opitions to know about us</p>
    <script>
    function loadWho() {
      var xhttp;
      if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
        } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("infoabout").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "Who.txt", true);
      xhttp.send();
    }
    function loadEthos() {
      var xhttp;
      if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
        } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("infoabout").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "Ethos.txt", true);
      xhttp.send();
    }
    function loadService() {
      var xhttp;
      if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
        } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("infoabout").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "Service.txt", true);
      xhttp.send();
    }
    function loadProcess() {
      var xhttp;
      if (window.XMLHttpRequest) {
        // code for modern browsers
        xhttp = new XMLHttpRequest();
        } else {
        // code for IE6, IE5
        xhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("infoabout").innerHTML = this.responseText;
        }
      };
      xhttp.open("GET", "Process.txt", true);
      xhttp.send();
    }
    </script>
  </center>
</div>

<br>
<hr style="width: 70%;">
<hr style="width: 80%;">
<hr style="width: 70%;">
<br>


<div id="menu" style="padding-left:20px; text-align: center;">
  <h1>Menu</h1>
  <img class="myImg" src="menu.png" alt="Weekday menu" >
  <img class="myImg" src="menu0.png" alt="Weekend menu">

  <!-- The Modal -->
  <div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

  <script>
    // create references to the modal...
    var modal = document.getElementById('myModal');
    // to all images -- note I'm using a class!
    var images = document.getElementsByClassName('myImg');
    // the image in the modal
    var modalImg = document.getElementById("img01");
    // and the caption in the modal
    var captionText = document.getElementById("caption");

    // Go through all of the images with our custom class
    for (var i = 0; i < images.length; i++) {
      var img = images[i];
      // and attach our click listener for this image.
      img.onclick = function(evt) {
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
      }
    }

    var span = document.getElementsByClassName("close")[0];

    span.onclick = function() {
      modal.style.display = "none";
    }
  </script><br><br>

  
<br>
<hr style="width: 70%;">
<hr style="width: 80%;">
<hr style="width: 70%;">
<br>
<div id="review" style="padding-left:20px; text-align: center;">
  <h1>Review</h1> 
  <script src="https://use.fontawesome.com/a6f0361695.js"></script>

  <h2 id="fh2">WE APPRECIATE YOUR REVIEW!</h2>
  <h6 id="fh6">Your review will help us to improve our web hosting quality products, and customer services.</h6>


  <form id="feedback" action="">
    <div class="pinfo">Your personal info</div>
    
  <div class="form-group">
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input  name="name" placeholder="John Doe" class="form-control"  type="text">
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
      <input name="email" type="email" class="form-control" placeholder="john.doe@yahoo.com">
       </div>
    </div>
  </div>

   <div class="pinfo">Rate our overall services.</div>
    

  <div class="form-group">
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-heart"></i></span>
     <select class="form-control" id="rate">
        <option value="1star">1</option>
        <option value="2stars">2</option>
        <option value="3stars">3</option>
        <option value="4stars">4</option>
        <option value="5stars">5</option>
      </select>
      </div>
    </div>
  </div>

   <div class="pinfo">Write your feedback.</div>
    

  <div class="form-group">
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
    <textarea class="form-control" id="review" rows="3"></textarea>
   
      </div>
    </div>
  </div>

   <button type="submit" class="btn btn-primary">Submit</button>


  </form>  
</div>
<br>
<hr style="width: 70%;">
<hr style="width: 80%;">
<hr style="width: 70%;">
<br>
<div id="contact" style="padding-left:20px; text-align: center;">
  <center><h1>Contact Us</h1>
  
  <button type="button" onclick="loadXMLDoc()" style="width: 20%">Click here to get in touch with us</button>
  <br><br>
  <table id="contactdisplay" style="background-color: yellow;"></table>
  <br><br><br>
  <hr style="width: 70%;">
  <hr style="width: 80%;">
  <hr style="width: 70%;">

  <script>
  function loadXMLDoc() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        myFunction(this);
      }
    };
    xmlhttp.open("GET", "contact.xml", true);
    xmlhttp.send();
  }
  function myFunction(xml) {
    var i;
    var xmlDoc = xml.responseXML;
    var table="<center> <b>We are waitng to get in contact with you!!!</b><center> <br>";
    var x = xmlDoc.getElementsByTagName("contact");
    for (i = 0; i <x.length; i++) { 
      table += "<b>Name:-</b>" +
      x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
      "<br><b> Contact Number:-</b>" +
      x[i].getElementsByTagName("phone")[0].childNodes[0].nodeValue +
      "<br><b> Address:-</b>"+
      x[i].getElementsByTagName("address")[0].childNodes[0].nodeValue +
      "<br><b> Email:-</b>"+
      x[i].getElementsByTagName("email")[0].childNodes[0].nodeValue +
      "<br>";
    }
    document.getElementById("contactdisplay").innerHTML = table;
  }
  </script>
</div>
</center>
</body>
</html>

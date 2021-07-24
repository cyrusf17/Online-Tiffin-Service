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
<html>

<head>
<title>Secured Page</title>
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
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}
</style>
</head>
<?php

// Inialize session
session_start();


// Check, if username session is NOT set then this page will jump to login page
if(empty($_SESSION['email'])) {
echo"<script>alert('Create an account to proceed');window.location.href='register.php';</script>";
}

?>

<body onload="getWelcome()">
<div class="header">
  <a href="placeorder.php" class="logo"> <img src="LOGO.png" alt="CompanyLogo" style="height: 10%; width: 15%;"></a>
  <div class="header-right" id="myDIV">
  	<a class="btn " href="#">Happy Eating <b><?php echo $_SESSION['email']; ?></b></a>
    <a class="btn " href="#orders">Myorders</a>
    <a class="btn " href="logout.php">Logout</a>
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
<div id="about" style="padding-left:20px; text-align: center;">
  <h1>Fixed Menu</h1>
  <div>
   <script>
      function getWelcome(){
           var x="";  
         var ajaxRequest = new XMLHttpRequest();
         ajaxRequest.onreadystatechange = function(){
                     if(ajaxRequest.readyState == 4){
               if(ajaxRequest.status == 200){
                  var jsonObj = JSON.parse(ajaxRequest.responseText);
                  var rArray = jsonObj.company;
                  for(var i=0; i<=rArray.length; i++){
                   x+="Tiffin Number: "+rArray[i].name+"<br> Tiffin Name: "+rArray[i].ceo+"<br> Food content:"+ rArray[i].numberOfEmployees+" <br>Cost: Rs."+rArray[i].rating+"<br><br><br>";
                  document.getElementById("welcome").innerHTML = x;
                  }                  
               }
               else{
                  console.log("Status error: " + ajaxRequest.status);
               }
            }
            else{
               console.log("Ignored readyState: " + ajaxRequest.readyState);
            }               
         }
         ajaxRequest.open('GET', 'company.json');
         ajaxRequest.send();
      }  
   </script> 
   <div id="welcome"></div>
   <br><br><br>
   <script type="text/javascript">
   	//ARRAY
var eventEquipmentArray = new Array();
eventEquipmentArray["15 Inch Speakers"] = 150;
eventEquipmentArray["18 Inch Subwoofer"] = 100;
eventEquipmentArray["LED Par Cans"] = 200;
eventEquipmentArray["Smoke Machine"] = 50;
eventEquipmentArray["Moving Head"] = ;
eventEquipmentArray["4 Gun Laser System"] = 5;
eventEquipmentArray["Red Gun Laser System"] = 5;
eventEquipmentArray["1500W Strobes"] = 10;
eventEquipmentArray["Mirror LED Lighting"] = 5;

//CHECKBOX - EVENT EQUIPMENT
function getEventEquipment() {
  var EventEquipment = 0;
  var theForm = document.forms["quote"];
  var selectedEquipment = theForm.elements["selectedEquipment"];

  for (var i = 0; i < selectedEquipment.length; i++) {
  	if(selectedEquipment[i].checked){
    	EventEquipment += eventEquipmentArray[selectedEquipment[i].value] || 0;
    }
  }

  return EventEquipment;
}

//DIV - TOTAL PRICE TEST
function getTotals() {
  //var totalPrice = getEventDuration() + getEventSuburb() + getEventEquipment();
  var totalPrice = getEventEquipment();
  var totalPriceDIV = document.getElementById("totalPrice");
  totalPriceDIV.innerText = "Total: $ " + totalPrice;
}
   </script>
   <form id="quote">
  <p>
    <label>
      <input type="checkbox" name="selectedEquipment" value="15 Inch Speakers" id="selectedEquipment_0" onChange="getTotals()" /> Tiffin 1</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="18 Inch Subwoofer" id="selectedEquipment_1" onChange="getTotals()" /> Tiffin 2</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="LED Par Cans" id="selectedEquipment_2" onChange="getTotals()" /> Tiffin 3</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="Smoke Machine" id="selectedEquipment_3" onChange="getTotals()" /> Smoke Machine</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="250W Moving Head" id="selectedEquipment_4" onChange="getTotals()" /> 250W Moving Head</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="Mirror LED Lighting" id="selectedEquipment_5" onChange="getTotals()" /> Mirror LED Lights</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="4 Gun Laser System" id="selectedEquipment_6" onChange="getTotals()" /> 4 Gun Laser Light</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="Red Gun Laser System" id="selectedEquipment_7" onChange="getTotals()" /> Red Laser Star Light</label>
    <br />
    <label>
      <input type="checkbox" name="selectedEquipment" value="1500W Strobes" id="selectedEquipment_8" onChange="getTotals()" /> 1500W Strobes</label>
    <br />
  </p>

  <div id="totalPrice" style="color: red; text-align: center; font-size: 18px;"></div>
  <button type="submit"> Place Order</button>

</form>
  </div> 

<div id="about" style="padding-left:20px; text-align: center;">
  <h1>Your Orders</h1>
<center>  <table style="border : 1px solid black;">
<tr style="border : 1px solid black;">
<th>Id</th>
<th>Cost</th>
<th>Day of Dilevery</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "tiffin");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, username, password FROM order";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
. $row["password"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

</center>

</body>

</html>
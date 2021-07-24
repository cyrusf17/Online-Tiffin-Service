<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=email], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="register.php" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" id="email" required>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" id="name" required>

    <label for="psw"><b>Password</b></label>
    <input name="password" id="password" placeholder="Password" type="password" size="15" maxlength="100" onkeyup="return passwordChanged();" required>
    <span id="strength"></span><br>

    <label for="rpassword"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="rpassword" id="rpassword" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Address" name="address" id="address" required>
    <hr>

    <button type="submit" name="register" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="index.php">Sign in</a>.</p>
  </div>
</form>


<script language="javascript">
    function passwordChanged() {
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        var pwd = document.getElementById("password");
        if (pwd.value.length == 0) {
            strength.innerHTML = 'Type Password';
        } else if (false == enoughRegex.test(pwd.value)) {
            strength.innerHTML = 'More Characters';
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:green">Strong!</span>';
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange">Medium!</span>';
        } else {
            strength.innerHTML = '<span style="color:red">Weak!</span>';
        }
    }
</script>
<?php

if(isset($_POST['register'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $rpassword = $_POST['rpassword'];
  


  if ($password!=$rpassword) {
    # code...
    echo"<script>alert('password does not match');window.location.href='register.php';</script>";
  }else{
    if (!empty($name)|| !empty($email)|| !empty($password) || !empty($address)) 
    {
      # code...
      $conn = mysqli_connect("localhost","root","","tiffin");
      if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
      }
      else
      {
        $SELECT="SELECT email from tiffin where email=? Limit 1";
        $INSERT="INSERT into tiffin values ('$name', '$email', '$password', '$address')";
        if (mysqli_query($conn, $INSERT)) {
          echo"<script>alert('New record created successfully');window.location.href='index.php';</script>";
          # code...
        } else {
          echo"<script>alert('This email is already registered');window.location.href='register.php';</script>";
          # code...
        }
        mysqli_close($conn);
      }
    }
    else
      {
        echo"<script>alert('All fields in registration form need to be filled');window.location.href='register.php';</script>";
      } 
  }
} 
?>
</body>
</html>
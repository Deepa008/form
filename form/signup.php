<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];
  $psw= $_POST["psw"];
  $psw-repeat=$_POST["psw_repeat"];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            echo<span style='color:red;'>"Please Enter Valid Email ID"</span>;
        }
        if(strlen($psw) < 6) {
            $psw_error = "Password must be minimum of 6 characters";
        }       
        
        if($psw != $psw_repeat) {
            $psw-repeat_error = "Password and Confirm Password doesn't match";
        }
}


?>
<!DOCTYPE html>
<html>
    <style><form>
        * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password] {
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

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}




/* Extra styles for the cancel button */
.cancelbtn {
  padding: 10px 10px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn {
  float: left;
  width: 20%;
  
}
        .signupbtn {
            float: right;
             width: 20%;
            
        }

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 50%;
  }
}</style><body>
<form action="validate.php" style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up</h1>
   
    <hr>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <pre><button type="button" class="cancelbtn">Cancel</button></pre>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
    </form></body></html>
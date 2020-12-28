

<?php

include("includes/functions.php");
include("includes/db.php");

?>

<?php

include("head.php");

?>


<br><br>
<br><br>
<br><br>

<form name = "signin" action="connection.php" method="post" onSubmit = "return validation()">
<table width="450" border = 0 cellspacing="8" cellpadding="8" align = "center">
  <tr>
    <td> First Name  </td>
    <td><input name="fname" id = "fid" type="text" class = "in" size="25" maxlength="15" placeholder = "First name" onblur = "alpha()" required/>
</td> 
  </tr>
  <tr>
    <td> Last Name</td>
    <td><input type="text" id = "lid" name="lname" class = "in" placeholder = "Last name"size="25" maxlength="15" onblur = "alphabetic()"required/>
  </td>
  </tr>
    <tr>
    <td> Gender </td>
    <td> Male <input type="radio" name="g" value = "male"/> &nbsp;Female <input type="radio" name="g"  value ="female" required/></td>
  </tr>

  <tr> 
    <td>Contact no</td>
    <td><input type="text" name="contact" id = "cid" class = "in" size="25" placeholder = "Contact no" maxlength="10" onblur = "num()" required/>
</td>
  </tr>
  <tr>
    <td>Email Id</td>
    <td><input type="email" id = "eid" name="email" class = "in" size="25" placeholder = "Email Id" maxlength="40" onblur = "validateEmail()" required/>
    <span id="email_error" class="error"></span>

</td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" id="password" name="password" value="" placeholder="Password"minlength="8" "
     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
     
   </td>
  </tr>
  <tr>
    <td>Confirm Password</td> 
    <td><input type="password" id="password" name="c_password" value="" placeholder="Password"minlength="8" "
     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
     
   </td> 
  


  
</td>
  </tr>
  <tr>

    <td>&nbsp;</td>
    <td><input type="submit" name = "submit" value = " Sign in " class = "button"/> 
<input name="clear" type="reset" value = "  Clear  " class = "button"/></td>
  </tr>
</table>
</form>

<script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
}



</script>

     </div><div id="footer" align="Center">Greenleaf Nursery Shop</a>. 2020 Copyright All Rights Reserved</div>
</body>
</html>
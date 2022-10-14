<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register @ IT Demo Day</title>
        <link rel = "stylesheet" type = "text/css" href = "css/login.css">  
    </head>
    <body>
    <div class="logo">
            <center>
            <img src="images/logo-flex-white.PNG" alt="">
            </center>
        </div> 
    <?php 
        // including connection.php for making connection with database and checking if user is not logged then navigating it to login screen
        include('connection.php');
         
        ?>
        <script type="text/javascript">
            var clickTag = "https://www.google.com";
            function productsButtonTapped() {
              document.getElementById("products").scrollIntoView();
            }
        </script>

            <?php
                
                include('connection.php');
            ?>

<?php  
 include('connection.php');  
// define variables to empty values  
$nameErr = $emailErr = $phoneErr = $cityErr = $addressErr = $provinceErr = $passwordErr = $confirm_passwordErr = "";  
$name = $email = $phone = $city = $address = $province = $password = $confirm_password = "";  
  

//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    
    if (empty($_POST["name"])) {  
        $nameErr = "Name is required";  
   } else {  
       $name = input_data($_POST["name"]);  
           // check if name only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",$name)) {  
               $nErr = "Only alphabets and white space are allowed";  
           }  
   }


if (empty($_POST["email"])) {  
    $studentEmail1Err = "Email is required";  
} else {  
   $email = input_data($_POST["email"]);  
       // check if email has correct format  
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
}

// phone validation
if (empty($_POST["phone"])) {  
  $phoneErr = "Phone number is required";  
} else {  
 $phone = input_data($_POST["phone"]);  
}


  //address validations
  if (empty($_POST["address"])) {  
    $addressErr = "Address is required";  
} else {  
   $address = input_data($_POST["address"]);  
}

 //password validations
 if (empty($_POST["password"])) {  
  $passwordErr = "Password is required";  
} else {  
 $password = input_data($_POST["password"]);  
}

//confirm password validations
if (empty($_POST["confirm_password"])) {  
  $confirm_passwordErr = "Confirm Password is required";  
} else {  
 $confirm_password = input_data($_POST["confirm_password"]);  
}

if ($confirm_password != $password) {
  $confirm_passwordErr = "Confirm Password doesn't match with password";  
}

      
        if($nameErr == "" 
        && $emailErr == "" 
        && $phoneErr == "" 
        && $addressErr == "" 
        && $cityErr == "" 
        && $passwordErr == ""
        && $confirm_passwordErr == ""
        && $provinceErr == "" && $name != "") {
                $nullvalue = NULL;
          $sql = "insert into users(name, email, phone, address, password, picture) 
 VALUES ( '$name', '$email', '$phone', '$address', '$city', '$province','$password', '$nullvalue')";
 // to prevent sql injection
 if ($db->query($sql) === TRUE) {
  $result = $db->query($sql);
  $id = $db->insert_id;
  session_start();
                $_SESSION["loggedIn"] = "true";
                $_SESSION["email"] = $email;
                $_SESSION["id"] = $id;
                $_SESSION["userName"] = $name;
                $_SESSION["type"] = "user";
                
                $type = "user";
                $redirect = "AccountSummary.html";
                header("Location: $redirect");
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}
       

        }

}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?> 

        <div id="frm">
        <strong class="title">Conestoga Finance</strong>
            <h1>Sign In</h1> 
          <!-- action="/action_page.php" -->
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
            <label for="name">Name :</label><span class="error">* <?php echo $nameErr; ?> </span><br />
            <input type="text" id="name" name="name" placeholder="Name">
            

            <label for="email">Email :</label><span class="error">* <?php echo $emailErr; ?> </span><br />
            <input type="email" id="email" name="email" placeholder="Email" >

            <label for="phone">Phone number :</label><span class="error">* <?php echo $phoneErr; ?> </span><br />
            <input type="text" id="phone" name="phone" placeholder="XXX-XXX-XXXX">

            <label for="address">Address:</label><span class="error">* <?php echo $addressErr; ?> </span><br />
            <input type="text" id="address" name="address"  placeholder="Address">
            
            <label for="password">Password :</label><span class="error">* <?php echo $passwordErr; ?> </span><br />
            <input type="password" id="password" name="password"  placeholder="Password">
          
            <label for="confirm_password">Confirm Password :</label><span class="error">* <?php echo $confirm_passwordErr; ?> </span><br />
            <input type="password" id="confirm_password" name="confirm_password"  placeholder="Confirm Password">
          
            <input type="submit" name="submit" value="Submit">
              
        </form>

    </div>

    </body>
</html>    

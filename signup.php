<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register @ IT Demo Day</title>
        <link rel="stylesheet" href="styles/registerStyles.css">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
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

        <h3>Fill below form to buy stuff:</h3>
          <!-- The Modal -->
 <div id="myModal" class="modal">

  <!-- Receipt model content -->
  <div class="modal-content">
    <p id="receiptData">
    
    </p>
    <a target="_self" href="index.php" class="shop">
      <div class="desc"><u>Home</u></div>
  </a>
  </div>

</div> 

<?php  
 include('connection.php');  
// define variables to empty values  
$teamNameErr = $studentName1Err = $studentName2Err = $studentEmail1Err = $studentEmail2Err = $collegeNameErr = $cityErr = $addressErr = $provinceErr = "";  
$teamName = $studentName1 = $studentName2 = $studentEmail1 = $studentEmail2 = $collegeName = $city = $address = $province = "";  
  

//Input fields validation  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    
    if (empty($_POST["teamName"])) {  
        $teamNameErr = "Team Name is required";  
   } else {  
       $teamName = input_data($_POST["teamName"]);  
           // check if name only contains letters and whitespace  
           if (!preg_match("/^[a-zA-Z ]*$/",$teamName)) {  
               $teamNameErr = "Only alphabets and white space are allowed";  
           }  
   }
   
   if (empty($_POST["studentName1"])) {  
    $studentName1Err = "Student Name 1 is required";  
} else {  
   $studentName1 = input_data($_POST["studentName1"]);  
       // check if name only contains letters and whitespace  
       if (!preg_match("/^[a-zA-Z ]*$/",$studentName1)) {  
           $studentName1Err = "Only alphabets and white space are allowed";  
       }  
}
  
if (empty($_POST["studentName2"])) {  
    $studentName2Err = "Student Name 2 is required";  
} else {  
   $studentName2 = input_data($_POST["studentName2"]);  
       // check if name only contains letters and whitespace  
       if (!preg_match("/^[a-zA-Z ]*$/",$studentName2)) {  
           $studentName2Err = "Only alphabets and white space are allowed";  
       }  
}

if (empty($_POST["studentEmail1"])) {  
    $studentEmail1Err = "Student Email 1 is required";  
} else {  
   $studentEmail1 = input_data($_POST["studentEmail1"]);  
       // check if email has correct format  
       if (!filter_var($studentEmail1, FILTER_VALIDATE_EMAIL)) {
        $studentEmail1Err = "Invalid email format";
      }
}

if (empty($_POST["studentEmail2"])) {  
    $studentEmail2Err = "Student Email 2 is required";  
} else {  
   $studentEmail2 = input_data($_POST["studentEmail2"]);  
       // check if email has correct format  
       if (!filter_var($studentEmail2, FILTER_VALIDATE_EMAIL)) {
        $studentEmail2Err = "Invalid email format";
      }
}

   //city validations
   if (empty($_POST["city"])) {  
    $cityErr = "City is required";  
} else {  
   $city = input_data($_POST["city"]);  
       // check if city only contains letters and whitespace  
       if (!preg_match("/^[a-zA-Z ]*$/", $city)) {  
           $cityErr = "Only alphabets and white spaces are allowed";  
       }  
} 

  //address validations
  if (empty($_POST["address"])) {  
    $addressErr = "Address is required";  
} else {  
   $address = input_data($_POST["address"]);  
}

  //college name validations
  if (empty($_POST["collegeName"])) {  
    $collegeNameErr = "College Name is required";  
} else {  
   $collegeName = input_data($_POST["collegeName"]);  
}

  //college province validations
  if (empty($_POST["province"])) {  
    $provinceErr = "College province is required";  
} else {  
   $province = input_data($_POST["province"]);  
}


      
        if($teamNameErr == "" && $studentEmail1Err == "" 
        && $studentEmail2Err == "" 
        && $studentName1Err == "" 
        && $studentName2Err == "" 
        && $collegeNameErr == "" 
        && $addressErr == "" 
        && $cityErr == "" 
        && $provinceErr == "" && $teamName != "") {
            echo "<script>document.getElementById('myModal').style.display = 'block';
            var receiptData = document.getElementById('receiptData');
            receiptData.innerHTML = `<div id='invoice-POS'>
            <div class='info'> 
                      <h1>Confirmation Receipt</h1>
                    </div>
                      <div id='mid'>
                        <div class='info'>
                          <h2>IT Demo Day</h2>
                          <p> 
                              You are successfully registered for IT Demo Day. Please find below if everything is correct.
                          </p>
                        </div>
                      </div><!--End Invoice Mid-->
                      
                      <div id='bot'>
                  
                                      <div id='table'>
                                          <table>
                                              <tr class='tabletitle'>
                                                  <td class='Rate'><h2>Team Name: </h2></td>
                                                  <td class='payment'><h2>$teamName</h2></td>
                                              </tr>
                  
                                              <tr class='tabletitle'>
                                                  <td class='Rate'><h2>Student 1 Name:</h2></td>
                                                  <td class='payment'><h2>$studentName1</h2></td>
                                              </tr>
                  
                                              <tr class='tabletitle'>
                                                <td class='Rate'><h2>Student 2 Name:</h2></td>
                                                <td class='payment'><h2>$studentName2</h2></td>
                                              </tr>
            
                                              <tr class='tabletitle'>
                                                <td class='Rate'><h2>Student 1 Email:</h2></td>
                                                <td class='payment'><h2>$studentEmail1</h2></td>
                                              </tr>

                                              <tr class='tabletitle'>
                                                <td class='Rate'><h2>Student 2 Email:</h2></td>
                                                <td class='payment'><h2>$studentEmail2</h2></td>
                                              </tr>

                                              <tr class='tabletitle'>
                                                <td class='Rate'><h2>College Name:</h2></td>
                                                <td class='payment'><h2>$collegeName</h2></td>
                                              </tr>
                                              
                                              <tr class='tabletitle'>
                                                <td class='Rate'><h2>College Address:</h2></td>
                                                <td class='payment'><h2>$address</h2></td>
                                              </tr> 

                                              <tr class='tabletitle'>
                                                <td class='Rate'><h2>College City:</h2></td>
                                                <td class='payment'><h2>$city</h2></td>
                                              </tr>

                                              <tr class='tabletitle'>
                                                <td class='Rate'><h2>College Province:</h2></td>
                                                <td class='payment'><h2>$province</h2></td>
                                              </tr>

                                          </table>
                                      </div><!--End Table-->
                  
                                      <div id='legalcopy'>
                                          <p class='legal'><strong>Thank you for your time!</strong> See you again.</p>
                                      </div>
                  
                                  </div><!--End InvoiceBot-->
                    </div>`;
            </script>";       
          // preparing query
          $stmt = $con->prepare("insert into teams(studentName1, studentName2, teamName, collegeName, collegeAddress, collegeCity, collegeProvince, studentEmail1, studentEmail2) 
          VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?)");
          // to prevent sql injection
          $stmt->bind_param("sssssssss", $studentName1, $studentName2, $teamName, $collegeName, $address, $city, $province, $studentEmail1, $studentEmail2);

// executing query

$stmt->execute();

        }

}  
function input_data($data) {  
  $data = trim($data);  
  $data = stripslashes($data);  
  $data = htmlspecialchars($data);  
  return $data;  
}  
?> 

        <div class="formBG">
          <!-- action="/action_page.php" -->
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
          <label >Team Details:</label><br><br>  
          <label for="teamName">Team Name:</label><span class="error">* <?php echo $teamNameErr; ?> </span><br />
            <input type="text" id="teamName" name="teamName" placeholder="Team Name">
            

            <label for="studentName1">Student Name 1:</label><span class="error">* <?php echo $studentName1Err; ?> </span><br />
            <input type="text" id="studentName1" name="studentName1" placeholder="Student Name">
            

            <label for="studentEmail1">Student Email 1:</label><span class="error">* <?php echo $studentEmail1Err; ?> </span><br />
            <input type="email" id="studentEmail1" name="studentEmail1" placeholder="Student Email" >
            
            <label for="studentName2">Student Name 2:</label><span class="error">* <?php echo $studentName2Err; ?> </span><br />
            <input type="text" id="studentName2" name="studentName2" placeholder="Student Name">
            

            <label for="studentEmail2">Student Email 2:</label><span class="error">* <?php echo $studentEmail2Err; ?> </span><br />
            <input type="email" id="studentEmail2" name="studentEmail2" placeholder="Student Email" >

            <label >College Details:</label><br><br>

            <label for="collegeName">College Name:</label><span class="error">* <?php echo $collegeNameErr; ?> </span><br />
            <input type="text" id="collegeName" name="collegeName" placeholder="College Name">

            <label for="address">Address:</label><span class="error">* <?php echo $addressErr; ?> </span><br />
            <input type="text" id="address" name="address"  placeholder="College Address">
          
            <label for="city">City:</label><span class="error">* <?php echo $cityErr; ?> </span><br />
            <select id="city" name="city">
                <option value="default">----- Select -----</option>
                <option value="Toronto">Toronto</option>
                <option value="Brampton">Brampton</option>
                <option value="Kitchener">Kitchener</option>
                <option value="Waterloo">Waterloo</option>
            </select>
            
            
            <label for="province">Province</label><span class="error">* <?php echo $provinceErr; ?> </span><br />
            <input type="text" id="province" name="province" placeholder="Province">
            
            <input type="submit" name="submit" value="Submit">
              
        </form>


    </div>

    </body>
</html>    

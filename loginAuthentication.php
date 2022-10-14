<html>
<head>  
        <title>Login</title>  
    </head>  
    <body>  
<?php      
        include('includes/db_connection.php');  
        $username = $_POST['username'];  
        $password = $_POST['password'];  
          
           
            // creating query to fetch data from datavbase and checking if user exists or not
            $sql = "select * from users where email = '$username' and password = '$password'";
            $result =  $db->query($sql);
            if($result->num_rows > 0) { // if user exists then starting a session and storing data into session and moving user to desired page according to the user type
           while($row = $result->fetch_assoc()) {
                session_start();
                $_SESSION["loggedIn"] = "true";
                $_SESSION["email"] = $username;
                $_SESSION["id"] = $row["id"];
                $_SESSION["userName"] = $row["name"];
                $_SESSION["type"] = $row["type"];
                
                $type = $row["type"];
                $redirect = "AccountSummary.html";
                header("Location: $redirect");
            }
        } else {  
                // showing error if user doesn't exist and navigating user back to the login page
                echo '<script>if(confirm("User not found!")){window.location.href = "login.php"} else {window.location.href = "login.php"}
                </script>';
        }     
            
    ?>  
    </body>
    </html
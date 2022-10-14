<html>  
    <head>  
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login @ Conestoga Finance</title>  
        <link rel = "stylesheet" type = "text/css" href = "css/login.css">  
    </head>  
    <body> 
        <div class="logo">
            <center>
            <img src="images/logo-flex-white.PNG" alt="">
            </center>
        </div> 
        <center class="modify">
        <?php

            $dat = new DateTime('now', new DateTimeZone('Canada/Eastern'));
            $date=$dat->format('H');
            if($date < 12) 
            echo "Good morning!"; 
            else if($date < 17) 
            echo "Good afternoon!";
            else if($date<20)
            echo "Good evening!"; 
            else 
            echo "Good evening!"; 

        ?>
        </center>
        <div id = "frm">  
        <strong class="title">Conestoga Finance</strong>
            <h1>Login</h1>  
            <form name="f1" action = "AccountSummary.html" onsubmit = "return validation()">  <!-- creating a form with post method -->
                  
                    <!-- admin credentials email: admin@admin.com pwd admin11 -->
                    <label> Email: </label>  
                    <input type = "email" id ="user" name  = "user" placeholder="Email"/>  
                    <!-- enter Userid  -->
                    <label> Password: </label>  
                    <input type = "password" id ="pass" name  = "pass" placeholder="**********" />  
                    <!-- enter password -->
                    <input type =  "submit" id = "btn" value = "Login" />  
                                      
            </form>  
        </div>  
        <!-- using javascript for form validation and alert to show errors -->
        <script>  
                function validation()  
                {  
                    var id=document.f1.user.value;  
                    var ps=document.f1.pass.value;  
                    if(id.length=="" && ps.length=="") {  
                        alert("Email and Password fields are empty");  
                        return false;  
                    }  
                    else  
                    {  
                        if(id.length=="") {  
                            alert("Email field is empty");  
                            return false;  
                        }   
                        if (ps.length=="") {  
                        alert("Password field is empty");  
                        return false;  
                        }  
                    } 

                    if(id!="admin@admin.com" || ps!="admin11") {  
                        alert("Invalid email or password");  
                        return false;  
                    }   
                    return true;
                }  
            </script>  
    </body>     
    </html>  
<?php

include "connection.php";
include "header.php";

?>

<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <meta charset="utf-8">
        <title>Account Summary</title>
        <style>
            body {
            background-color: white;
            margin: 0 10%;
            font-family: sans-serif;
            }
    
    main{
      height:80vh;
    }
    .saving-container{
      margin:10px 0;
      width:100%;
      border:1px lightgray solid; 
    }
    .saving-container a{
        color:#8a8a8a;
        text-decoration:none; 
    }
    </style>
    <link rel="stylesheet" href="styles/style.css">


    </head>
    <body>
    
     <main>
      <div>    
      <div class="interac-container"> 


      <div class="account-container container">
      <h1>Account Summary</h1>
      
     
     <div class="saving-container">
      <h2>
        <a href="savingAcc.php">Account Number: 9537668800</a>
        </h2>
        
      <div class="balance"><a href="savingAcc.php">$3120</a>
        
      </div>
     </div>
     <div class="saving-container">

      <h2>Account Number: 9537668800</h2>
      <div class="balance">$3120</div>
     </div>
  </div>
   </main>
 
     </body>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>

<?php 
include "connection.php";
include "header.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Details</title>
    <link rel="stylesheet" href="styles/style.css">
    <style>
        table{
            width:100%;
        }
        .payed{
            font-size:1.75rem;
        }
        .date{
            border-bottom:1px #8a8a8a solid;       
        }
        .onetransaction{
            margin:0 0 10px 0;
        }
    </style>
</head>
<body>
    <div class="interac-container">
        <h1>Transactions</h1>
    <table>


    <?php

$sql = 'SELECT * FROM account WHERE saving';
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        
 
?>
    <div class="onetransaction">

    
    <tr>
        <td class="date" colspan="2"><?echo $row['date'] ?></td>
    </tr>
    <tr>
    <td><span class="payed"><?echo $row['payTo']?></span>
         <br>
<span class="transactionType"><?echo $row['transactionType']?></span></td>
    <td><?echo $row['ammount']?></td>
    </tr>
        </div>
<?php
    }
}
        ?>
    </table>
    </div>

    
</body>
</html>
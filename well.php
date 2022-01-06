
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FB Anonymous Message</title>
    <link rel="stylesheet" href="home2.css">
    <style type="text/css" > 
     msg {
       color: red;
       font-size:35px;
    background-color: grey;
    border-radius:10px;
    font-family: sans-serif;
     }
     msg1{
        color: green;
    font-size:35px;
    background-color: grey;
    border-radius:10px;
    font-family: sans-serif;
     }
     msg2{
        color: white;
    font-size:35px;
    background-color: grey;
    border-radius:10px;
    font-family: sans-serif;
     }
    </style>
</head>
<body>
<a href="home.php"  ><button  style="color: red; background-color: black;" >BACK</button></a>
  <center>
    <div class="box">
  
        <br>
        <h1>WELLCOME !!!</h1>
        <h2>Write your anonymous message to your friend</h2>
        <br><br><br>
    <form action="well.php" method="post">
        <input type="text" placeholder="type your message" class="input" name="input" >
        <br><br><br><br><br>
        <button class="btn" name="submit">SEND</button>
        <br><br>
    </form>
    </div>
    <br>
  </center>
</body>
</html>

<?php

// else 
// {
// echo 
// "<script type= 'text/javascript'>
//     alert('Error: " . $sql . "<br>" . $conn->error."');
// </script>";
// }


// header('location:well.php');
// $data = $_POST ["input"];  

 include_once 'well.php';

if (empty ($_POST["input"])) {  
    echo "<msg2>";
    $errMsg = " Enter your message.";  
             echo $errMsg; 
    echo "</msg2>"; 
} else {  
    $data = $_POST["input"];  




    if (preg_match ("/^[a-zA-z]*$/", $data) ){
        echo "<msg1>";
      $Msg = "Message sent";
      echo $Msg;
      echo "</msg1>";
     
       
    }
        
    
    
    if (!preg_match ("/^[a-zA-z]*$/", $data) ){
        
    
    
       
        $ErrMsg = "Text is not valid.Text should contain alphabets only.";  
        echo "<msg>";
         echo $ErrMsg;  
         echo "</msg>";
    
                // if(isset($_POST["submit"])){
    
        
                //     echo "
                //     <script type= 'text/javascript'>
                //         alert('Mesage not sent successfully');
                //     </script>";
                    
    } 
} 









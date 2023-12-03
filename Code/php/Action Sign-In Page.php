<?php

if(isset($_POST["subButton"])){

    $email=$_POST["email"];
    $p=$_POST["password"];

    //include connection object
    require_once("../Configuration File/config.php");

    //sql query
    $sql="SELECT * FROM userDetails WHERE Email='$email' AND Password='$p' ";

    //include sql query into connection object
    $result=mysqli_query($co,$sql);                                                                                                  

    $row=mysqli_fetch_array($result);

    $userName=$row["Name"];
    $userEmail=$row["Email"];
    $userPassword=$row["Password"];
    $userType=$row["UserType"];
            
            if($userType=='Admin'){
                
                //open Admin Page
                header("location: Admin Page.php");

            }//end if
            else if($userType=='Customer'){

                //open User Page
                header("location: User Page.php");

            }//end else if
    
    //set session 
    session_start();       
    $_SESSION["Name"]=$userName;

    //set cookie
    setcookie($userEmail,$userPassword, time() + 60*60*5, "/");
    
            
         
    //close connection object
    $co->close();
}//end if

?>

<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Page</title>
    <link type="text/css" rel="stylesheet" href="../css/Common Page Styles.css">
    <link type="text/css" rel="stylesheet" href="../css/Delete Land Details Styles.css"
</head>
<body class="common-page">
    
    <div class="common-page-container">
<!---------------------------------          header        ---------------------------------------->
        <div class="header">
            <div class="logo">
                <p>DREAM LANDS</p>
            </div>
            <div class="navigation-buttons">
                <a href="../html/Home Page.html" ><input class="nav-button" type="button" value="HOME"></a>
                <a href="../html/Account Page.html" ><input class="nav-button" type="button" value="ACCOUNT"></a>
                <a href="#" ><input class="nav-button" type="button" value="ABOUT US"></a>
                <a href="#" ><input class="nav-button" type="button" value="CONTACT US"></a>
                <a href="#" ><input class="nav-button" type="button" value="CUSTOMER HELP"></a>
            </div>
        </div>
<!-------------------------------            content         ----------------------------------------->
        <div class="content">
            <div class="admin-page-header">
                WELCOME &nbsp<?php  echo "<span>" .$_SESSION['Name']."</span>"; ?>&nbsp TO DELETE LAND DETAILS PAGE
            </div>
            <div class="sub-content">
                <div class="delete-lands-portal">
                    <form class="delete-land-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
                    <input class="delete-land-input" type="text" placeholder="Enter Land Number" name="landNumber" pattern="DL/[A-Z]{2,3}/[A-Z]{2}/[0-9][0-9][0-9][0-9]" title="The format of Land Number is 'DL/[A-Z][A-Z][A-Z]/[A-Z][A-Z]/[0-9][0-9][0-9][0-9]'" required> 
                    <input type="submit"  class="delete-land-button" value="DELETE" name="subButton">
                    </form> 
                </div>
            </div>
        </div>





        <!--php code related to upper form-->
        <?php

if(isset($_POST["subButton"])){
    
    $landNumber=$_POST["landNumber"];

    //include connection object
    require_once("../Configuration File/config.php");

    //sql query
    $sql="DELETE FROM landDetails WHERE LandNumber='$landNumber'";

    //insert sql query into connection object
    $result=mysqli_query($co,$sql);

    //close connection
    $co->close();

}//end if

?>
        <!--php code end-->








<!------------------------------               footer         ---------------------------------------->
<div class="footer">

    <!---------------------------------------------------------------------------------------------------------------------->    
        <div class="quick-links">
            <p>Quick Links</p>
        </div>
    
        <div class="links">
            <div class="link">
                <image class="link-image" src="../images/click-here.jpg"></image>
                <a class="link-name" href="../html/Home Page.html" target="_blank">Home</a>
            </div>
            <div class="link">
                <image class="link-image" src="../images/click-here.jpg"></image>
                <a class="link-name" href="../html/Account Page.html" target="_blank">Account</a>
            </div>
            <div class="link">
                <image class="link-image" src="../images/click-here.jpg"></image>
                <a class="link-name" href="#" target="_blank">About Us</a>
            </div>
            <div class="link">
                <image class="link-image" src="../images/click-here.jpg"></image>
                <a class="link-name" href="#" target="_blank">Contact Us</a>
            </div>
            <div class="link">
                <image class="link-image" src="../images/click-here.jpg"></image>
                <a class="link-name" href="#" target="_blank">Customer Help</a>
            </div>
        </div>
    
    <!-------------------------------------------------------------------------------------------------------------------------->
    <div class="quick-links">
        <p>Follow Us On</p>
    </div>
    
    <div class="links">
        <div class="link">
            <image class="link-image" src="../images/facebook.png"></image>
            <a class="link-name" href="www.facebook.com" target="_blank">Facebook</a>
        </div>
        <div class="link">
            <image class="link-image" src="../images/instagram.png"></image>
            <a class="link-name" href="www.instagram.com" target="_blank">Instagram</a>
        </div>
        <div class="link">
            <image class="link-image" src="../images/twitter.png"></image>
            <a class="link-name" href="www.twitter.com" target="_blank">Twitter</a>
        </div>
        <div class="link">
            <image class="link-image" src="../images/youtube.png"></image>
            <a class="link-name" href="www.Youtube.com" target="_blank">Youtube</a>
        </div>
        
    </div>
    
    <!----------------------------------------------------------------------------------------------------------------->
    <div class="quick-links">
        <p>Contact Us On</p>
    </div>
    
    <div class="links" style="height:45px">
        <div class="link">
            <image class="link-image" src="../images/phone-number.jpg"></image>
            <p class="link-name">0332263746/<br>+9471758783</p>
        </div>
        <div class="link">
            <image class="link-image" src="../images/postal-addreess.png"></image>
            <p class="link-name" >Dream Lands(pvt) Ltd,<br>Kandy Road, Kadawata.</p>
        </div>
        <div class="link">
            <image class="link-image" src="../images/e-mail-address.png"></image>
            <a class="link-name" href="dreamlands@gmail.com" target="_blank">dreamlands@gmail.com</a>
        </div>
        <div class="link">
            <image class="link-image" src="../images/web.png"></image>
            <a class="link-name" href="www.dreamlands.com" target="_blank">www.dreamlands.com</a>
        </div>
        
    </div>
    
 </div>
    </div>
</body>
</html>
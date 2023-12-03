<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Common Page</title>
    <link type="text/css" rel="stylesheet" href="../css/Reserve Land Page Styles.css">
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


<!--php code start-->

        <?php 
        //include connection object
        require_once("../Configuration File/config.php");

        //sql query
        $sql="SELECT* FROM landDetails";

        //include sql query into connection object
        $result=mysqli_query($co,$sql);

        //checking whther there are any rows related to query
        if($result->num_rows>0){

            while($row=$result->fetch_assoc()){

echo "<div class='land-container'>";
echo    "<div class='image-container'>";
echo "        <img class='image' src=".$row["Path"].">";
echo "    </div>";
echo "    <div class='feature-container'>";
echo "        <div class='feature-container-1'>";
echo "            <ul class='feature-container-1-list'>";
echo "                <li class='feature-container-1-li'>Land Number: <span class='database-output'>".$row["LandNumber"]."</span></li>";
echo "                <li class='feature-container-1-li'>District: <span class='database-output'>".$row["District"]."</span></li>";
echo "                <li class='feature-container-1-li'>Nearest Town: <span class='database-output'>".$row["Town"]."</span></li>";
echo "                <li class='feature-container-1-li'>Size: <span class='database-output'>".$row["Size"]."</span> Perch</li>";
echo "                <li class='feature-container-1-li'>Esimated Value: <span class='database-output'>".$row["Value"]."</span> Rs/= per Perch</li>";
echo "            </ul>";
echo "        </div>";
echo "        <div class='feature-container-2'>";
echo "            <p class='feature-container-2-head'>";
echo "                Features:";
echo "            </p>";
echo "            <ul class='feature-container-2-list'>";
echo "                <li class='feature-container-2-li'>".$row["Feature1"]."</li>";
echo "                <li class='feature-container-2-li'>".$row["Feature2"]."</li>";
echo "                <li class='feature-container-2-li'>".$row["Feature3"]."</li>";
echo "                <li class='feature-container-2-li'>".$row["Feature4"]."</li>";
echo "                <li class='feature-container-2-li'>".$row["Feature5"]."</li>";
echo "            </ul>";
echo "            <div class='reserve-button-area'>";
echo "            <button class='reserve-button'>RESERVE LAND</button>";
echo "            </div>";
echo "        </div>";

echo "    </div>";

echo "</div>";
            }//end while
        }//end if

        //close connection
        $co->close();
        ?>

        <!--php code end-->
        
    </div>


    
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
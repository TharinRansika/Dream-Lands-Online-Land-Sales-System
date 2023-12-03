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
    <link type="text/css" rel="stylesheet" href="../css/Add New Lands Styles.css"> 
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
                WELCOME &nbsp<?php  echo "<span>" .$_SESSION['Name']."</span>"; ?>&nbsp TO UPDATE LAND DETAILS PAGE
            </div>
            <div class="sub-content">
                <div class="add-new-lands-portal">
                    <form class="add-new-lands-form"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            
                        <input class="add-lands-input" type="text"  placeholder="Enter the Land Number Where the Data Should be Updated" name="landNumber" pattern="DL/[A-Z]{2,3}/[A-Z]{2}/[0-9][0-9][0-9][0-9]" title="The format of Land Number is 'DL/[A-Z][A-Z][A-Z]/[A-Z][A-Z]/[0-9][0-9][0-9][0-9]'" required>
                        <input class="add-lands-input" type="text" placeholder="Enter District (Only if changed)" name="district" pattern="[A-Za-z' ']{1,30}" title="District should be contained English letters only">
                        <input class="add-lands-input" type="text" placeholder="Enter Nearest Town (Only if changed)" name="town" pattern="[A-Za-z' ']{1,30}" title="Nearest Town should be contained English letters only">
                        <input class="add-lands-input" type="text" placeholder="Enter Land Size (in Perch) (Only if changed)" name="size" pattern="[0-9]{1.0,5.0}" title="Land Size should be Numerical Value">
                        <input class="add-lands-input" type="text" placeholder="Enter Estimated Value in Rupees (per Perch) (Only if changed)" name="value" pattern="[0-9]{1.0,6.0}" title="Price should be Numerical Value">
                        <input class="add-lands-input" type="text" placeholder="Feature-1 (Only if changed)" name="feature1" >
                        <input class="add-lands-input" type="text" placeholder="Feature-2 (Only if changed)" name="feature2" >
                        <input class="add-lands-input" type="text" placeholder="Feature-3 (Only if changed)" name="feature3" >
                        <input class="add-lands-input" type="text" placeholder="Feature-4 (Only if changed)" name="feature4" >
                        <input class="add-lands-input" type="text" placeholder="Feature-5 (Only if changed)" name="feature5" >
                        <div class="upload-picture" ><lable>Upload a Photo:</lable><input type="file" name="photo" >
                        <input type="submit" class="submit-button" value="UPDATE" name="subButton"></div>
                        
                    </form>
                </div>
            </div>
        </div>






        <!--php code related to upper form-->
        <?php

if(isset($_POST["subButton"])){

    $landNumber=$_POST["landNumber"];
    $district=$_POST["district"];
    $town=$_POST["town"];
    $size=$_POST["size"];
    $value=$_POST["value"];
    $feature1=$_POST["feature1"];
    $feature2=$_POST["feature2"];
    $feature3=$_POST["feature3"];
    $feature4=$_POST["feature4"];
    $feature5=$_POST["feature5"];

    //uploading photo
    $folder="../Uploads/";
    $file_path=$folder.basename($_FILES["photo"]["name"]);  

    //uploading photo into "Uploads" folder
    if(isset($_FILES["photo"])){
    /*    $folder="../Uploads/";
        $file_path=$folder.basename($_FILES["photo"]["name"]);*/
        move_uploaded_file($_FILES["photo"]["tmp_name"],$file_path);
    }//end if

    //include connection object
    require_once("../Configuration File/config.php");
   
    //sql quries
    
    //district
    if($district != null){
        $sql="UPDATE landDetails SET District='$district' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //town
    if($town != null){
        $sql="UPDATE landDetails SET Town='$town' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //size
    if($size != null){
        $sql="UPDATE landDetails SET Size='$size' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //value
    if($value != null){
        $sql="UPDATE landDetails SET Value='$value' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //feature1
    if($feature1 != null){
        $sql="UPDATE landDetails SET Feature1='$feature1' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //feature2
    if($feature2 != null){
        $sql="UPDATE landDetails SET Feature2='$feature2' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //feature3
    if($feature3 != null){
        $sql="UPDATE landDetails SET Feature3='$feature3' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //feature4
    if($feature4 != null){
        $sql="UPDATE landDetails SET Feature4='$feature4' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //feature5
    if($feature5 != null){
        $sql="UPDATE landDetails SET Feature5='$feature5' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
    
    //file_path
    if(strlen($file_path)>11){ 
        $sql="UPDATE landDetails SET Path='$file_path' WHERE LandNumber='$landNumber'";
        //insert sql query into connection object
        $result=mysqli_query($co,$sql);
    }//end if
   

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
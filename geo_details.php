
<?php
 $conn=mysqli_connect('localhost','root','','map');
 if(!$conn){
 	echo "connection failed";
 }
 else
 {
 	echo"connected sucessfully";
 }

if(isset($_POST['submit'])){
$lat=$_POST['lat'];
$lang=$_POST['long'];
    //get variable all form variables
    $location = "https://www.google.com/maps/place/MMF+Systems+(India)+Pvt.+Ltd./@".$lat.",".$lang.",".$zoom."z/data=!4m12!1m6!3m5!1s0x0:0x1c2e35caf2b1e50!2sMMF+Systems+(India)+Pvt.+Ltd.!8m2!3d18.5587549!4d73.7752235!3m4!1s0x0:0x1c2e35caf2b1e50!8m2!3d18.5587549!4d73.7752235";
  //$location =  "https://www.openstreetmap.org/node/16174445#map=11/18.5210/73.8769";
    
    header('$location');
    $insert=mysqli_query($conn,"INSERT INTO register(lat,lang) VALUES('$lat','$lang')");
    if($insert)
    {
    echo "correct location";
    }
else{

echo "incorrect";
}


}



?>

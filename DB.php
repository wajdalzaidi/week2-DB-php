‪<?‬php

‪$‬hostname = "localhost";
$db = "control";
$user_db = "Wajdalzaidi";
 $password_db = "wajdalzaidi";
 $datab= new mysqli ($ hostname , $ user_db , $ password_db , $db);

if ($datab->connect_error) {
  die("Connection failed: " . $datab->connect_error);
}
echo "Connected successfully";

if(isset($post['Forwards ])) { echo "This is Button that is selected";
 if(isset($post['Left'])) { echo "This is Button1 that is selected";
 if(isset($post[ STOP ])) { echo "This is Button2 that is selected"; 
if(isset($post[ Right'])) { echo "This is Button3 that is selected"; if(isset($post['Backwards ])) { echo "This is Button4 that is selected"; 

?>
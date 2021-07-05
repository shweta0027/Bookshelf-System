<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="bss"; // Database name
$tbl_name="customer"; // Table name
// Connect to server and select database.
$var=mysqli_connect("$host", "$username", "$password")or die("cannot connect");
mysqli_select_db($var,$db_name)or die("cannot select DB");
// Get values from form
$name=$_POST['name'];
$address=$_POST['address'];
$email_id=$_POST['email'];
$phone_no=$_POST['phone'];
// Insert data into mysql
$sql="INSERT INTO $tbl_name(Name,Address,Email_id,Phone_no)VALUES('$name', '$address', '$email_id','$phone_no')";
$result=mysqli_query($var,$sql);
// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='user_details.php'>Back to main page</a>";
}
else
{
echo "ERROR";
}
?>

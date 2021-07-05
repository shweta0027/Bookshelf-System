<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="bss"; // Database name
$tbl_name="login"; // Table name
// Connect to server and select databse.
 $connect=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");


// Define $myusername and $mypassword
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($connect,$sql);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
echo " U Have Logged IN Successful";
echo "<BR>";                      
echo "<a href='user_details.php'>Back to main page</a>";
}
else
{
echo "Wrong Username or Password";
}
?>
<?php
if(isset($_POST['submit'])){
// Fetching variables of the form which travels in URL
$email = $_POST['email'];
$password = $_POST['pw'];
$confirmPassword = $_POST['cpw']; 
if($email !=''&& $password !=''&& $confirmPassword !=''&&$password != $confirmPassword)
{
	
}
elseif($email == '' && $confirmPassword != '' && $pw != '')
{
	?><span><?php echo "\u26A0 \"Email\" field cannot be left blank! \u26A0";?></span> <?php
}
elseif($email != '' && $confirmPassword == '' && $pw != '')
{
	?><span><?php echo "\u26A0 \"Confirm Password\" field cannot be left blank! \u26A0"?></span> <?php
}
elseif($email != '' && $confirmPassword != '' && $pw == '')
{
	?><span><?php echo "\u26A0 \"Password\" field cannot be left blank! \u26A0"?></span> <?php
}
elseif(preg_match('/^(([A-Za-z0-9])+(@){1}([a-zA-Z]){1,}(\.){1}([a-zA-Z]){2,3})/',$email)==true)
{
	?><span><?php echo "\u26A0 \"Email\" field must contain a proper email address! \u26A0";?></span> <?php	
}
elseif($email ==''&& $password ==''&& $confirmPassword =='')
{
	?><span><?php echo "\u26A0 Registration Form cannot be left blank! \u26A0";?></span> <?php
}
else
{
	//  To redirect form on a particular page
	header("Location:C:/Users/joeyi/OneDrive/Desktop/IT Project class/UI/Login.html");
}
}
?>
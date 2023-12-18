<?php

include_once('config.php');


$id=$_REQUEST['pid']; 
$query=mysqli_query($con,"SELECT property.*, user.* FROM `property`,`user` WHERE property.uid=user.uid and pid='$id'");
while($row=mysqli_fetch_array($query))
{
    $price = $row['13'];
    $id = $row['0'];
    $name = $row['1'];
};


// Product Details 

$currency = "PHP"; 
 
/* PayPal REST API configuration 
 * You can generate API credentials from the PayPal developer panel. 
 * See your keys here: https://developer.paypal.com/dashboard/ 
 */ 
define('PAYPAL_SANDBOX', TRUE); //TRUE=Sandbox | FALSE=Production 
define('PAYPAL_SANDBOX_CLIENT_ID', 'AdR2cE0SVAUQj1DBN1VwWaU-yomPm-slTUBnjXsUZlu37fCVtOqs8eraKFMeOL9sbL8n6NxpNfQkjSxn'); 
define('PAYPAL_SANDBOX_CLIENT_SECRET', 'EPyZ_verqcxA6WeWIVXbTiHgiyUfWlps6dQI9_JbXP_6u_-OkHtSXQbxEAtVIYYidGr9GLeJC--JjmEl'); 
// define('PAYPAL_PROD_CLIENT_ID', 'Insert_Live_PayPal_Client_ID_Here'); 
// define('PAYPAL_PROD_CLIENT_SECRET', 'Insert_Live_PayPal_Secret_Key_Here'); 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'realestatephp'); 

// Connect with the database  
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);  
  
// Display error if failed to connect  
if ($db->connect_errno) {  
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
} 


?>
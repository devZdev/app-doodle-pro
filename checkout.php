<?php
include_once 'settings.php';

$data=$_POST;

$firstName = $data['first_name'];
$lastName = $data['last_name'];
$address1 = $data['address_1'];
$address2 = $data['address_2'];
$city = $data['city'];
$state = $data['state'];
$zip = $data['zip'];
$email = $data['email'];

//db variables
$servername = ADP_SERVER_NAME;
$username = ADP_USER;
$password = ADP_PASSWORD;
$dbname = ADP_DB_NAME;

//Connect to mysql server
$con = mysql_connect($servername,$username,$password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}

//Select database
mysql_select_db($dbname, $con);

//Build query
$sql = 'INSERT INTO shipping (first_name, last_name, address_1, address_2, city, state, zip, email) VALUES ("'.$firstName.'","'.$lastName.'","'.$address1.'","'.$address2.'","'.$city.'","'.$state.'","'.$zip.'","'.$email.'");';

//Perform Query
if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}else {
    echo "Made it hass";
}
//Disconnect mysql
mysql_close($con);

?>

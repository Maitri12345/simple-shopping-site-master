<?php
include('header.php');
	 
		 
if(isset($_POST['pName1']) &&
isset($_POST['pAmmount1']) &&
isset($_POST['pQuantity1']) &&
isset($_POST['pSize1']) &&
isset($_POST['pDetails1']) &&
isset($_POST['pColor1']) &&
isset($_POST['pOffer1']) &&

isset($_POST['fileName1'])
)
{

$pname=$_POST['pName1'];
$pammount=$_POST['pAmmount1'];
$pquantity=$_POST['pQuantity1'];
$pdetails=$_POST['pDetails1'];
$psize=$_POST['pSize1'];
$pcolor=$_POST['pColor1'] ;
$poffer=$_POST['pOffer1'];
$image=$_POST['fileName1'];


$uid=$_SESSION['uid'];


	
	
		
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `product`(`pname`, `quantity`, `amount`, `PSize`, `PDetails`, `PColor`, `Poffer`, `Product`, `SellerId`) 
VALUES ('".$image."','".$pquantity."','".
$pammount."','".
$psize."','".$pdetails."','".$pcolor."','".
$offer."','"
.$pname."','".$uid."')";


if ($conn->query($sql) === TRUE) {
	
}
	
}



if(isset($_POST['dpid']))
{
	
	$pid=$_POST['dpid'];
	$uid=$_SESSION['uid'];
	
	
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM `product` WHERE id='$pid'";

if ($conn->query($sql) === TRUE) {
	
}
}
	?>
	

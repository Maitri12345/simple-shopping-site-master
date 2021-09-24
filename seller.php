<?php
include('SellerHeader.php');
include('dbase.php');
?>

  
<style>
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UN_r8OUuhs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem8YaGs126MiZpBA-UFVZ0e.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 600;
  src: url(https://fonts.gstatic.com/s/opensans/v18/mem5YaGs126MiZpBA-UNirkOUuhs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans Condensed';
  font-style: normal;
  font-weight: 300;
  src: url(https://fonts.gstatic.com/s/opensanscondensed/v15/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff1GhDuXMQg.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans Condensed';
  font-style: normal;
  font-weight: 700;
  src: url(https://fonts.gstatic.com/s/opensanscondensed/v15/z7NFdQDnbTkabZAIOl9il_O6KJj73e7Ff0GmDuXMQg.ttf) format('truetype');
}
* {
  box-sizing: border-box;
}
body {
  font-family: 'open sans', helvetica, arial, sans;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
.log-form {
  width: 40%;
  min-width: 320px;
  max-width: 475px;
  background: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
}
@media (max-width: 40em) {
  .log-form {
    width: 95%;
    position: relative;
    margin: 2.5% auto 0 auto;
    left: 0%;
    -webkit-transform: translate(0%, 0%);
    -moz-transform: translate(0%, 0%);
    -o-transform: translate(0%, 0%);
    -ms-transform: translate(0%, 0%);
    transform: translate(0%, 0%);
  }
}
.log-form form {
  display: block;
  width: 100%;
  padding: 2em;
}
.log-form h2 {
  color: #5d5d5d;
  font-family: 'open sans condensed';
  font-size: 1.35em;
  display: block;
  background: #2a2a2a;
  width: 100%;
  text-transform: uppercase;
  padding: 0.75em 1em 0.75em 1.5em;
  box-shadow: inset 0px 1px 1px rgba(255, 255, 255, 0.05);
  border: 1px solid #1d1d1d;
  margin: 0;
  font-weight: 200;
}
.log-form input {
  display: block;
  margin: auto auto;
  width: 100%;
  margin-bottom: 2em;
  padding: 0.5em 0;
  border: none;
  border-bottom: 1px solid #eaeaea;
  padding-bottom: 1.25em;
  color: #757575;
}
.log-form input:focus {
  outline: none;
}
.log-form .btn {
  display: inline-block;
  background: #1fb5bf;
  border: 1px solid #1ba0a9;
  padding: 0.5em 2em;
  color: white;
  margin-right: 0.5em;
  box-shadow: inset 0px 1px 0px rgba(255, 255, 255, 0.2);
}
.log-form .btn:hover {
  background: #23cad5;
}
.log-form .btn:active {
  background: #1fb5bf;
  box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.1);
}
.log-form .btn:focus {
  outline: none;
}
.log-form .forgot {
  color: #33d3de;
  line-height: 0.5em;
  position: relative;
  top: 2.5em;
  text-decoration: none;
  font-size: 0.75em;
  margin: 0;
  padding: 0;
  float: right;
}
.log-form .forgot:hover {
  color: #1ba0a9;
}
</style>



<?php
if(!isset($_SESSION['seller']))
{
	?>


<body translate="no" >
  <div class="log-form">
  <h2>Login to your account</h2>
  <form method="post">
    <input type="text" title="uname" name="uname" placeholder="username" />
    <input type="password" title="psw" name="psw" placeholder="password" />
    <button type="submit" name="login" class="btn">Login</button>
    <a class="forgot" href="#">Forgot Username?</a>
  </form>
</div><!--end log form -->


<?php

}

else
{

?>






<style>
.myButton {
	-moz-box-shadow: 3px -2px 9px 1px #1564ad;
	-webkit-box-shadow: 3px -2px 9px 1px #1564ad;
	box-shadow: 3px -2px 9px 1px #1564ad;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #79bbff), color-stop(1, #378de5));
	background:-moz-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-webkit-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-o-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:-ms-linear-gradient(top, #79bbff 5%, #378de5 100%);
	background:linear-gradient(to bottom, #79bbff 5%, #378de5 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#79bbff', endColorstr='#378de5',GradientType=0);
	background-color:#79bbff;
	-moz-border-radius:42px;
	-webkit-border-radius:42px;
	border-radius:42px;
	border:1px solid #337bc4;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:10px;
	font-weight:bold;
	padding:12px 40px;
	text-decoration:none;
	text-shadow:0px 1px 4px #528ecc;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #378de5), color-stop(1, #79bbff));
	background:-moz-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-webkit-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-o-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:-ms-linear-gradient(top, #378de5 5%, #79bbff 100%);
	background:linear-gradient(to bottom, #378de5 5%, #79bbff 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#378de5', endColorstr='#79bbff',GradientType=0);
	background-color:#378de5;
}
.myButton:active {
	position:relative;
	top:1px;
}
</style>








<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<script>
$(document).ready(function(){
  
   $(".delbutton").click(function() {
                var del_id = $(this).attr("id");
				
				
                if (confirm("Sure you want to delete this iteam? This cannot be undone later.")) {
                   $.ajax({
                 type: "POST",
                 url: "updateqProduct.php",
                 data: {  dpid: del_id},
                 success: function(msg) {
					 
              	 
                 }
      })
	  location.reload(true);
				}
  });
  
	
	
	   $("#buy").click(function() {
                var del_id = 1
                if (confirm("Sure you want to order this iteams ?")) {
                   $.ajax({
                 type: "POST",
                 url: "updateq.php",
                 data: {  bpid: del_id  },
                 success: function(msg) {
					 
              	 
                 }
      })
	  location.reload(true);
				}
  });
    });
	
	
	
	
	
	
	$(document).ready(function(){
		
	var File_Name ;
	$('#upload').on('click', function() {
    var file_data = $('#sortpicture').prop('files')[0]; 
	
	File_Name = file_data.name;
	
    var form_data = new FormData();                  
    form_data.append('file', file_data);
                                
    $.ajax({
        url: 'uploadImage.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
             // display response from the PHP script, if any
        }
     });
});






$('#upload').on('click', function() {
  
        
        var pName = document.getElementById("pname").value;
		var pQuantity = document.getElementById("quantity").value;
		var pAmmount = document.getElementById("amount").value;
		var pSize = document.getElementById("size").value;
		var pDetails = document.getElementById("details").value;
		
		
		var pColor = document.getElementById("color").value;
		var pOffer = document.getElementById("offer").value;
		
		
		
    
        $.ajax({
                 type: "POST",
                 url: "updateqProduct.php",
                 data: { 
				 
				 
				 
				  pName1: pName,
				  
				  pQuantity1: pQuantity,
		 pAmmount1 :pAmmount,
		 pSize1 : pSize,
		 pDetails1 :pDetails,
		
		
		 pColor1:pColor,
		 pOffer1:pOffer,
		 fileName1 :File_Name



				 },
                 success: function(msg) {
					 alert("Product Inserted"); 
                 }
      });
	  location.reload(true);
  
  
});










 });
	
	
	
	
	
</script>


















<?php
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
$uid=$_SESSION['uid'];
$sql = "SELECT * FROM product WHERE SellerId='".$_SESSION["uid"]."';";

$result = $conn->query($sql);
?><div class="space" ><?php
if ($result->num_rows > 0) {
    // output data of each row
	?>
	<style>
	.table table {
  border-collapse: collapse;

}
.table table tr {
  border: 2px black ;
  border-style:inset;
}

.table table th {
  padding-left: 30px;
  padding-right: 30px;
}

	</style>
	
	
	



	<div class="table">
	
	<div class="shade" ><center>
	<br/>
	<br/><table width="98%" >
	
	<tr><td><input type="text" style="width:100%" placeholder="Product Name" name="pname" id="pname" /></td>
	<td><input type="text" style="width:100%" placeholder="Quantity" name="quantity" id="quantity" /></td>
	
<td><input type="text" style="width:100%" placeholder="Amount" name="amount" id="amount" /></td>
	<td><input type="text" style="width:100%" placeholder="Size" name="size" id="size" /></td>	
	
	<td><input type="text" style="width:100%" placeholder="Details" name="details" id="details" /></td>
	<td><input type="text" style="width:100%" placeholder="Color" name="color" id="color" /></td>
	<td><input type="text" style="width:100%" placeholder="Offer" name="offer" id="offer" /></td>
	
	<td><input id="sortpicture" style="width:1%" type="file" name="sortpic" /> </td>
	
	
	<th><button class='myButton' id="upload">Upload</button></th></tr>
	
	<tr><th>Product Name </th><th>Quantity</th><th><center>Amount</center></th><th><center>Size</center></th><th><center>More Details</center></th><th><center>Color</center></th><th><center>offer</center></th><th><center>Image</center></th><th></th></tr>
	
	
	
	
	
	<?php
	$sum=0;
    while($row = $result->fetch_assoc()) { ?>
	
  
		<td>
	
		<div ><center><?php echo $row['Product'];?></center></div></td>
	  
	  	<td>
	
		<div ><center><?php echo $row['quantity'];?></center></div></td>
	  
	  	<td>
	
		<div ><center><?php echo $row['amount'];?></center></div></td>
	  		<td>
	
		<div ><center><?php echo $row['PSize'];?></center></div></td>
	  <td>
	  <div ><center><?php echo $row['PDetails'];?></center></div></td>

 <td>
	  <div ><center><?php echo $row['PColor'];?></center></div></td>
   <td>
	  <div ><center><?php echo $row['Poffer'];?></center></div></td>
  
		<td>
	
		<div><center><img src="<?php echo $row['pname'];?>" width="50%"></center></div></td>
	  
	  
	  
	  
	  
	  <td>
	  <button id="<?php echo $row['id']; ?>"  class="delbutton" style="  background-color: Transparent;" ><i class="fa fa-close" ></i></button>
	  </td>
       </tr>
 <?php   }



?>
 </table><br/>
		<br/>
		<br/></div></center>
		
		<?php
    }
 else{ ?>
	 <div class="space"  style="margin-bottom:30%"> <center><h3 style="  opacity: 0.2;margin-top:10%;">No Product Added</h3></center></div>
<?php  } ?>



		
		
		
		
		
		
		
		
			<br/>
		<br/>
		</div>
		</div>
	
		</div>


















<?php
}
?>
  



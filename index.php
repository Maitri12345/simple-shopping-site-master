<?php
include('header.php');
include('dbase.php');
?>



<style>
 
    .box {
         position: absolute;
  bottom: -100px;
  
  width:95%;
 
  margin-top:1%;
    }
</style>

<div class="space">
    <div style="margin: 6px; ">
        </div>


    <div class="shade">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div   style="width:100%; height:100%;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="1.jpg"  style="width:100%;">
      
      </div>
      
      
      <div class="item">
        <img src="2.jpg" style="width:100%;">
        
      </div>

      <div class="item">
        <img src="3.jpg"  style="width:100%;">
        
      </div>
    
      <div class="item">
        <img src="4.jpg"  style="width:100%;">
       
      </div>
      
      <div class="item">
        <img src="5.jpg"  style="width:100%;">
      
        
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

        </div>
           <div style="margin: 1%; background-color:white" >
     
        </div>
		
		
<?php
$alinSize=0;




$sql1 = "SELECT * FROM product";
$al=0;
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
while($row1 = $result1->fetch_assoc()) {
	
	
	$pdid=$row1['id'];
	$pImage=$row1['pname'];
	$quantity=$row1['quantity'];
	$ammount=$row1['amount'];
	$psize=$row1['PSize'];
	$pdetail=$row1['PDetails'];
	$pcolor=$row1['PColor'];
	$poffer=$row1['Poffer'];
	$product=$row1['Product'];
	$sellerId=$row1['SellerId'];
	
	
	
	if($al==0)
	{
		?>
		
		<div class="row" style="margin-bottom:110px;">
		
		<?php
		
		
	}
	

?>


     <div class="column"  Style="position: relative;">      
          <div class="shade">
		   <div style="padding-top:2%;  width:250px; height:400px"><center>
<figure ><img src="<?php echo $pImage; ?>" style=" 10%; width:150px"   ><br/><caption><br/><br/><?php echo $product; ?><br/>
<?php echo $pdetail; ?>
<br/>
<font color="red"><?php echo $ammount; ?> </font> <?php echo $poffer; ?><br/>
Size <?php echo $psize; ?></caption></figure>


<?php if(isset($_SESSION['email'])){ 





$uid=$_SESSION["uid"];
$sql = "SELECT cart FROM cart where uid='$uid' and pid='$pdid'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
while($row = $result->fetch_assoc()) {
	$cart=$row['cart'];
	

}
}
else{
	$cart=0;
}


if ($cart=='1')
{ ?>


   <div class="boxContainer">
        <div class="box">
          	<button style="width:100%; padding-bottom:4%; margin-top:1%; background-color:green; color:white;" type="submit">Added to Cart</button>

        </div>
    
</div>

<?php }
else{
?>
<form action="index.php" method="post">
 <input type="hidden" value="<?php echo $pdid; ?>" name="pid" />
 <input type="hidden" value="<?php echo $_SESSION['uid']?>" name="uid" />
 <input type="hidden" value="1" name="quantity" />
  <input type="hidden" value="1" name="cart" />
 <input type="hidden" value="0" name="orders" />
 <input type="hidden" value="<?php echo $ammount; ?>" name="amount" />


   <div class="boxContainer">
        <div class="box">
          	<button style="width:100%;padding-bottom:4%; margin-top:1%; background-color:black; color:white;" type="submit">Add to Cart</button>

        </div>
    
</div>









</form>

<?php }  }else { ?>

   <div class="boxContainer">
        <div class="box">
          
<button style="width:100%;padding-bottom:4%; margin-top:1%; background-color:black; color:white;"
onclick="document.getElementById('id01').style.display='block'">Add to Cart</button>
        </div>
    
</div>



<?php } ?>
</center>
</div>
</div></div>









<?php

$al++;

if($al==5)
	{
		$al=0;
		?>
		
		</div>

		<?php
		
		
	}


}



if($al!=5)
	{
		?>
		
		</div>

		<?php
		
		
	}


}





	
?>
		
	











<!--
<div class="column" >
 <div class="shade">
<img src="side.jpg" height=400px;/>           

</div>
</div>-->

<?php


	
	
?>




<div class="row" style="margin-top:8.5%; margin-bottom:1%" >
     <div class="column"     >   



 <div class="shade" >
<img src="mid1.jpg" style="height:232px"/>           

</div>
</div>
 <div class="column" >
 <div class="shade" ;>
<img src="mid2.jpg"  style="height:232px"/>           

</div>
</div>
 <div class="column">

 <div class="shade" >
<img src="mid3.jpg" style="height:232px"/>           

</div>
</div>
</div>
</div>
<?php 
include("footer.html")
?>
<div>
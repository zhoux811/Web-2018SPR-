<?php
	  include "$_SERVER[DOCUMENT_ROOT]/final/include/header.php";
?>

	<br>
	<br>
          <b>
					<a href="index.php">Home</a>
					  >
					<a href="kart.php">MY SHOPPING KART</a>
					</b>
	<br>
	<br>

		<p>
			<table width="100%" border="0" cellspacing="0" cellpadding="8">
				<tbody>


					<style type="text/css"></style>
          	<tr>

<?php

  $total = 0;

  $con=mysqli_connect("localhost","root","","final");
	// Check connection
	if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	$sql="  SELECT 	list.kartororder,	
					list.quantity,		
					product.pid,
					product.pname,
					product.pimg,
					product.pprice,
					product.seller,
					product.pfile,
					list.buyer
					FROM list inner join product on list.product_pid=product.pid 
					WHERE kartororder='kart' and buyer= "."'".$_POST['key']."'  ";

	if ($result=mysqli_query($con,$sql))
  {
  	// Fetch one and one row
  	while ($row=mysqli_fetch_row($result))
    {
      $total = $total+$row[1]* $row[5];
?>

                <td>
					
					<img src="<?php echo $row[4] ?>">
					
                    <br>
                </td>

				<td>
					
					<?php echo $row[3] ?>
					
					<br>
                 </td>

                <td>
                	Price:<?php echo $row[5] ?>
                   	<br>
                </td>

                <td>
               	    Quantity:<?php echo $row[1] ?>
  					<br>
                </td>

                <td>
  					Seller:<?php echo $row[6] ?>
                    <br>
				</td>

			</tr>
<?php
		 }
			// Free result set
			mysqli_free_result($result);
	}
mysqli_close($con);
?>

			</tbody>
		</table>
	</p>

	<h1>
  TOTAL:
  <?php echo $total; ?>
  </h1>

	<form  action="/final/include/emptycart.inc.php" method="POST">
	  	<button type="submit"
    	        name="empty" >
        	Empty shopping cart
    	</button>
  	</form>

	<form  action="/final/include/carttoorder.inc.php" method="POST">
			Ship to this address:
			<input 	type="text" 
					name="address"
					size="100">
			<button type="submit"
					name="order" >
			PLACE ORDER
			</button>
	</form>


<br>


<?php
include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php"
?>

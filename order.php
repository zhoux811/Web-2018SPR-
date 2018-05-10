<?php
	  include "$_SERVER[DOCUMENT_ROOT]/final/include/header.php";
?>

	<br>
	<br>
          <b>
					<a href="index.php">Home</a>
					  >
					<a href="order.php">MY ORDERS</a>
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
					WHERE kartororder='order' and quantity !=0 and buyer="."'".$_POST['key']."'  ";

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

                <td>
                	<form action="/final/writecomment.php" method="POST">
                		<input  type="text"
                            name="index"
                            value="<?php echo $row[2] ?>"
                            placeholder="<?php echo $row[2] ?>">
                            comment:
                		<input type="textarea" name="comment0">
                		score:
                		<input type="number" name="score" >
                		<button type="submit" name="comment" >
                			POST THIS COMMENT
                		</button>
                	</form>
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






<br>


<?php
include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php"
?>

<?php
	  include "$_SERVER[DOCUMENT_ROOT]/final/include/header.php";
?>

	<br>
	<br>
          <b>
						You are at: 
					<a href="index.php">Home</a>
					  >
					<a href="/final/donation.php" title="DONATIONS">DONATIONS</a>
					</b>
	<br>
	<br>
	<h5>
		<p>
			<table width="100%" border="0" cellspacing="0" cellpadding="8">
				<tbody>


					<style type="text/css"></style>

<?php
	$con=mysqli_connect("localhost","root","","final");
	// Check connection
	if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

	$sql="	SELECT 	product.pimg,
					product.pid,
					product.pname,
					product.pprice,
					product.seller,
					product.pfile,
					product.pdescription
			 FROM product 
			 WHERE seller ='developer'	
			 ORDER BY pid	";

	if ($result=mysqli_query($con,$sql))
  	{
  	// Fetch one and one row
  	while ($row=mysqli_fetch_row($result))
    {
?>
							<td>
								<div class="v-product__inner">
									<form action="/final/product/donation1.php" method="POST">
										
                    					<button type="submit"
                          						name="view" 
                            					value="<?php echo $row[1] ?>">
										<img src="<?php echo $row[0] ?>">
									</form>
									
									<br>
									
											<?php echo $row[2] ?>
									
									<br>
									Price: $<?php echo $row[3] ?>
									<br>
									Description:<?php echo $row[6] ?>
									<br>
									Seller:<?php echo $row[4] ?>
									<br>
									<br>
									
								</div>
							</td>
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
</h5>

<br>


<?php
include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php"
?>

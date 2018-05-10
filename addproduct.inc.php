<?php

	if (isset($_POST['sell']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/final/include/dbh.inc.php";

		$name=mysqli_real_escape_string($conn, $_POST["name"]);

		$pic = mysqli_real_escape_string($conn, $_POST["pic"]);

		$price = mysqli_real_escape_string($conn, $_POST["price"]);

		$description = mysqli_real_escape_string($conn, $_POST["description"]);
		
		$seller = mysqli_real_escape_string($conn, $_POST["seller"]);
		
		//$message = mysqli_real_escape_string($conn, $_POST["price"]);


		$sql = "   	INSERT INTO 
					product (
						pname,
						pimg, 
						pprice, 
						pdescription,
						seller)
					VALUES (
						'$name',
						'$pic', 
						'$price', 
						'$description',
						'$seller');     ";

		mysqli_query($conn, $sql);
		header("Location: ../sell.php?addproduct=success");
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}

?>

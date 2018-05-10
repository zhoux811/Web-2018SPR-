<?php

	if (isset($_POST['buy']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/final/include/dbh.inc.php";

		$id=mysqli_real_escape_string($conn, $_POST["index"]);

		$quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);

		$message = mysqli_real_escape_string($conn, $_POST["message"]);

		$buyer = mysqli_real_escape_string($conn, $_POST["buyername"]);


		$sql = "   INSERT INTO list (buyer,product_pid,quantity, kartororder, message)
				VALUES ('$buyer','$id','$quantity', 'kart', '$message');     ";
		mysqli_query($conn, $sql);
		header("Location: ../product/donation1.php?addtokart=success");
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}


	








?>

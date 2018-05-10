<?php

	if (isset($_POST['comment']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/final/include/dbh.inc.php";

		$comment0=mysqli_real_escape_string($conn, $_POST["comment0"]);

		$score = mysqli_real_escape_string($conn, $_POST["score"]);

		$index = mysqli_real_escape_string($conn, $_POST["index"]);

		$sql = "   INSERT INTO comment
					 		(ctext,cscore,product_pid)
					VALUES ('$comment0','$score','$index');     ";
		mysqli_query($conn, $sql);
		header("Location: ../final/order.php?writecomment=success");
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}


	








?>

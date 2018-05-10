<?php

	if (isset($_POST['submit']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/final/include/dbh.inc.php";

		$key=mysqli_real_escape_string($conn, $_POST["key"]);
		
		//$message = mysqli_real_escape_string($conn, $_POST["price"]);


		$sql = "   	INSERT INTO 
					user (
						upw)
					VALUES (
						'$key');     ";

		mysqli_query($conn, $sql);
		header("Location: ../signup.php?signup=success");
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}

?>

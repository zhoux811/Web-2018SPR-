<?php  


if (isset($_POST['empty']))
	{
		include "$_SERVER[DOCUMENT_ROOT]/final/include/dbh.inc.php";

		$sql = "   DELETE FROM list WHERE kartororder='kart';     ";
		
		if (mysqli_query($conn, $sql)) 
		{
    		header("Location: ../kart.php");
    		//echo "Record deleted successfully";	
		} 	
		else 
		{
    		echo "Error deleting record: " . mysqli_error($conn);
		}

		//header("Location: ../kart.php?kartemptied");
		exit();

	}
	else
	{
		header("Location: ../index.php");
		exit();
	}






?>
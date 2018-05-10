<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
		h2 { color: black;
			background-color: grey;
			text-align: center;}
		a:link {color: blue}
		a:visted {color: blue}
		a:hover {color: black ; font-weight: bold;}
		h2 {text-align: center;}
		h6 {text-align: center;}
		p {text-align: center;}
		body {background-color: white}
	</style>

</head>
<body>

	<header>
		<nav>
			<p>
				<h1 align="left">
					<form action="" method="POST">
						<a href="/final/index.php"	title="home " >
							<img src="/final/pageimg/home.png">
						</a>

						<a href="/final/kart.php"	title="kart " >
							<img src="/final/pageimg/cart.png">
						</a>

						<a href="/final/order.php"	title="order " >
							<img src="/final/pageimg/order.png">
						</a>

						<a href="/final/signup.php"	title="signup " >
							<img src="/final/pageimg/account.png">
						</a>


						<input 	type="text" 
								name="searchbox"
								style="height: 50px; width: 450px; font-size: 35pt";
								placeholder="Look for good stuff!">
						<button type="submit" 
								name="searchbtn" 
								style="height: 50px; width: 200px;">
						<b>Search</b>	
						</button>
<?php
						if (isset($_POST['login'])) 
						{
							$buyer=$_POST["key"];
        						echo "Hello: " . $_POST["key"];
								
?>	
								<button type="submit" 
										name="logout" 
										style="height: 50px; width: 150px;">
								<b>Logout</b>	
								</button>
<?php						
							}
							else
							{
?>							
								<input 	type="text" 
										name="key"
										style="height: 50px; width: 200px; font-size: 35pt;">
								<button type="submit" 
										name="login" 
										style="height: 50px; width: 150px; ";>
								<b>Log me in</b>	
								</button>
							</form>
<?php	
						}
?>
				</h1>
		</nav>

	</header>

	<hr>

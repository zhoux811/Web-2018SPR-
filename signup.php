<?php
  include "$_SERVER[DOCUMENT_ROOT]/final/include/header.php";
?>

			<h1 style="color: black" align="center">Signup</h1>
			<form class="signup_form" action="include/signup.inc.php" method="POST" style="text-align: center;">
				<br>
				<br>
				<input 	type="text" 
						name="key" 
						placeholder="insert personal key here" 
						style="height: 100px; width: 600px; font-size: 40pt;">
				<br>
				<input 	type="text" 
						name="nickname" 
						placeholder="insert nickname here" 
						style="height: 100px; width: 600px; font-size: 40pt;">
				<br>
				<br>
				<button type="submit" 
						name="submit" 
						style="height: 50px; width: 200px;">
						<b>Sign up</b>	
				</button>
			</form>

<?php
  include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php";
?>

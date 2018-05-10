<?php
  include "$_SERVER[DOCUMENT_ROOT]/final/include/header.php";
?>

  <h1>NEW ITEM INFORMATION</h1>
  <h3>
  	<form action="/final/include/addproduct.inc.php" method="POST">
  		<br> 
            Nmae of the item you want to sale:
            <br>
            <input  type="textarea" 
                    name="name"
                    size="50">
  		<br> 
            update a picture of the item:
            <br>
            <input  type="file" 
                    name="file"
                    size="50">
            <br>
            <input  type="textarea" 
                    name="pic"
                    size="50">
  		<br> 
            Priced at? :
            <br>
            <input  type="number" 
                    name="price"
                    size="50">
  		<br> 
            Some description makes it better :
            <br>
            <input  type="textarea" 
                    name="description"
                    size="50">
  		<br> 
            You, as the seller, is :
            <br>
            <input  type="textarea" 
                    name="seller"
                    size="50">
  		<br> 
            Im all done !!!
            <br>
            <button type="submit" 
                    name="sell"
                    value="sell">
                POST!!!
            </button>  


  		
  	</form>
</h3>




<?php
include "$_SERVER[DOCUMENT_ROOT]/final/include/footer.php"
?>

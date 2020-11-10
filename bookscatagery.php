<?php
	$book = "";
	$err_book = "";
	$category = "";
	$err_category = "";
	$description = "";
	$err_description = "";
	$publisher = "";
	$err_publisher = "";
	$edition = "";
	$err_edition = "";
	$isbn = "";
	$err_isbn ="";
	$pages ="";
	$err_pages ="";
	$price = "";
    $err_price = "";
    
    
    if(isset($_POST["register"]))
    {
        // book validate
		
		if(!empty($_POST["book"]))
		{
			$book = htmlspecialchars($_POST["book"]);
		}
        else{$err_book = "*book name required";}

          // category validate
		
		if(!empty($_POST["category"]))
		{
			$category = htmlspecialchars($_POST["category"]);
		}
        else{$err_category = "*category required";}

          // description validate
		
		if(!empty($_POST["description"]))
		{
			$description = htmlspecialchars($_POST["description"]);
		}
        else{$err_description = "*description required";}

          // publisher validate
		
		if(!empty($_POST["publisher"]))
		{
			$publisher = htmlspecialchars($_POST["publisher"]);
		}
        else{$err_publisher = "*publisher required";}

          // edition validate
		
		if(!empty($_POST["edition"]))
		{
			$edition = htmlspecialchars($_POST["edition"]);
		}
        else{$err_edition = "*edition required";}

          // isbn validate
		
		if(!empty($_POST["isbn"]))
		{
			$isbn = htmlspecialchars($_POST["isbn"]);
		}
        else{$err_isbn = "*isbn required";}

          // pages validate
		
		if(!empty($_POST["pages"]))
		{
			$bio = htmlspecialchars($_POST["pages"]);
		}
        else{$err_pages = "*page number required";}
        

    }

?>

	
<html>
	<head>
		<title>BookDetails</title>
	</head>
	<body>
		
		<hr>
		<form action="Registration.php" method="post">
			<fieldset>
				<h1>Add Books</h1>
				<table>
                <tr>
						<td align="right">Book:</td>
						<td>
							<textarea name="book" value="<?php echo $book; ?>" ></textarea> <?php echo " ".$err_book; ?>
						</td>
					</tr>

                    <tr>
                     <td align="center">Category:</td>
                     <td>
                     <input type="text" list="Category">
                      <br>
                     <select name="day" style="width: 180px">
                      <option>Comedy</option>
                      <option>Thriller</option>
                      <option>Horror</option>
                     <option>Romantic</option>
                      </select> 
                      </td>
                     </tr>
                    <tr>
						<td align="right">Description:</td>
						<td>
							<textarea name="description" value="<?php echo $description; ?>" ></textarea> <?php echo " ".$err_description; ?>
						</td>
					</tr>

                    <tr>
						<td align="right">Publisher:</td>
						<td>
							<textarea name="publisher" value="<?php echo $publisher; ?>" ></textarea> <?php echo " ".$err_publisher; ?>
						</td>
					</tr>

                    <tr>
						<td align="right">Edition:</td>
						<td>
							<textarea name="edition" value="<?php echo $edition; ?>" ></textarea> <?php echo " ".$err_edition; ?>
						</td>
					</tr>

                    <tr>
						<td align="right">Isbn:</td>
						<td>
							<textarea name="isbn" value="<?php echo $isbn; ?>" ></textarea> <?php echo " ".$err_isbn; ?>
						</td>
					</tr>

                    <tr>
						<td align="right">Price :</td>
						<td>
							<textarea name="price " value="<?php echo $price ; ?>" ></textarea> <?php echo " ".$err_price ; ?>
						</td>
					</tr>
                    </tr>
				</table>
			</fieldset>
		</form>
	</body>
	
</html>
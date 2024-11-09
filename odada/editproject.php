<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="index.php">Return to home</a>
	<h1>Edit Order</h1>
	<form action="core/handleForms.php?order_id=<?php echo $_GET['order_id']; ?>" method="POST">
		<p>
			<label for="firstName">Order Name</label> 
			<input type="text" name="order_name">
		</p>
		<p>
			<label for="firstName">Quantity</label> 
			<input type="text" name="quantity">
			<input type="submit" name="editOrderBtn">
		</p>
	</form>


	
</body>
</html>
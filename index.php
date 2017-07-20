<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" lang="en">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>enterprise inventory</title>
</head>
<body>
<div id="main">

	<h2>Stock Update</h2>
	<form id="inventory" action="modified.php" autocomplete="on" validate method="post">
		
		<span id="cartegory"><port class="port">Product Id:</port> <input type="text" name="product_id" required=""></span>
		<br>
		<span id="cartegory"><port class="port">Quantity:</port> <input type="number" name="product_quantity" style="width: 50px;" min="1" required=""> g <input type="checkbox" value="gram" name="g"> kg <input type="checkbox" value="kilogram" name="kg"> ml <input type="checkbox" value="mililitre" name="ml"> litres <input type="checkbox" value="litre" name="litres"></span>
		<br>
		<span id="cartegory"><port class="port">Purchase Price:</port> <input type="number" name="purchase_price" style="width: 50px;" min="0" required=""> KES</span>
		<br>
		<span id="cartegory"><port class="port">Units:</port> <input type="number" name="product_units" style="width: 50px;" min="1" required=""></span>
		<br>
		<input type="submit" name="submit">
		<code><br>
		<br>
		<p>Computed Results</p>
		<span id="cartegory"><port class="computed" class="port">Total Stock Price:</port> <output id="total_stock_price"></output></span>
		<br>
		<span id="cartegory"><port class="computed" class="port">Sale Price:</port> <output id="sale_price"></output></span>
		</code>
		<br>
		
	</form>
</div>
<link rel="stylesheet" type="text/css" href="style.css">
</body>
</html>
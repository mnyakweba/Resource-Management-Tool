<?php
include "connection.php";
if (isset($_POST["id"])) {
	$sql = "delete from inventory where id ='".$_POST['id']."'";
	$result = mysql_query($sql);
}
$sql = "select * from inventory";
$result = mysql_query($sql);
?>

<!DOCTYPE html>
<html>
<body>
<table width="100%" border="1" cellspacing="1">
	<tr>
		<td>id</td>
		<td>product id</td>
		<td>product quantity</td>
		<td>grams</td>
		<td>kg</td>
		<td>ml</td>
		<td>litres</td>
		<td>purchase price</td>
		<td>product units</td>
		<td colspan="2">Action</td>
	</tr>
</table>
</body>
</html>

<?php
while ($row = mysql_fetch_object($result )) {
?>
	<tr>
		<td>
			<?php
			echo $row ->id;?>
		</td>
		<td>
			<?php
			echo $row ->product_id;?>
		</td>
		<td>
		<td>
			<?php
			echo $row ->product_quantity;?>
		</td>
		<td>
			<?php
			echo $row ->g;?>
		</td>
		<td>
			<?php
			echo $row ->kg;?>
		</td><td>
			<?php
			echo $row ->ml;?>
		</td><td>
			<?php
			echo $row ->litres;?>
		</td>
		<td>
			<?php
			echo $row ->purchase_price;?>
		</td>
		<td>
			<?php
			echo $row ->product_units;?>
		</td>
		<td>
			<a href="modified.php?id = 
			<?php echo $row ->id;?> " onnclick= "return confirm('are you sure')"> Delete
			</a> | <a href="index.php?id = 
			<?php echo $row ->id;?> " onnclick= "return confirm('are you sure')"> Edit
			return confirm('are you sure')
			">Edit
			</a>
		</td>
		<tr>
			<?php } ?>
		</tr>
	</tr>

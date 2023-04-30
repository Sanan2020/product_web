<?php
    require 'connect.php';
    //รับค่าไอดีที่จะแก้ไข
    $ProductID = mysqli_real_escape_string($con,$_GET['ProductID']);

    //query ข้อมูลจากตาราง: 
    $sql = "SELECT * FROM Products WHERE ProductID='$ProductID' ";
    $result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_connect_error());
    $row = mysqli_fetch_array($result);
    extract($row);

//https://devbanban.com/?p=259

?>

<!DOCTYPE html>
<html>

<head>
    <title>Product</title>
    <meta charset="UTF-8">
   
</head>
<style>
body {
  background-color: #F5F5F5;
}
</style>
<body>

<form action= "#" method="POST">
<h1>
<?php echo $ProductName; ?>
</h1>
<input type="hidden" name = "ProductID" value="<?php echo $ProductID; ?>" />


<label>ProductName*</label><br>
<input name="pname" type="text" id="pname" size="40" value="<?php echo $ProductName; ?>" required> <br>

<label>Picture*</label><br>
<input name="pic" type="text" id="pic" size="40" value="<?php echo $Picture; ?>" required> <br>

<label>Category*</label><br>
<input name="category" type="text" id="category" size="40" value="<?php echo $Category; ?>" required> <br>

<label>ProductDescription*</label><br>
<input name="pdest" type="text" id="pdest" size="40" value="<?php echo $ProductDescription; ?>" required> <br>

<label>Price*</label><br>
<input name="price" type="number" id="price" value="<?php echo $Price; ?>" required> <br>

<label>QuantityStock*</label><br>
<input name="qstock" type="number" id="qstock"  value="<?php echo $QuantityStock; ?>" required> <br>

<br>

<input type="submit" value="Delete" onClick="this.form.action='frmDel.php'; submit()">  

<input type="submit" value="Save"   onClick="this.form.action='frmUpd.php'; submit()">


<input type="reset" value="Cancel">
</form>


</body>
</html>


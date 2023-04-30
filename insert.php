<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<style>
body {
  background-color: #F5F5F5;
}
</style>
<body>
    
    <h2>New Products</h2>
    <form action="frminsert.php" method="POST">
        <label>ProductName*</label><br>
        <input type="text" name="pname" id="pname" size="40" required><br>

        <label>Picture*</label><br>
        <input type="text" name="pic" id="pic" size="40" required><br>

        <label>Category*</label><br>
        <input type="text" name="category" id="category" size="40" required><br>

        <label>ProductDescription*</label><br>
        <input type="text" name="pdest" id="pdest" size="40" required><br>

        <label>Price*</label><br>
        <input type="number" name="price" id="price" min="0" max="9999" required><br>

        <label>QuantityStock*</label><br>
        <input type="number" name="qstock" id="qstock" min="0" max="999" required><br>
        <br>
        <!-- <input type="button" value="Delete"> -->
        <input type="submit" value="Save">
        <input type="reset" value="Cancel">

    </form>
</body>
</html>

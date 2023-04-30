<!DOCTYPE html>
<html>

<head>
    <title>Product</title>
    <meta charset="UTF-8">
<style>
body {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin: auto;
  background-color: #F5F5F5;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
</style>
</head>

<body>
  <form action = "" method="POST">
    <h1> Products </h1>
    <h4 style="text-align:right;"> <a href="insert.php"> Create a new Products</a> </h4> </p>

    <input name="pname" type="text" id="pname">     
    <input type="submit" value="Search">
    <input type="reset"> 
    <hr><br>
    <table>
                <tr>
                    <th>Id</th>
                    <th>ProductName</th>
                    <th>Picture</th>
                    <th>Category</th>
                    <th>ProductDescription</th>
                    <th>Price</th>
                    <th>QuantityStock </th>
                </tr>

                <?php
                  require 'connect.php';
                  // Search
                  $text = null;
                  if (isset($_POST["pname"])) {
                      $text = $_POST["pname"];
                  }
                  $query = "SELECT * FROM Products WHERE ProductName 
                  LIKE '%" . $text . "%' OR Category LIKE '%" . $text . "%' OR ProductDescription LIKE '%" . $text . "%'";
                  $result = mysqli_query($con, $query);         
                  while ($row = mysqli_fetch_array($result)) 
                      {
                          $image = $row["Picture"];
                          //$imageData = base64_encode(file_get_contents($image)); //เข้ารหัสสิ่งที่คุณส่งผ่านสตริง
                          //https://stackoverflow.com/questions/31793512/php-display-image-from-url-into-homepage
                          echo "<tr>";
                          echo "<td align='center'>" . $row["ProductID"] . "</td>";

                          echo "<td>" ." <a href= 'DelUpd.php?ProductID=$row[0]' > " . $row["ProductName"] . "</a>" . "</td>";

                          //echo "<td><img style= 'width:70px;' src='data:image/jpeg;base64," .$imageData."'></td>";
                          echo "<td><img style= 'width:70px;' src='data:image/jpeg;base64'></td>";

                          echo "<td align='center'>" . $row["Category"] . "</td>";
                          echo "<td align='center'>" . $row["ProductDescription"] . "</td>";
                          echo "<td>" . $row["Price"] . "</td>";
                          echo "<td>" . $row["QuantityStock"] . "</td>";
                          echo "</tr>";

                      }
                  
                  echo "</table>";
                ?>              
            </table>
  </form>
</body>

</html>
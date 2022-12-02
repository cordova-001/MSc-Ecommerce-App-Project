<!DOCTYPE>
<?php include 'function.php'; ?>
<html>
<head>
    <title>Bravo Wine Products </title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <div id="product_container">
      <div class="product_head">
        <h2>Bravo Wine Products</h2>
      </div>
      <div class="product_headings">
        <h2>Bravo Wine Products</h2>
      </div>
      <div class="product_user" style="border: 1px solid black; margin-bottom: 0px;">
        <p style="text-align: center; padding: 5px; padding-bottom: 5px; margin-right: 20px; font-weight: bold;"> <a href="dashboard.php"> Home </a>      |   <a href="addProducts.php">  Add Products </a>  |<a href="allproducts.php"> All Products </a> | <a href="allsales.php"> All Sales </a> | <a href="logout.php">Logout</a></p>
      </div>
      <div class="product_dashboard">
        <div class="product_details">
          <img src="Images/ecommerce.jpg" width="100%" height="100%" />
        </div>
        <div class="product_details">

          <form method="post">
          <h2>All Sales in the Carts</h2><br>
            <table border=0 width=500 style="font-size: 12px; padding: 10px;">
              <tr>
                <th> ID</th>

                <th>Product</th>
                <th>Cost</th>

                <th>Date</th>
              </tr>
              <?php
              include 'connect.inc.php';
              $select = "SELECT * FROM orders";
              $query = mysqli_query($connect, $select);
              while($data = mysqli_fetch_assoc($query)){
                $pid = $data['id'];
                // $customer = $data['customer'];
                $pname = $data['product_name'];
                $cost = $data['selling_price'];
                // $quantity = $data['quantity'];
                $date = $data['order_date'];
                echo "<tr>
                  <td>$pid</td>

                  <td>$pname</td>
                  <td>$cost</td>

                  <td>$date</td>
                </tr>";
              }
              ?>
              <tr></tr>

            </table>
          </form>
        </div>
      </div>

    </div>
  </body>
</html>

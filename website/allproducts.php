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
      <div class="product_dashboard">
        <div class="product_user" style="border: 1px solid black; margin-bottom: 0px;">
          <p style="text-align: center; padding: 5px; padding-bottom: 5px; margin-right: 20px; font-weight: bold;"> <a href="dashboard.php"> Home </a>      |   <a href="addProducts.php">  Add Products </a>  |<a href="allproducts.php"> All Products </a> | <a href="allsales.php"> All Sales </a> | <a href="logout.php">Logout</a></p>
        </div>


        <div class="product_dashboard">

          <?php
            include 'connect.inc.php';
            $select = "SELECT * FROM product";
            $query = mysqli_query($connect, $select);
            while($fetch = mysqli_fetch_assoc($query)){
              $pname = substr($fetch['product_name'], 0, 20);
              $cprice = $fetch['cost_price'];
              $sprice = $fetch['selling_price'];
              $qtty = $fetch['quantity'];
              $label = $fetch['label'];
              $id = $fetch['id'];
              $description = substr($fetch['description'], 0, 100);
              echo "

          <div class='product1'>
            <h3>$pname</h3>
            <p>$description</p>
            <form method='GET' action='product_details.php' style='padding: 0px;'>
            <button Name='buy_now'>Buy Now</button>
            <h2 style='text-align: center;'>#$cprice</h2>
            <input type='text' value='$id' hidden name='id' />

          </div>
          </form>
          ";

        }
      ?>


        </div>
      </div>

    </div>
  </body>
</html>

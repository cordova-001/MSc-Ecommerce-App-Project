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
        <div class="product_details">
          <img src="Images/ecommerce.jpg" width="100%" height="100%" />
        </div>

        <div class="product_details">
          <?php addProduct(); ?>
          <form method="post">
          <h2>Add Products</h2><br>
            <div><label>Product Name</label><input type="text" name="pname" required style="float: right;"></div><br>
            <div><label>Cost Price</label><input type="number" step="0.1" name="cprice" required style="float: right;"></div><br>
            <div><label>Selling Price</label><input type="number" step="0.1" name="sprice" required style="float: right;"></div><br>
            <div><label>Quantity</label><input type="number" name="qtty" style="float: right;"></div><br>
            <div><label>Label</label><input type="text" name="label" style="float: right;"></div><br>
            <div><label>Description</label><textarea name="description" style="float: right; width: 60%;"></textarea></div><br>
            <div><label></label><input type="submit" name="addProduct" style="float: right;"></div><br>
          </form>
        </div>
      </div>

    </div>
  </body>
</html>

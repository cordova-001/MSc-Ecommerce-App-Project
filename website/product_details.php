<?php
session_start();
if(!$_SESSION['email']){
  header('Location: login.php');
}
?>
<!DOCTYPE>
<?php
include 'function.php';
include 'connect.inc.php';
if(isset($_GET['buy_now'])){
  $id = $_GET['id'];
  $select = "SELECT * FROM product WHERE id= '$id' ";
  $query = mysqli_query($connect, $select);
  while($row = mysqli_fetch_assoc($query)){
    $pname = $row['product_name'];
    $cprice = $row['cost_price'];
    $sprice = $row['selling_price'];
    $qtty = $row['quantity'];
    $label = $row['label'];
    $id = $row['id'];
    $description = $row['description'];
  }
}
?>
<html>
<head>
    <title>Bravo Wine Products </title>
    <link rel="stylesheet" href="style.css" type="text/css" />
  </head>
  <body>
    <div id="product_container">
      <div class="product_head">
        <h2 style="text-align: center; margin-top: 30px; color: white;">Bravo Wine Products</h2>
      </div>
      <div class="product_headings">
        <h2 style="text-align: center; margin-top: 15px; color: white;">Bravo Wine Products</h2>
      </div>
      <div class="product_user">
        <p style="text-align: center; padding: 5px; margin-right: 20px; font-weight: bold;"> <?php echo $_SESSION['email']; ?> | <a href="shopping_cart.php">Shopping Cart </a> | <a href="logout.php">Logout</a></p>
      </div>
      <div class="product_dashboard">
        <div class="product_details">
          <img src="Images/ecommerce.jpg" width="100%" height="100%" />
        </div>
        <div class="product_details">
          <h1><?php echo $pname; ?></h1>
          <h2 style="text-align: center;">£<?php echo $sprice; ?></h2>
          <p style="text-align: Center;">
          <?php echo $description; ?>
        </p>
        <?php addOrder(); ?>
        <form method="POST" action="#">
          <input type="text" name="pname" hidden value="<?php echo $pname; ?>" />
          <input type="text" name="price" hidden value="<?php echo $sprice; ?>" />
          <input type="text" name="customer" hidden value="<?php echo $_SESSION['name']; ?>" />
          <input type="text" name="email" hidden value="<?php echo $_SESSION['email']; ?>" />
        <button name="add_to_cart">ADD TO CART</button>
        </form>

        </div>
      </div>

    </div>
  </body>
</html>

<?php
session_start();
if(!$_SESSION['email']){
  header('Location: login.php');
}
?>
<!DOCTYPE>
<?php
// include 'function.php';
// include 'connect.inc.php';
// if(isset($_POST['add_to_cart'])){
//     $id = $_POST['id'];
//     $pname = $_POST['pname'];
//     $customer = $_POST['name'];
//     $customer_email = $_POST['email'];
//     $price = $_POST['price'];
//     $date = $_POST['date'];
// }
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
          <form method="post">
          <h2>My Shopping Cart</h2><br>
            <table border=0 width=500 style="font-size: 12px; padding: 10px;">
              <tr>
                <th> ID</th>

                <th>Product</th>
                <th>Cost</th>

                <th>Date</th>
              </tr>
              <?php
              include 'connect.inc.php';
              $email = $_SESSION['email'];
              $select = "SELECT * FROM orders WHERE customer_email = '$email'";
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
        </p>


        </div>
      </div>

    </div>
  </body>
</html>

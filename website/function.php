<?php

function signup(){
    if (isset($_POST['submit'])){
        $email = htmlentities(addslashes($_POST['email']));
        $password = md5(htmlentities(addslashes($_POST['password'])));
        $pword = md5(htmlentities(addslashes($_POST['pword'])));
        $remail = htmlentities(addslashes($_POST['email']));
        $name = htmlentities(addslashes($_POST['name']));
        $phone = htmlentities(addslashes($_POST['phone']));
        $street = htmlentities(addslashes($_POST['street']));
        $city = htmlentities(addslashes($_POST['city']));
        $country = htmlentities(addslashes($_POST['country']));
        $website = htmlentities(addslashes($_POST['website']));
        $gender = htmlentities(addslashes($_POST['gender']));
        $day = htmlentities(addslashes($_POST['day']));
        $month = htmlentities(addslashes($_POST['month']));
        $year = htmlentities(addslashes($_POST['year']));
        $nationality = htmlentities(addslashes($_POST['nationality']));
        $adult = htmlentities(addslashes($_POST['adult']));
        $terms = htmlentities(addslashes($_POST['terms']));
        $newsletter = htmlentities(addslashes($_POST['newsletter']));
        include 'connect.inc.php';
        if ($password != $pword){
            echo "<script>alert('The password is not the same')</script>";
        }
        if ($email != $remail){
            echo "<script>alert('The emails are not the same')</script>";
        }
        // $connect = mysqli_connect('localhost', 'root', '', 'bravo_wine');
        include 'connect.inc.php';
        $check = "SELECT * FROM customer WHERE email = '$email' || phone = '$phone'";
        $query = mysqli_query($connect, $check);
        if (mysqli_num_rows($query)>1){
            echo "<script>alert('User with this account already exist')</script>";
        }else{
            $insert = "INSERT INTO customer
            (email, password, name, phone, street, city, country, website, gender,
            day, month, year, nationality, adult, terms, newsletter)
            VALUES
            ('$email', '$password', '$name', '$phone', '$street', '$city', '$country', 'website', 'gender',
            '$day', '$month', '$year', '$nationality', '$adult', '$terms', '$newsletter')";
            if (mysqli_query($connect, $insert)){
                echo "<script>alert('The account has been created')</script>";
            }else{
                echo mysqli_error($connect);
            }
        }

    }
}

function login(){
  if(isset($_POST['login'])){
    $email = htmlentities(addslashes($_POST['email']));
    $pword = md5(htmlentities(addslashes($_POST['pword'])));
    if (empty($_POST['email']) || empty($_POST['pword'])){
      echo "Email or password can not be empty";
    }else{
      include 'connect.inc.php';
      $chk = "SELECT * FROM customer WHERE email='$email' AND password='$pword'";
      $query = mysqli_query($connect, $chk);
      if(mysqli_num_rows($query)==0){
        echo "<script>alert('Invalid Login')</script>";
      }else{
        $_SESSION['email']=$email;
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;

        header('Location: products.php');
      }
    }
  }
}

function adminlogin(){
  if(isset($_POST['adminlogin'])){
    $email = htmlentities(addslashes($_POST['email']));
    $pword = htmlentities(addslashes($_POST['pword']));
    if (empty($_POST['email']) || empty($_POST['pword'])){
      echo "Email or password can not be empty";
    }else{
      include 'connect.inc.php';
      $chk = "SELECT * FROM admin WHERE email='$email' AND password='$pword'";
      $query = mysqli_query($connect, $chk);
      if(mysqli_num_rows($query)==0){
        echo "<script>alert('Invalid Login')</script>";
      }else{
        $_SESSION['email']=$email;
        header('Location: dashboard.php');
      }
    }
  }
}


function addProduct(){
  if(isset($_POST['addProduct'])){
    $product_name = htmlentities(addslashes($_POST['pname']));
    $cost_price = htmlentities(addslashes($_POST['cprice']));
    $selling_price = htmlentities(addslashes($_POST['sprice']));
    $quantity = htmlentities(addslashes($_POST['qtty']));
    $label = htmlentities(addslashes($_POST['label']));
    // $order_date = htmlentities(addslashes($_POST['order_date']));
    $description = htmlentities(addslashes($_POST['description']));
    include 'connect.inc.php';
    if (empty($_POST['pname']) || empty($_POST['cprice']) || empty($_POST['sprice'])){
      echo "<script>alert('The required fields has to be provided')";
    }else{
      $chk = "SELECT * FROM product WHERE product_name='$product_name'";
      $query = mysqli_query($connect, $chk);
      if(mysqli_num_rows($query)>0){
        echo "<script>alert('Product with thesame product name already uploaded')</script>";
      }else{
        $insert = "INSERT INTO product (product_name, cost_price, selling_price, quantity, label, description)
        VALUES
        ('$product_name', '$cost_price', '$selling_price', '$quantity', '$label', '$description')";
        if(mysqli_query($connect, $insert)){
          echo "<script>alert('The Product has been added successfully')</script>";
        }
      }
    }
    }
}

function addOrder(){
  if(isset($_POST['add_to_cart'])){
    $product_name = htmlentities(addslashes($_POST['pname']));
    $customer = $_SESSION['name'];
    $price = htmlentities(addslashes($_POST['price']));
    // $quantity = htmlentities(addslashes($_POST['quantity']));
    $customer_email = $_SESSION['email'];
    $order_date = date('Y-m-d');
    // $cost_price = htmlentities(addslashes($_POST['cost_price']));
    include 'connect.inc.php';
        $insert = "INSERT INTO orders (product_name, customer, selling_price, customer_email, order_date)
        VALUES
        ('$product_name', '$customer', '$price', '$customer_email', '$order_date')";
        if(mysqli_query($connect, $insert)){
          echo "<script>alert('The Product has been added to the cart successfully')</script>";
        }
    }
  }




?>

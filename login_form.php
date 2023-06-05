<?php
session_start(); // Start the session
$db_host = "localhost"; // Database host
$db_user = "root"; // Database user
$db_pass = ""; // Database password
$db_name = "phase_db"; // Database name
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name); // Connect to the database
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM members WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email;
        header('Location: user_page.php');
    } else {
        echo "Incorrect username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/registration.css">

   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body>
<header>
<a href="index.html" class="logo">PHASE</a>

		<ul class="navlist">
			<li><a href="menu.html">APPAREL</a></li>
			<li><a href="#">ATLETICS</a></li>
			<li><a href="login_form.php">ACCOUNT</a></li>
		</ul>

		<div class="header-icons">
			<i class='bx bx-shopping-bag' id="cart-icon"></i>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
        <!-- CART -->
        <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
            <!-- CONTENT -->
            <div class="cart-content">

            </div>
                <div>
                    <!-- TOTAL -->
                    <div class="total">
                        <div class="total-title">Total</div>
                        <div class="total-price">$0</div>
                    </div>
                    <!-- BUY BUTTON -->
                    <button type="button" class="btn-buy">Buy Now</button>
                    <!-- CART CLOSE -->
                    <i class='bx bx-x' id="close-cart"></i>
                </div>
            </div>
        </div>
	</header>
    
    <!-- CART -->
    <div class="cart">
        <h2 class="cart-title">Your Cart</h2>
        <!-- CONTENT -->
        <div class="cart-content">

        </div>
        <div>
            <!-- TOTAL -->
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price">$0</div>
            </div>
            <!-- BUY BUTTON -->
            <button type="button" class="btn-buy">Buy Now</button>
            <!-- CART CLOSE -->
            <i class='bx bx-x' id="close-cart"></i>
        </div>
    </div>
    <br>
    <br>
    <br>   
<div class="container">

   <form action="login_form.php" method="post">
      <h3>LOGIN NOW</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="email" required placeholder="Enter Your Email">
      <input type="password" name="password" required placeholder="Enter Your Password">
      <input type="submit" name="submit" value="login now" class="registerbtn">
      <p>don't have an account? <a href="register_page.php">register now</a></p>
   </form>

</div>

<script src="./script/script.js"></script>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
   <!-- custom css file link  -->
    <script src = "https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src = "https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   <link rel="stylesheet" href="./css/registration.css">

</head>
<body>
<header>
<a href="/index.html" class="logo">PHASE</a>

		<ul class="navlist">
			<li><a href="#">APPAREL</a></li>
			<li><a href="#">ATLETICS</a></li>
			<li><a href="#">ACCOUNT</a></li>
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

   <form action="register_php.php" method="post">
      <h3>REGISTER NOW</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="first_name" required placeholder="Enter Your First Name">
      <input type="text" name="last_name" required placeholder="Enter Your Last Name">
      <input type="text" name="email" required placeholder="Enter Your Email">
      <input type="password" name="password" required placeholder="Enter Your Password">
      <input type="password" name="cpassword" required placeholder="Confirm Your Password">
      <input type="submit" name="submit" value="REGISTER NOW" class="registerbtn">
      <p>already have an account? <a href="login_form.php">login now</a></p>
   </form>
</div>

<script src="./script/script.js"></script>
</body>
</html>
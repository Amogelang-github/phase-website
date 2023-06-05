
<?php

$conn = mysqli_connect('localhost','root','','phase_db');

if(isset($_POST['submit'])){

   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM members WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO members(first_name, last_name, email, password) VALUES('$first_name', '$last_name', '$email','$pass')";
         echo 'You have successfully registered! You can now login!';
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }
};
?>
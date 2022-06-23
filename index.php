<?php require 'header.php' ?>


<?php

error_reporting(0);
include('includes/config.php');
if($_SESSION['login']!=''){
$_SESSION['login']='';
}
if(isset($_POST['login']))
{
  //code for captach verification

        
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT email,password, FROM member WHERE email=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
 foreach ($results as $result) {
 $_SESSION['memberID']=$result->memberID;
if($result->Status==1)
{
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location ='home.php'; </script>";
} else {
echo "<script>alert('Your Account Has been blocked .Please contact admin');</script>";

}
}

} 

else{
echo "<script>alert('Invalid Details');</script>";
}

}
?>

<!-- slider section -->
    <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Login
        </h2>
      </div>
      <form role="form" method="post">
      <div class="row">

        <div class="col-md-12">
          <div class="form-group">
          <label for="usr"> Email:</label>
          <input type="text" class="form-control" id="usr" required name="email">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
          <label for="usr">Password:</label>
          <input type="Password" class="form-control" id="usr" required name="password">
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="form-group">
          <label for="usr">Confirm Password:</label>
          <input type="Password" class="form-control" id="usr">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
          <label for="usr"> Don't Have an account? <a href="register.php">Register</a></label>
          
          </div>
        </div>
          
          </div>
        </div>

        <div class="col">

          <div class="form-group">
          <button type="submit" class="btn " name="login" style="background-color: #313958;color: white; margin-left:60px; " > Login</button>
          </div>
       
      </div>
      </form>
      
    </div>
  </section>
  
    <!-- end slider section -->

<?php require 'footer.php' ?>
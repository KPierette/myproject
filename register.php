


<?php require 'header.php' ?>
<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Register
        </h2>
      </div>
      <form method="POST" action="includes/signup.php">
      <div class="row">
       

        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">FirstName</label>
          <input type="text" class="form-control" id="usr" name="FirstName" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">LastName</label>
          <input type="text" class="form-control" id="usr" name="LastName">
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">DateOfBirth:</label>
          <input type="text" class="form-control" id="usr" name="DateOfBirth">
          </div>
        </div>

         <div class="col-md-6">
          <div class="form-group">
          <label for="usr">PlaceOfBirth:</label>
          <input type="text" class="form-control" id="usr" name="PlaceOfBirth">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">Sex:</label>
          <input type="text" class="form-control" id="usr" name="Sex">
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">PhoneNumber:</label>
          <input type="text" class="form-control" id="usr" name="PhoneNumber">
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">Email:</label>
          <input type="email" class="form-control" id="usr" name ="Email">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">UserName(MOMO):</label>
          <input type="text" class="form-control" id="usr" name="UserName">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">Password:</label>
          <input type="Password" class="form-control" id="usr" name="Password">
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">Confirm Password:</label>
          <input type="Password" class="form-control" id="usr">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
          <label for="usr">Have an account? <a href="index.php">Login</a></label>
          
          </div>
        </div>

        <div class="col">

          <div class="form-group">
          <button type="submit" class="btn " name="signup" style="background-color: #313958;color: white; margin-left:60px; " >Register</button>
          </div>

      </div>
    </form>
  
      
    </div>
  </section>
  
    <!-- end slider section -->

<?php require 'footer.php' ?>
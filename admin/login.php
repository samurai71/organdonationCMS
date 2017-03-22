<?php 
  $pageTitle = "Login";
  include "includes/admin_header.php";
  //include "includes/admin_top_nav.php";
 ?>
<h1 class="hide">Login to Heart2Heart Admin</h1>
 <div class="row banner">
 <div class="large-6 columns">
 <img src="images/logo.svg" alt="Heart2Heart Logo">
 </div>
 </div>
  
    <form id="loginForm">
  <div class="row panel">
    <div class="large-offset-4 large-4 columns">
      <label>Username:
        <input type="text" placeholder="Please Enter your username" />
      </label>
      <label>Password:
        <input type="password" placeholder="Please Enter your password" />
      </label>
        <input id="submit" class="button round" type="submit" value="Submit">
      <p><a href="#">Forgot password</a></p>
    </div>
  </div>
</form>

    <!-- <form id="loginForm" action="" method="post" class="small-12 medium-4 large-4 end columns">
      <h3 class="hide">Login Form Container</h3>
      <fieldset>
        <h2 class="hide">Login Form</h2>
        <label for="username">Username:</label>
        <input type="text" required id="username" name="fullName" size="30" placeholder="Enter your username">
        <label for="password">Password:</label>
        <input type="password" required id="password" size="30" placeholder="Enter your password">
        <div class="text-center">
          <input id="submit" type="submit" value="Submit">
        </div>
      </fieldset>
    </form> -->
    

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

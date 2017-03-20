<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heart2Heart Login</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
  <section class="row medium-offset-4 large-offset-4 columns">
    <form id="loginForm" action="" method="post" class="small-12 medium-4 large-4 end columns">
      <h3 class="hide">Login Form Container</h3>
      <fieldset>
        <h2 class="hide">Login Form</h2>
        <label for="username">Username:</label>
        <input type="text" required id="username" name="fullName" size="30" placeholder="Enter your username">
        <label for="password">Password:</label>
        <input type="password" required id="password" size="30" placeholder="Enter your password">
        <div class="text-center">
          <input id="submit" type="submit" value="Send">
        </div>
      </fieldset>
    </form>
    </section>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>

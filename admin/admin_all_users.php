<?php 
  $pageTitle = "Admin";
  
  require_once('phpscripts/init.php');
  
  confirm_logged_in();
 ?>

 <?php 
    $tbl = "tbl_user";
    $getUsers = getAll($tbl);
  ?>
 <!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo($pageTitle); ?> | Heart2Heart </title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
  <div class="fixed sticky">
  <nav class="top-bar" data-topbar >
    <ul class="title-area">
      <li class="name">
        <h1><a href="../index.php" target="_blank">Heart2Heart</a></h1>
      </li>
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
    <h2 class="hide">Top Bar Navigation</h2>
      <!-- Right Nav Section -->
      <ul class="right">
        <!-- <li><a href="#">Right Button Active</a></li> -->
        <li class="has-dropdown">
          <a href="#">Hello <?php echo $_SESSION['users_name']; ?></a>
          <ul class="dropdown">
            <li><a href="#">Edit My Profile</a></li>
            <li><a href="includes/caller.php?caller_id=logout">Log Out</a></li>
          </ul>
        </li>
      </ul>

      <!-- Left Nav Section -->
      <!-- <ul class="left">
        <li><a href="#">Left Nav Button</a></li>
      </ul> -->
    </section>
  </nav></div>
  <div class="medium-2 large-2 columns">
    <ul class="side-nav">
      <li><a href="index.php">Dashboard</a></li>
      <li><a data-dropdown="drop1" aria-controls="drop1" aria-expanded="false">Pages</a>
    <ul id="drop1" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
      <li><a href="#">All Pages</a></li>
      <li><a href="#">Add New Page</a></li>
      <li><a href="#">Edit Page</a></li>
    </ul>
      </li>
      <li><a data-dropdown="drop2" aria-controls="drop2" aria-expanded="false">Comments</a>
    <ul id="drop2" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
      <li><a href="#">View Comments</a></li>
      <li><a href="#">Pending Comments</a></li>
      <li><a href="#">Edit Comments</a></li>
    </ul>
      </li>
      <li><a data-dropdown="drop3" aria-controls="drop3" aria-expanded="false">Users</a>
    <ul id="drop3" class="f-dropdown" data-dropdown-content aria-hidden="true" tabindex="-1">
      <li><a href="#">All Users</a></li>
      <li><a href="#">Add New User</a></li>
      <li><a href="#">Edit User</a></li>
    </ul>
      </li>
    </ul>
    </div>

  <section>
    <div class="row">
      <div class="medium -10 large-10 columns">
        <h1>All Users</h1>
         <ul><?php
    if(!is_string($getUsers)) {
      while($row = mysqli_fetch_array($getUsers)) {
        echo "<li>";
        echo "<p>{$row['user_fname']}</p>";
        echo "<p>{$row['user_lname']}</p>";
        echo "<p>{$row['user_name']}</p>";
        echo "<p>{$row['user_email']}</p>";
        echo "<br><br>";
        echo "</li>";
      }
    }else{
      echo "<p>{$getUsers}</p>";
    }
  
  
  ?></ul> 
    <table role="grid">
      <thead>
        <tr>
          <th>Username</th>
          <th>Name</th>
          <th>Email</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Content Goes Here</td>
          <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
          <td>Content Goes Here</td>
          <td><a href="#">Edit User</a></td>
        </tr>
      </tbody>
    </table>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam impedit ut fugit nihil adipisci, ipsam quibusdam incidunt voluptas, nostrum consequatur quo praesentium officiis, aspernatur provident. Soluta sapiente dignissimos provident doloribus.</p>
        <p>Laboriosam vel aperiam, consequatur reprehenderit ad exercitationem quibusdam sequi alias ipsum adipisci. Debitis, ad iste assumenda consequuntur dicta aspernatur repellendus hic architecto unde corporis voluptate. Vitae aliquid, corrupti numquam laboriosam.</p>
        <p>Ut soluta maiores eos ullam amet alias cum, non pariatur accusantium quasi tempora, dicta? Assumenda ullam cum dolorem quibusdam eaque natus numquam, voluptas officia eum minus ad pariatur ab quae.</p>
      </div>
    </div>
    
   
    

      
    
    </section>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
    <script src="js/start.js"></script>
  </body>
</html>
<?php
 $pageTitle = "Contact";
  include "includes/header.php";
  include "includes/blacknav.php";
?>
  
<!--  <section id="topHeader">
    <h2 class="hide">Contact Header</h2>
    <section class="row">
      <div class="small-12 small-centered medium-10 large-10 large-centered text-center columns">
        <h2 id="title">Contact Us</h2>
        <p>Reach out and talk to us!</p>
      </div>
    </section>
  </section>-->
 
</header>

  <section class="row">
    <div class="small-10 small-centered medium-8 large-8 columns" id="topHeader">
      <h3 id="allAbout">Contact Us</h3>
      <p>Reach out and talk to us!</p>
    </div>
  </section> 


<section id="contactIntro">
  <h3 class="hide">Contact Intro</h3>
  <section class="row">
    <div class="small-10 small-centered medium-10 large-10 columns">
      <h3 class="hide">Contact Info</h3>
      <p>Have a question or comment about the website or campaign? Fill out this form and we'll get back to you! </p>
    </div>
  </section>
</section>

<!--<div id="contact">
  <section id="formContainer" class="row">
    <form id="contactForm" action="form.php" method="post" class="small-12 small-centered large-10 large-offset-1 columns">
      <h3 class="hide">Contact Form Container</h3>
      <fieldset>
        <h2 class="hide">Contact Form</h2>
        <label for="name">Name:</label>
        <input type="text" required id="name" name="fullName" size="30" placeholder="Enter your name">
        <label for="email">Email:</label>
        <input type="email" required id="email" size="30" placeholder="Enter your Email">
        <label for="comments">Your Message:</label>
        <textarea name="comments" id="comments" required cols="50" rows="8"></textarea>
        <div class="text-center">
          <input id="submit" type="submit" value="Send">
        </div>
      </fieldset>
    </form>
  </section>
</div>-->

<div id="contact">
  <section id="formContainer" class="row">
      
      

    
      
    <div class="small-12 medium-5 large-5 large-offset-1 columns" id="contactInfo">
    
    

    <div class="small-4 medium-4 large-2 columns">
    <img src="images/web-circle.svg" alt="Call" class="contactIcon"/>
    </div> 
    
    <div class="small-8 medium-8 large-10 columns">
    <h3>Online</h3>
    <ul>
    <li>Visit the Trillium Gift of Life Network website at <a href="http://www.giftoflife.on.ca">www.giftoflife.on.ca</a></li>
    </ul>
    </div>

    
    
    <div class="small-4 medium-4 large-2 columns">
    <img src="images/mail-circle.svg" alt="Call" class="contactIcon"/>
    </div> 
    
    <div class="small-8 medium-8 large-10 columns">
    <h3>By Mail</h3>
    <ul>
    <li>Trillium Gift of Life Network</li>
 	<li>522 University Avenue , Suite 900</li>
    <li>Toronto, ON M5G 1W7</li>
    </ul>
    </div>
    
    <div class="small-4 medium-4 large-2 columns">
    <img src="images/phone-circle.svg" alt="Call" class="contactIcon"/>
    </div> 
    
    <div class="small-8 medium-8 large-10 columns">
    <h3>Phone</h3>
    <ul>
    <li>General inquiries</li>
    <li>1-800-263-2833</li>
    <li>416-363-4001 (Toronto)</li>
    </ul>
  	</div>
    
    
    
    </div>
    
    
    <form id="contactForm" action="form.php" method="post" class="small-12 medium-5 large-5 end columns">
      <h3 class="hide">Contact Form Container</h3>
      <fieldset>
        <h2 class="hide">Contact Form</h2>
        <label for="name">Name:</label>
        <input type="text" required id="name" name="fullName" size="30" placeholder="Enter your name">
        <label for="email">Email:</label>
        <input type="email" required id="email" size="30" placeholder="Enter your Email">
        <label for="comments">Your Message:</label>
        <textarea name="comments" id="comments" required cols="50" rows="8"></textarea>
        <div class="text-center">
          <input id="submit" type="submit" value="Send">
        </div>
      </fieldset>
    </form>

    
    
  </section>
</div>



<section class="row" id="groupIcons">
  <div class="small-4 large-2 large-offset-2 columns">
    <h3 class="hide">Affiliates</h3>
    <a href="https://www.beadonor.ca/"><img src="images/step2.svg" alt="BeADonor.ca"/></a> </div>
  <div class="small-4 large-2 large-offset-1 columns"> <a href="http://www.serviceontario.ca/"><img src="images/serviceontario.svg" alt="Service Ontario"/></a> </div>
  <div class="small-4 large-2 large-offset-1 end columns"> <a href="http://www.giftoflife.on.ca/en/"><img src="images/ontario-trillium.gif" alt="Ontario Trillium"/></a> </div>
</section>

<?php include "includes/footer.php"; ?>
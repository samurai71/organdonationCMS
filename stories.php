<?php
 $pageTitle = "Stories";
  include "includes/header.php";
  include "includes/nav.php";
?>
  
  
<!--  <section id="topHeader">
    <h2 class="hide">Stories Header</h2>
    <section class="row">
      <div class="small-12 small-centered medium-10 large-10 large-centered text-center columns">
        <h2 id="title">Stories</h2>
        <p>Spread the word about organ donation and share your awkward but meaningful conversations!</p>
      </div>
    </section>
  </section>--> 
</header>

  <section class="row">
    <div class="small-10 small-centered medium-8 large-8 columns" id="topHeader">
      <h3 id="allAbout">#Heart2Heart</h3>
      <p>Spread the word about organ donation and share your awkward but meaningful stories!</p>
    </div>
  </section> 


<section id="stories">
  <h2 class="hide">Stories Container</h2>
  <section class="row">
  
<!--    <div class="small-10 small-centered medium-8 large-8 columns">
      <h2 id="storiesHashtag">#Heart2Heart</h2>
    </div>-->
    
  </section>
  <section class="row">
    <div class="small-10 small-centered medium-10 large-10 columns">
      <h3 class="hide">Stories Info</h3>
      <p>Communication is an important tool for us to coexist and understand and live together. Sometimes there are things we want to talk about that are uncomfortable, with the people we care most about. Share your awkward but meaningful conversations and spread the word about organ donation. Scroll down below to see others who have spread the message!</p>
    </div>
  </section>
  <div id="messages">
    <section class="row messageBubble">
      <div class="small-10 small-centered medium-10 large-8 large-offset-4 columns message">
        <div class="platform text-right"><img src="images/twitter.svg" alt="twitter"/></div>
        <h3 class="storiesRed name">Stanley Yelnats (@yelnats)</h3>
        <h3 class="storiesRed location">Toronto</h3>
        <p>When I was twenty-one years old, I told by parents if I ever passed away I wanted my organs to be donated to be those in need. This was one of the most uncomfortable moments in my life. <span class="questionRed"> #heart2heart</span></p>
      </div>
      <div class="bubbleTail small-4 small-offset-4 end medium-4 medium-offset-6 large-4 large-offset-8 columns"> <img src="images/bubbletail.svg" alt="bubbletail"/> </div>
    </section>
    <section class="row messageBubble">
      <div class="small-10 small-centered medium-10 large-8 large-uncentered columns message">
        <div class="platform text-right"><img src="images/facebook.svg" alt="facebook"/></div>
        <h3 class="storiesRed name">Alicia H.</h3>
        <h3 class="storiesRed location">London</h3>
        <p>I was thirty when I was diagnosed with lung cancer. That evening I phoned up my mother and told her the news. Telling my mom was one of the most difficult moments I've ever had.<span class="questionRed"> #heart2heart</span></p>
      </div>
      <div class="bubbleTail small-4 small-offset-4 end medium-4 medium-offset-6 large-8 large-offset-4 columns"> <img src="images/bubbletail.svg" alt="bubbletail"/> </div>
    </section>
  </div>
</section>
<div id="storiesSubmit">
  <h3 id="shareFormTitle">Don’t have Twitter Or Facebook?</h3>
  <section id="formContainer" class="row">
    <form id="storiesForm" action="form.php" method="post" class="small-12 small-centered large-10 large-offset-1 columns">
      <h3 class="hide">Stories Form Container</h3>
      <fieldset>
        <h2 class="hide">Contact Form</h2>
        <h3>Share Your #HEART2HEART Experience</h3>
        <label for="name">Name:</label>
        <input type="text" required id="name" name="fullName" size="30" placeholder="Enter your name">
        <label for="email">Email:</label>
        <input type="email" required id="email" size="30" placeholder="Enter your Email">
        <label for="comments">Your Story:</label>
        <textarea name="comments" id="comments" required cols="50" rows="8"></textarea>
        <div class="text-center">
          <input id="submit" type="submit" value="Share">
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
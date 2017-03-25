<?php
 $pageTitle = "Register";
  include "includes/header.php";
  //include "includes/nav.php";
?>

<section id="videoCon">
    <h2 class="hide">Video Container</h2>
    <div id="videoOverlay">
    <?php include "includes/nav.php"; ?>

<div id="overlayInfo">
        <section class="row">
          <div class="text-center redLink" id="playHeader">
            <h2>Become A Donor And Give The Gift Of Life!</h2>
            <p> Click the heart to watch the video or go <a href="info.php">here</a> to learn all about Heart2Heart.</p>
          </div>
        </section>
        <section class="row">
          <div class="small-4 small-centered large-2 columns">
            <h3 class="hide">Play Button</h3>
            <img src="images/play.svg" alt="play" id="play"> </div>
        </section>
      </div>
    </div>
    <div id="videoToolbar"> X </div>
    <!--Video-->
    <video id="video" class="videoFront" preload="auto" autoplay loop>
      <source src="video/video.mp4" type="video/mp4">
      Video not supported </video>
    <div id="controls">
      <div id="playVideo" class="player-button"></div>
      <input type="range" id="seek-bar" value="0">
      <button type="button" id="mute" class="mute-button"></button>
      <input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1">
    </div>
    <!--Video End--> 
  </section>
</header>
<div id="hideBody">
  <section id="info">
    <h2 class="hide">Info Section</h2>
    <section class="row">
      <div class="small-10 small-centered medium-10 large-12 columns">
        <h2>Registering To Be An Organ Donor Takes Only</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-12 medium-4 medium-centered large-6 columns">
        <h3 id="twoMin">2 Minutes</h3>
      </div>
    </section>
  </section>
  <section class="row">
    <div class="small-12 small-centered large-12 stepsIntro columns">
      <h4>Just follow these 3 steps</h4>
    </div>
  </section>
  <section id="steps">
    <h2 class="hide">Steps Section</h2>
    <section class="row desktop">
      <div class="large-3 large-offset-2 columns">
        <div id="steps1" class="stepRed redLink">
          <h3>Click ‘Register Now’</h3>
          <p>Click on the red button labeled 'Register Now'. You will be taken to the <a href="https://www.beadonor.ca/">BeADonor.ca</a> website for Organ and Tissue Donor Registration.</p>
          <div class="small-12 columns text-center"><img src="images/step1.svg" alt="step1"/></div>
        </div>
        <div id="steps3" class="stepRed redLink">
          <h3>Spread the word to save more lives</h3>
          <p>Once you’ve registered your consent to donate, come back and encourage your friends and family members to do the same. Check out the <a href="stories.html">Stories</a> page to learn more.</p>
          <div class="small-12 columns text-center"><img src="images/step3.svg" alt="step3"/></div>
        </div>
      </div>
      <div class="large-2 columns line">
        <div class="circle circle1" >1</div>
        <div class="circle circle2" >2</div>
        <div class="circle circle3" >3</div>
      </div>
      <div class="large-3 columns end stepRed redLink" id="steps2">
        <h3>Follow the Easy-to-Read Directions On the BEADONOR.CA Website</h3>
        <p>Follow the instructions on the <a href="https://www.beadonor.ca/">BeADonor.ca</a> website and you will be taken to the ServiceOntario page to register your donation decision or check your registration status with the province of Ontario. Remember, you need to be at least 16 years of age.</p>
        <div class="small-12 columns text-center"><a href="https://www.beadonor.ca/"><img src="images/step2.svg" alt="step2"/></a></div>
      </div>
    </section>
    <div class="row mobile">
      <div class="small-2 large-2 columns lineSpace line">
        <div class="circle circle1" >1</div>
        <div class="circle circle2" >2</div>
        <div class="circle circle3" >3</div>
      </div>
      <div class="small-10 large-10 columns">
        <div class="small-12 columns step stepHeader redLink">
          <h3>Click ‘Register Now’</h3>
          <p>Click on the red button labeled 'Register'. You will be taken to the <a href="https://www.beadonor.ca/">BeADonor.ca</a> website for Organ and Tissue Donor Registration. </p>
        </div>
        <div class="small-12 columns step2 redLink" >
          <h3>Spread the word to save more lives</h3>
          <p>Once you’ve registered your consent to donate, come back and encourage your friends and family members to do the same. Check out the <a href="stories.html">Stories</a> page to learn more.</p>
        </div>
        <div class="small-12 columns step3 redLink">
          <h3>Follow the Easy-to-Read Directions On the BeADonor.ca Website</h3>
          <p>Follow the instructions on the <a href="https://www.beadonor.ca/">BeADonor.ca</a> website and you will be taken to the ServiceOntario page to register your donation decision or check your registration status with the province of Ontario. Remember, you need to be at least 16 years of age.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="register">
    <h2 class="hide">Register Section</h2>
    <section class="row">
      <div class="small-10 small-centered medium-10 large-12 text-center columns">
        <h2>Click Here to Sign Up!</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-10 small-centered medium-10 large-6 columns"> <a href="https://www.beadonor.ca/">
        <h3 id="registerButton">Register Now</h3>
        </a> </div>
    </section>
  </section>
  <div id="registerPart2">
    <section class="row">
      <div class="small-12 large-12 columns">
        <h2>Not interested in signing up online? Here are two other ways of registering.</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-12 large-4 large-offset-1 columns text-center whiteLink"> <a href="https://www.services.gov.on.ca/locations/start.do?locale=EN">
        <div class="registerAltBut"><img src="images/head.svg" alt="head"/>Register In Person</div>
        </a> </div>
      <div class="small-12 large-2 columns">
        <h2 id="or">Or</h2>
      </div>
      <div class="small-12 large-4 end columns text-center whiteLink"> <a href="http://www.forms.ssb.gov.on.ca/mbs/ssb/forms/ssbforms.nsf/GetFileAttach/014-3750-84~1/$File/3750-84E.pdf">
        <div class="registerAltBut"><img src="images/mail.svg" alt="mail"/>Register By Mail </div>
        </a> </div>
    </section>
  </div>
  <div id="hashtag">
    <section class="row">
      <div class="small-12 large-10 large-centered columns text-center">
        <p>Communication is an important tool for us to coexist, understand and live together. Sometimes there are things we want to talk about that are uncomfortable with the people we care most about.</p>
        <h2>Share your awkward but meaningful conversations and spread the word about becoming an organ donor with the hashtag:</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-12 large-12 columns text-center whiteLink"> <a href="stories.html">
        <h3>#Heart2HeartCanada</h3>
        </a> </div>
    </section>
  </div>
  <section class="row" id="groupIcons">
    <div class="small-4 large-2 large-offset-2 columns">
      <h3 class="hide">Affiliates</h3>
      <a href="https://www.beadonor.ca/"><img src="images/step2.svg" alt="BeADonor.ca"/></a> </div>
    <div class="small-4 large-2 large-offset-1 columns"> <a href="http://www.serviceontario.ca/"><img src="images/serviceontario.svg" alt="Service Ontario"/></a> </div>
    <div class="small-4 large-2 large-offset-1 end columns"> <a href="http://www.giftoflife.on.ca/en/"><img src="images/ontario-trillium.gif" alt="Ontario Trillium"/></a> </div>
  </section>


<!-- <section id="videoCon">
    <h2 class="hide">Video Container</h2>
    <div id="videoOverlay">
    //<?php include "includes/nav.php"; ?>
<div id="overlayInfo">
        <section class="row">
          <div class="text-center redLink" id="playHeader">
            <h2>Become A Donor And Give The Gift Of Life!</h2>
            <p> Click the heart to watch the video or go <a href="info.html">here</a> to learn all about #Heart2Heart.</p>
          </div>
        </section>
        <section class="row">
          <div class="small-4 small-centered large-2 columns">
            <h3 class="hide">Play Button</h3>
            <img src="images/play.svg" alt="play" id="play"> </div>
        </section>
      </div>
    </div>
    <div id="videoToolbar"> X </div>
    <video id="video" preload="auto" autoplay loop muted poster="../images/video-temp.svg.html">
      <source src="video/video.mp4" type="video/mp4" media="all and (max-width:480px)">
      Video not supported
      </source>
      <source src="video/video.mp4" type="video/mp4">
      Video not supported
      </source>
    </video>
  </section>
</header>
    
<div id="hideBody">
  <section id="info">
    <h2 class="hide">Info Section</h2>
    <section class="row">
      <div class="small-10 small-centered medium-10 large-12 columns">
        <h2>Registering to be an organ donor takes only</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-12 medium-4 medium-centered large-6 columns">
        <h3 id="twoMin">2 Minutes</h3>
      </div>
    </section>
  </section>
  <section class="row">
    <div class="small-12 small-centered large-12 stepsIntro columns">
      <h4>Just follow these 3 steps</h4>
    </div>
  </section>
  <section id="steps">
    <h2 class="hide">Steps Section</h2>
    <section class="row desktop">
      <div class="large-3 large-offset-2 columns">
        <div id="steps1" class="stepRed redLink">
          <h3>Click ‘Register Now’</h3>
          <p>Click on the red button labeled 'Register Now'. You will be taken to the <a href="https://www.beadonor.ca/">BeADonor.ca</a> website for Organ and Tissue Donor Registration.</p>
          <div class="small-12 columns text-center"><img src="images/step1.svg" alt="step1"/></div>
        </div>
        <div id="steps3" class="stepRed redLink">
          <h3>Spread the word to save more lives</h3>
          <p>Once you’ve registered your consent to donate, come back and encourage your friends and family members to do the same. Check out the <a href="stories.html">Stories</a> page to learn more.</p>
          <div class="small-12 columns text-center"><img src="images/step3.svg" alt="step3"/></div>
        </div>
      </div>
      <div class="large-2 columns line">
        <div class="circle circle1" >1</div>
        <div class="circle circle2" >2</div>
        <div class="circle circle3" >3</div>
      </div>
      <div class="large-3 columns end stepRed redLink" id="steps2">
        <h3>Follow the Easy-to-Read Directions On the BEADONOR.CA Website</h3>
        <p>Follow the instructions on the <a href="https://www.beadonor.ca/" target="_blank">BeADonor.ca</a> website and you will be taken to the ServiceOntario page to register your donation decision or check your registration status with the province of Ontario. Remember, you need to be at least 16 years of age.</p>
        <div class="small-12 columns text-center"><a href="https://www.beadonor.ca/" target="_blank"><img src="images/step2.svg" alt="step2"/></a></div>
      </div>
    </section>
    <div class="row mobile">
      <div class="small-2 large-2 columns lineSpace line">
        <div class="circle circle1" >1</div>
        <div class="circle circle2" >2</div>
        <div class="circle circle3" >3</div>
      </div>
      <div class="small-10 large-10 columns">
        <div class="small-12 columns step stepHeader redLink">
          <h3>Click ‘Register Now’</h3>
          <p>Click on the red button labeled 'Register'. You will be taken to the <a href="https://www.beadonor.ca/" target="_blank">BeADonor.ca</a> website for Organ and Tissue Donor Registration. </p>
        </div>
        <div class="small-12 columns step2 redLink" >
          <h3>Spread the word to save more lives</h3>
          <p>Once you’ve registered your consent to donate, come back and encourage your friends and family members to do the same. Check out the <a href="stories.php">Stories</a> page to learn more.</p>
        </div>
        <div class="small-12 columns step3 redLink">
          <h3>Follow the Easy-to-Read Directions On the BeADonor.ca Website</h3>
          <p>Follow the instructions on the <a href="https://www.beadonor.ca/" target="_blank">BeADonor.ca</a> website and you will be taken to the ServiceOntario page to register your donation decision or check your registration status with the province of Ontario. Remember, you need to be at least 16 years of age.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="register">
    <h2 class="hide">Register Section</h2>
    <section class="row">
      <div class="small-10 small-centered medium-10 large-12 text-center columns">
        <h2>Click Here to Sign Up!</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-10 small-centered medium-10 large-6 columns"> <a href="https://www.beadonor.ca/" target="_blank">
        <h3 id="registerButton">Register Now</h3>
        </a> </div>
    </section>
  </section>
  <div id="registerPart2">
    <section class="row">
      <div class="small-12 large-12 columns">
        <h2>Not interested in signing up online? Here are two other ways of registering.</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-12 large-4 large-offset-1 columns text-center whiteLink"> <a href="https://www.services.gov.on.ca/locations/start.do?locale=EN" target="_blank">
        <div class="registerAltBut"><img src="images/head.svg" alt="head"/>Register In Person</div>
        </a> </div>
      <div class="small-12 large-2 columns">
        <h2 id="or">Or</h2>
      </div>
      <div class="small-12 large-4 end columns text-center whiteLink"> <a href="http://www.forms.ssb.gov.on.ca/mbs/ssb/forms/ssbforms.nsf/GetFileAttach/014-3750-84~1/$File/3750-84E.pdf" target="_blank">
        <div class="registerAltBut"><img src="images/mail.svg" alt="mail"/>Register By Mail </div>
        </a> </div>
    </section>
  </div>
  <div id="hashtag">
    <section class="row">
      <div class="small-12 large-10 large-centered columns text-center">
        <p>Communication is an important tool for us to coexist and understand and live together. Sometimes there are things we want to talk about that are uncomfortable, with the people we care most about.</p>
        <h2>Share your awkward but meaningful conversations and spread the word about becoming an organ donor with the hashtag:</h2>
      </div>
    </section>
    <section class="row">
      <div class="small-12 large-12 columns text-center whiteLink"> <a href="stories.php">
        <h3>#Heart2Heart</h3>
        </a> </div>
    </section>
  </div>
  <section class="row" id="groupIcons">
    <div class="small-4 large-2 large-offset-2 columns">
      <h3 class="hide">Affiliates</h3>
      <a href="https://www.beadonor.ca/" target="_blank"><img src="images/step2.svg" alt="BeADonor.ca"/></a> </div>
    <div class="small-4 large-2 large-offset-1 columns"> <a href="http://www.serviceontario.ca/" target="_blank"><img src="images/serviceontario.svg" alt="Service Ontario"/></a> </div>
    <div class="small-4 large-2 large-offset-1 end columns"> <a href="http://www.giftoflife.on.ca/en/" target="_blank"><img src="images/ontario-trillium.gif" alt="Ontario Trillium"/></a> </div>
  </section> -->
  <?php include "includes/footer.php"; ?>

<?php 
$pageTitle = "Info";
include "includes/header.php";
include "includes/blacknav.php";
 ?>

 <section id="about">
   <h3 class="hide">Info Section</h3>
   <section class="row">
     <div class="small-10 small-centered medium-8 large-8 columns" id="topHeader">
       <h3 id="allAbout">All About Heart2Heart</h3>
       <p>Have a question about Heart2Heart? You've come to the right place!</p>
     </div>
   </section>
   <section class="row">
     <div class="small-10 small-centered medium-10 large-10 columns redLink">
       <h3 class="hide">Q & A Info</h3>
       <p>Heart2Heart is a non-profit organ donor registration campaign affiliated with Trillium Gift of Life Network. Our campaign strives to educate the public on the importance of organ donation and becoming an organ donor. Our campaign strives to educate the public on the importance of organ donation and becoming a donor. We encourage you to communicate to your relatives about your decision as they are able to veto your choice even if you are registered.

 Sometimes there are things we need to talk about with the people we care most for. Through word of mouth and social media we can spread the message and save lives together. <a href="stories.php">#Heart2HeartCanada</a></p>
     </div>
   </section>
   <section id="statBox">
     <div class="small-10 small-centered medium-10 large-12 columns">
       <h2 id="didYouKnow">Did you know that...</h2>
     </div>
     <div id="stats">
       <section class="row">
         <div class="small-12 large-6 columns">
           <div class="small-6 medium-6 large-6 columns statsL"> <img src="images/pie.svg" alt="pie graph"/> </div>
           <div class="small-6 large-6 columns statsL">
             <p>31% of Ontarians are registered donors. That’s 3.7 million out of an eligible 12.1 million.</p>
           </div>
           <div class="small-6 large-6 columns statsL"> <img src="images/three-people.svg" alt="pie graph"/> </div>
           <div class="small-6 large-6 columns statsL">
             <p>As of December 31st 2016, over 1,500 people in Ontario are currently waiting for an organ transplant.</p>
           </div>
         </div>
         <div class="small-12 large-6 columns text-center statsR">
           <div class="small-12 large-12 columns statsR">
             <h3>1 Donor Can Save Up To 8 Lives</h3>
             <p>And Can Enhance the lives of up to 75 more through the gift of tissue.</p>
           </div>
           <div class="small-12 large-12 columns statsR">
             <h3 class="hide">1 in 8 Stat Image</h3>
             <img src="images/statspeople.svg" alt="stats people"/> </div>
         </div>
       </section>
     </div>
   </section>
   <div id="q-a">
     <div id="diagramBubble">
       <div id="diagramBox" class="main-copy">
         <div id="diagramClose"><div class='pointerAddOn'>X</div></div>
         <h4>Organ</h4>
         <p>Organ Information</p>
       </div>
       <div id="diagramTail"> <img src="images/bubbletail-s.png" alt="bubbletail"/></div>
     </div>
     <section class="row">
       <div class="small-10 small-centered medium-10 large-10 columns">
         <h3 class="questionRed">Q: What organs and tissue can I donate?</h3>
         <p>A: Organs and tissue that can be donated include the heart, kidneys, liver, lungs, pancreas, small intestines, eyes, bone, skin, and heart valves. Below you can click on the diagram and learn about all the organs. </p>
       </div>
     </section>
     <section class="row">
       <div class="small-10 small-centered medium-6 large-6 columns test">
         <h4 class="hide">Organ Diagram</h4>
         <object data="images/diagram.svg" id="diagramSvg">
         </object>
       </div>
     </section>
     <section class="row question">
       <div class="small-10 small-centered medium-10 large-10 columns redLink">
         <h3 class="questionRed">Q: How can I signup to be an organ donor?</h3>
         <p>A: To become a donor head to <a href="index.php#info">Register</a> and follow the easy to follow steps.</p>
       </div>
     </section>
     <section class="row question">
       <div class="small-10 small-centered medium-10 large-10 columns">
         <h3 class="questionRed">Q: Why should I register as an organ and tissue donor?</h3>
         <p>A: By registering consent for organ and tissue donation, you give hope to the thousands of Ontarians waiting for a transplant. Individuals on the transplant wait list are suffering from organ failure and without the generous gift of life from an organ donor, they will die. Tissue donors can also enhance the lives of recovering burn victims, help restore sight, and allow people to walk again. Transplants not only save lives, they return recipients to productive lives.</p>
       </div>
     </section>
   </div>
 </section>
 <section class="row">
   <div class="small-10 small-centered medium-10 large-10 columns" id="learnMore">
     <h3><a href="https://www.beadonor.ca/" target="_blank">Learn More at beadonor.ca</a></h3>
   </div>
 </section>
 <section class="row" id="groupIcons">
   <div class="small-4 large-2 large-offset-2 columns">
     <h3 class="hide">Affiliates</h3>
     <a href="https://www.beadonor.ca/" target="_blank"><img src="images/step2.svg" alt="BeADonor.ca"/></a> </div>
   <div class="small-4 large-2 large-offset-1 columns"> <a href="http://www.serviceontario.ca/" target="_blank"><img src="images/serviceontario.svg" alt="Service Ontario"/></a> </div>
   <div class="small-4 large-2 large-offset-1 end columns"> <a href="http://www.giftoflife.on.ca/en/" target="_blank"><img src="images/ontario-trillium.gif" alt="Ontario Trillium"/></a> </div>
 </section>


<?php include "includes/footer.php"; ?>
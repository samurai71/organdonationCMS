
// JavaScript Document


(function() {
"use strict";


/*variables*/
var diagram = document.querySelector("#diagramSvg");
console.log("SEAF");
var targetDiagram;

var intestine;
var kidneys;
var lungs;
var pancreas;
var liver;
var heart;
var tissue;
var eyes;

var diagramOverlay = document.querySelector("#diagramOverlay");
var siteBody = document.querySelector("body");
var diagramClose = document.querySelector("#diagramClose");


///

var docSubHeader = document.querySelector(".main-copy h4");
var docSubText = document.querySelector(".main-copy p");
var appliedClass;

///


/*functions*/




function diagramLoaded(e) {
console.log("svg has loaded");
targetDiagram = e.currentTarget.contentDocument;
//console.log(targetDiagram);
intestine = targetDiagram.querySelector("#intestine");
kidneys = targetDiagram.querySelector("#kidneys");
lungs = targetDiagram.querySelector("#lungs");
pancreas = targetDiagram.querySelector("#pancreas");
liver = targetDiagram.querySelector("#liver");
heart = targetDiagram.querySelector("#heart");
tissue = targetDiagram.querySelector("#tissue");
eyes = targetDiagram.querySelector("#eyes");
//console.log(heart);
var organs = targetDiagram.querySelectorAll(".organs");

var i;
for (i = 0; i < organs.length; i++){
	organs[i].addEventListener("click", heartInfo, false);
}






///
function changedElements() 
{
  docSubHeader.classList.remove(appliedClass);
  appliedClass = this.id;
  docSubHeader.classList.add(this.id);  
  docSubHeader.firstChild.nodeValue = dynamicContent[this.id].headline;
  docSubText.firstChild.nodeValue = dynamicContent[this.id].text;
}

[].forEach.call(organs, function(item){
  item.addEventListener('click', changedElements, true);
});
///







function heartInfo(e) {
	var organSelect = e.currentTarget.id;
	console.log(organSelect);
	displayBubble();
		
}

function displayBubble(){
console.log("bubble");

//changedElements();


diagramOverlay.style.display="block";
siteBody.classList.add("no-scroll");

}

function closeBubble(){
console.log("close bubble");
diagramOverlay.style.display="none";
siteBody.classList.remove("no-scroll");

}


console.log("diagramLoaded");

diagramClose.addEventListener("click", closeBubble, false);
}





/*listeners*/

diagram.addEventListener("load", diagramLoaded, false);

})();

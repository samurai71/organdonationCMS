(function(){
  "use strict";
//  var docImgs = document.querySelectorAll(".image-holder");
//  var docHeader = document.querySelector(".heading");
  var docSubHeader = document.querySelector(".main-copy h4");
  var docSubText = document.querySelector(".main-copy p");
  var appliedClass;
  
  var diagram = document.querySelector("#diagramSvg");
  

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
  
//  docSubHeader.firstChild.nodeValue = dynamicContent['heart'].headline;
//  docSubText.firstChild.nodeValue = dynamicContent['heart'].text;
  
  
})();

function autoType(elementClass, typingSpeed){
    var equipment = $(elementClass);
    equipment.css({
      "position": "relative",
      "display": "inline-block"
    });
    equipment.prepend('<div class="cursor" style="right: initial; left:0;"></div>');
    equipment = equipment.find(".text-js");
    var text = equipment.text().trim().split('');
    var amntOfChars = text.length;
    var newString = "";
    equipment.text("|");
    setTimeout(function(){
      equipment.css("opacity",1);
      equipment.prev().removeAttr("style");
      equipment.text("");
      for(var i = 0; i < amntOfChars; i++){
        (function(i,char){
          setTimeout(function() {        
            newString += char;
            equipment.text(newString);
          },i*typingSpeed);
        })(i+1,text[i]);
      }
    },1500);
  }
  
  $(document).ready(function(){
    // Now to start autoTyping just call the autoType function with the 
    // class of outer div
    // The second paramter is the speed between each letter is typed.   
    autoType(".type-js",200);
  });
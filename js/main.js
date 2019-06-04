// set up text to print, each item in array is new line
var aText = new Array(
"",
"Hi !, I'm so glad you found your way to my site.", 
"",
"My name is Alex, I am a French developer, based near Biarritz.", 
  "" ,
 "I trained to become a Web and Wordpress Developer.",
 "My areas of interest are Web Development and Designing, ",
  "Front End and Back-end Development." ,
  "",
  "But I also learn by myself ",
 "anything that I'm just curious about.",
 "",
 "And oh! You can see my Blog Section,",
  "where you can find posts and tutos on Web Development, and even more !",
  "",
  "If you wanna buil your website or colaborate on a project,",
  "no need to worry and you can contact me.",
  
);
var iSpeed = 30; // time delay of print out
var iIndex = 1; // start printing array at this position
var iArrLength = aText[0].length; // the length of the text array
var iScrollAt = 20; // start scrolling up at this many lines
 
var iTextPos = 0; // initialise text position
var sContents = ''; // initialise contents variable
var iRow; // initialise current row
 
function typewriter()
{
 sContents =  ' ';
 iRow = Math.max(0, iIndex-iScrollAt);
 var destination = document.getElementById("typedtext");
 
 while ( iRow < iIndex ) {
  sContents += aText[iRow++] + '<br />';
 }
 destination.innerHTML = sContents + aText[iIndex].substring(0, iTextPos) + "_";
 if ( iTextPos++ == iArrLength ) {
  iTextPos = 0;
  iIndex++;
  if ( iIndex != aText.length ) {
   iArrLength = aText[iIndex].length;
   setTimeout("typewriter()", 100);
  }
 } else {
  setTimeout("typewriter()", iSpeed);
 }
}


typewriter();

$(function(){
    
    $('#drag1').draggable();
});




 function myfun(){
    var mainListDiv = document.getElementById("mainListDiv"),
    mediaButton = document.getElementById("mediaButton");
    linetop = document.getElementById("line-top");
    linebutton = document.getElementById("line-bottom");
    
mainListDiv.classList.toggle("show_list");
mediaButton.classList.toggle("active");
linetop.classList.toggle("open");
linebutton.classList.toggle("open");
 }

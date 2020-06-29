/*навигация*/
menu.onclick  = function myFunction(){
    let x = document.getElementById("myTopnav");

        if (x.className === "topnav"){
            x.className += " responsive";
        }else{
            x.className = "topnav";
        }
};

/*слайдер*/

let slides = document.querySelectorAll(".slide_single");
let slider = [];
for (let i = 0; i < slides.length; i++){
    slider[i] = slides[i].src;
    slides[i].remove();
}

let step = 0;
let offset = 0;

function draw(){
    let img = document.createElement("img");
    img.src = slider[step];
    img.classList.add("slide_single");
    img.style.left = offset*100 + "%";

    document.querySelector(".slider").appendChild(img);

    if (step + 1 == slider.length){
        step = 0;
    } else {
        step++;
    }
    offset = 1;
    
}

function left(){
    document.querySelector(".slider").onclick = null;
   let slides2 = document.querySelectorAll(".slide_single");
   let offset2 = 0;
   for (let i = 0; i < slides2.length; i++){
       slides2[i].style.left = offset2*100 - 100 + "%";
       offset2++;
   }

   setTimeout(function(){
       slides2[0].remove();
       draw();
       document.querySelector(".slider").onclick = left;
   }, 1000);
}

draw();
draw();
document.querySelector(".slider").onclick = left;
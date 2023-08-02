let button = document.getElementById("btn-top")
console.log(button);
button.addEventListener("click",function(){
window.scrollTo({top:0, behavior:"smooth"})
console.log("clicked");
} 

)

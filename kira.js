let buttons =document.getElementById("account")
let acountbuttons = document.getElementById("btn")
let crossbotton = document.getElementById("cross")


acountbuttons .onclick = () =>{
    buttons.style.display ="block"

}

crossbotton .onclick = ()=>{
    buttons.style.display ="none"

}

let MessgeElement = document.getElementById("message")
let CrossElement  = document.getElementById("MessageCross")
let buttonElement = document.getElementById("button")



buttonElement .onclick = () =>{
    MessgeElement.style.display ="block"

}

CrossElement .onclick = () =>{
    MessgeElement.style.display ="none"

}




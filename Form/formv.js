
console.log("welcome to");

let form =document.querySelector("form")
console.log(form); 

  
form.addEventListener("submit" ,function(event){
       event.preventDefault
    if(form.checkValidity()){
        form.submit()
    }
    else{
        alert("Plaese Fill out")
    }
})


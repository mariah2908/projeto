function validar(){
    let inputs= document.querySelectorAll("input");

    for (let i =0; i < inputs.length; i++){
        
        if (inputs[i].value == ""){
            alert ("Preencha todos os campos!");
            return false;
        }
        
    }
return true;


}
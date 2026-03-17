let numberInput = document.querySelector("#numero")
let res = document.querySelector("#resultado")
let botao = document.querySelector('#meuBotão')
let total = 0
let sofiaRamos = 1
botao.addEventListener('click', verificar)

function verificar(){

    if(!numberInput.value){
        alert("Ô, seu animal, escreva alguma coisa! 🤣🫵")
        return
    }

    res.innerHTML = ""
    let number = Number(numberInput.value)
    total = 0
    
    if(number % 2 == 0){
        res.innerHTML = `Os números pares até ${number} são: <br>`
        for(let i = 2; i <= number; i += 2 ){        
        res.innerHTML += `👉 ${i} <br>`
    } 
    } else if (number % 2 !== 0){
        res.innerHTML = `${number} não é par, mas eu vou ser bonzinho e vou te entregar mesmo assim os números até ele: <br>`
        for(let i = 1; i <= number; i += 2){
            res.innerHTML += `👉 ${i} <br>`
        }
    }
     else {
        res.innerHTML = `O número ${number} não é par!😒`
    } 

       
}


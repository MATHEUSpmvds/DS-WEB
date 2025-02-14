function triangulo(){
    let number1 = parseFloat(document.getElementById("l1").value);
    let number2 = parseFloat(document.getElementById("l2").value);
    let number3 = parseFloat(document.getElementById("l3").value);
    let resultado = document.getElementById("tri");


    if (number1 + number2 > number3 && number2 + number3 > number1 && number1 + number3 > number2){

        if (number1 === number2 && number2 === number3){
            resultado.innerHTML = "O triângulo é válido e é equilátero.";
        }
        else if (number1 === number2 || number2 === number3 || number1 === number3){
            resultado.innerHTML = "O triângulo é válido e é isósceles.";
        }
        else {
            resultado.innerHTML = "O triângulo é válido e é escaleno.";
        }
    } else {
        resultado.innerHTML = "O triângulo não é válido";
    }
}
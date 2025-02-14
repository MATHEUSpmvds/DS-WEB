function verificar() {
    var numero = document.getElementById("numero").value;
    var resultado = document.getElementById("resultado");

    if (numero % 2 === 0) {
        resultado.textContent = "Par";
    } else {
        resultado.textContent = "Ímpar";
    }
}
function verificar() {
    var numero = document.getElementById("numero").value;
    var resultado = numero % 2 === 0 ? "Par" : "Ímpar";
    document.getElementById("resultado").textContent = resultado;
}
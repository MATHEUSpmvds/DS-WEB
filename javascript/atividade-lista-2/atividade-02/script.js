function verificarNumero() {
    
    var numero = parseFloat(document.getElementById("numero").value);

    if (isNaN(numero)) {
        alert("insira um número válido.");
        return;
    }
    if (numero > 0) {
        document.getElementById("resultado").innerText = "O número " + numero + " é POSITIVO!";
    } else if (numero < 0) {
        document.getElementById("resultado").innerText = "O número " + numero + " é NEGATIVO!";
    } else {
        document.getElementById("resultado").innerText = "O número é ZERO!";
    }
}
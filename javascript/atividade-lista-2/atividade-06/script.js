function verificarMaior() {
    var numero1 = parseFloat(document.getElementById("numero1").value);
    var numero2 = parseFloat(document.getElementById("numero2").value);
    var numero3 = parseFloat(document.getElementById("numero3").value);

    var maior = Math.max(numero1, numero2, numero3);
    document.getElementById("resultado").textContent = "O maior número é: " + maior;
}
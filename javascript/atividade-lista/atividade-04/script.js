function calcular() {
    let valor = parseFloat(document.getElementById('valor').value);
    let porcentagem = parseFloat(document.getElementById('porcentagem').value);
    
    if (isNaN(valor) || isNaN(porcentagem)) {
        alert('Insira valores válidos!');
        return;
    }

    document.getElementById('resultado').textContent = `Resultado: ${(valor + (valor * porcentagem / 100)).toFixed(2)}`;
}
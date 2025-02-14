function converterParaCaixaAlta(texto) {
    return texto.toUpperCase();
}

function converterTexto() {
    let texto = document.getElementById("textoInput").value;
    let resultado = converterParaCaixaAlta(texto);
    document.getElementById("resultado").innerText = resultado;
}
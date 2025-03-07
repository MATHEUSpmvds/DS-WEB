document.getElementById("botao-criar").addEventListener("click", function () {
    const nome = document.getElementById("nome").value;
    const descricao = document.getElementById("descricao").value;

    if (!nome || !descricao) {
        alert("Preencha os campos!");
        return;
    }

    
    const cartao = document.createElement("div");
    cartao.setAttribute("class", "cartao");

    const botaoExcluir = document.createElement("button");
    botaoExcluir.textContent = "X";
    botaoExcluir.setAttribute("class", "botao-excluir");
    botaoExcluir.addEventListener("click", function () {
        cartao.remove();
    });

   
    const titulo = document.createElement("h3");
    titulo.textContent = nome;
    const texto = document.createElement("p");
    texto.textContent = descricao;

  
    cartao.appendChild(botaoExcluir);
    cartao.appendChild(titulo);
    cartao.appendChild(texto);

  
    document.getElementById("container-cartoes").appendChild(cartao);

    
    document.getElementById("nome").value = "";
    document.getElementById("descricao").value = "";
});

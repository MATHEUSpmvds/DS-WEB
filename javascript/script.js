
        function criarCartao() {
            let nome = document.getElementById('nome').value;
            let descricao = document.getElementById('descricao').value;
            
            if (!nome || !descricao) {
                alert("Preencha todos os campos!");
                return;
            }
            
            let cartao = document.createElement('div');
            cartao.setAttribute('class', 'cartao');
            
            let titulo = document.createElement('h3');
            titulo.textContent = nome;
            
            let texto = document.createElement('p');
            texto.textContent = descricao;
            
            let botaoRemover = document.createElement('button');
            botaoRemover.textContent = 'Remover';
            botaoRemover.setAttribute('class', 'button-remover');
            botaoRemover.onclick = function () {
                cartao.remove();
            };
            
            cartao.appendChild(titulo);
            cartao.appendChild(texto);
            cartao.appendChild(botaoRemover);
            document.getElementById('container').appendChild(cartao);
            
            document.getElementById('nome').value = '';
            document.getElementById('descricao').value = '';
        }
  
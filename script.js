function goBack()
{
    window.history.back();}

    // mensagens aleatorias:
    async function carregarMensagem() {
        try {
            const resposta = await fetch('mensagem_api.php');
            const dados = await resposta.json();

            if (dados && dados.mensagem && dados.usuario) {
                document.getElementById('mensagem').textContent = `"${dados.mensagem}"`;
                document.getElementById('usuario').textContent = "Usuário: " + dados.usuario;
            } else {
                document.getElementById('mensagem').textContent = "Nenhuma mensagem encontrada.";
                document.getElementById('usuario').textContent = "";
            }
        } catch (erro) {
            document.getElementById('mensagem').textContent = "Erro ao carregar mensagem.";
            document.getElementById('usuario').textContent = "";
            console.error("Erro:", erro);
        }
    }

    // Carrega a primeira mensagem ao abrir a página
    carregarMensagem();













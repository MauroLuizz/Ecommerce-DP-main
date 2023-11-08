<h1>Editar</h1>
<?php
 $sql = "SELECT * FROM usuarios WHERE id_usuario=".$_REQUEST["id"]; // seleciona todos da tabela usuarios mas ele manda parametros onde ele seleciona o id do usuario que vc quer editar  

 $res = $conn->query($sql); //o meu resultado vai executar a conexao da minha query e chamando meu sql
 $row = $res->fetch_object(); // simplificando a execuçao que faz jogar diretamente na linha


?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar"> <!--manda todos os dados para a pagina salvar mas fica oculto para a pessoa nao ver o URL -->
<form>
<input type="hidden" name="id" value="<?php print $row->id_usuario; ?>"> <!--manda todos os dados para a pagina salvar mas fica oculto para a pessoa nao ver o URL -->
<form>
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control" required>
    </div>  
    <div class="mb-3">
        <label>Telefone</label>
        <input type="text" telefone="telefone" value="<?php print $row->telefone; ?>" class="form-control" required>
    </div>     
    <div class="mb-3">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>CPF</label>
        <input type="text" name="cpf" id="cpf" pattern="\d{3}\.?\d{3}\.?\d{3}-?\d{2}" value="<?php print $row->cpf; ?>" class="form-control" required>

    </div>  
    <div class="mb-3">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">ENVIAR</button>
    
    </div>

    <script> //script para formatar o cpf e limitar em 11 digitos
        document.addEventListener("DOMContentLoaded", function () {
            const cpfInput = document.getElementById("cpf");

            cpfInput.addEventListener("input", function () {
                let value = cpfInput.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                if (value.length > 11) {
                    value = value.slice(0, 11); // Limita o CPF a 11 dígitos
                }

                // Formata o CPF com pontos e hífen
                value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');

                cpfInput.value = value;
            });
        });
    </script>

</form>
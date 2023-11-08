<?php
include("logica-usuario.php");
include("conexao.php");




if (usuarioEstaLogado()) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        // Validar os dados, por exemplo, verificar se o e-mail é único

        // Conectar ao banco de dados
        $conn = conectarAoBanco();

        $usuario_id = $_SESSION["usuario_id"];
        $hashedSenha = password_hash($senha, PASSWORD_DEFAULT);

        // Atualizar o perfil do usuário
        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email'";

        if (!empty($senha)) {
            // Se uma nova senha foi fornecida, atualize-a
            $sql .= ", senha = '$hashedSenha'";
        }

        $sql .= " WHERE id_usuario = $usuario_id";

        if (mysqli_query($conn, $sql)) {
            $_SESSION["success"] = "Perfil atualizado com sucesso!";
        } else {
            $_SESSION["danger"] = "Erro ao atualizar o perfil: " . mysqli_error($conn);
        }

        desconectarDoBanco($conn);

        header('Location: minha_conta.php');
        exit();
    } else {
        header('Location: minha_conta.php');
        exit();
    }
} else {
    header('Location: login.php');
    exit();
}
?>

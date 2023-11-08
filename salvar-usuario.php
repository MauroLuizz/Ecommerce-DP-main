<?php
include("conexao.php");

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Use password_hash para criar um hash seguro da senha

        $sql = "INSERT INTO usuarios (nome, telefone, email, cpf, senha) VALUES ('$nome', '$telefone', '$email', '$cpf', '$senha')";

        $res = $conn->query($sql);

        if ($res === true) {
            echo "<script>alert('Cadastro com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar: " . $conn->error . "');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }

        break;

    case 'editar':
        $id = $_POST["id"];
        $nome = mysqli_real_escape_string($conn, $_POST["nome"]);
        $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
        $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

        $sql = "UPDATE usuarios SET 
                    nome = '$nome',
                    telefone = '$telefone',
                    email = '$email',
                    cpf = '$cpf',
                    senha = '$senha'
                WHERE
                    id_usuario = $id";

        $res = $conn->query($sql);

        if ($res === true) {
            echo "<script>alert('Editado com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Erro ao editar: " . $conn->error . "');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;

    case 'excluir':
        $id = $_REQUEST["id"];

        $sql = "DELETE FROM usuarios WHERE id_usuario = $id";

        $res = $conn->query($sql);

        if ($res === true) {
            echo "<script>alert('Excluído com sucesso');</script>";
            echo "<script>location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Erro ao excluir: " . $conn->error . "');</script>";
            echo "<script>location.href='?page=listar';</script>";
        }
        break;
}
?>

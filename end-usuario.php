<body>cadastrar endereço</body>


<?php
include("conexao.php");



if (!isset($_SESSION['id_usuario'])) {
    header("location: index.php");
    exit;
}

$user_id = $_SESSION['id_usuario'];

$sql = "SELECT * FROM usuarios WHERE id_usuario = $user_id";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    $row = $res->fetch_object();

    print "<h1>Editar Perfil</h1>";
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th>Nome</th>";
    print "<th>CPF</th>";
    print "<th>E-mail</th>";
    print "<th>telefone</th>";
    print "<th>Ações</th>";
    print "</tr>";
    print "<tr>";
    print "<td>" . $row->nome . "</td>";
    print "<td>" . $row->cpf . "</td>";
    print "<td>" . $row->email . "</td>";
    print "<td>" . $row->telefone . "</td>";
    print "<td> 
        <button onclick=\"location.href='?page=editar&id=" . $row->id_usuario . "';\" class='btn btn-success'>Editar</button>
        <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=" . $row->id_usuario . "';}else{false}\" class='btn btn-danger'>Excluir</button>
    </td>";
    print "</tr>";
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Usuário não encontrado!</p>";
}
?>

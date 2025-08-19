<?php
include './template/header.php';

// $nomeFormulario = $_POST['txtNome'];
// $telefoneForm = $_POST['txtTelefone'];
// $usuarioForm = $_POST['txtUsuario'];
// $senhaForm = $_POST['txtSenha'];
// $senhaConfirmarForm = $_POST['txtConfirmarSenha'];

$id = $_GET['idConsulta'];

$dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1';
$usuario = 'root';
$senha = '';

$conexaoBanco = new PDO($dsn, $usuario, $senha);


$scriptConsultaId = "SELECT * FROM tb_cadastro WHERE id = $id";

$resultado = $conexaoBanco->query($scriptConsultaId)->fetch();
// $resultado2 = $conexaoBanco->query($scriptConsultaId)->fetchAll();

?>

<main class="conteudo-principal container d-flex justify-content-center align-items-center">
    <section class="formulario d-flex flex-column justify-content-center bg-white p-4">
        <h1 class="fs-2 text-center mb-3">Impressão</h1>

        <div class="row">
            <div class="col-md-6 mb-3">
                <h3 class="fs-6 text-dark">Nome</h3>
                <span class="text-dark-emphasis fs-5 text-uppercase"><?= $resultado['nome'] ?></span>
            </div>
            <div class="col-md-6">
                <h3 class="fs-6 text-dark">Telefone</h3>
                <span class="text-dark-emphasis fs-5"><?= $resultado['telefone'] ?></span>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-6 mb-3">
                <h3 class="fs-6 text-dark">Usuário</h3>
                <span class="text-dark-emphasis fs-5"><?= $resultado['usuario'] ?></span>
            </div>
            <div class="col-md-6">
                <h3 class="fs-6 text-dark">Senha</h3>
                <span class="text-dark-emphasis fs-5"><?= $resultado['senha'] ?></span>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-6 mb-3">
                <h3 class="fs-6 text-dark">Confirmar Senha</h3>
                <span class="text-dark-emphasis fs-5"><?= $resultado['senha'] ?></span>
            </div>
        </div>
    </section>
</main>

<?php 
include './template/footer.php';
?>
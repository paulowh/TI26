<?php
echo '<h1>form-cadastro.php</h1>';

var_dump($_POST);
$formNome       = $_POST['txtNome'];
$formTel        = $_POST['txtTelefone'];
$formUsuario    = $_POST['txtUsuario'];
$formSenha      = $_POST['txtSenha'];
$formConfSenha  = $_POST['txtConfirmarSenha'];


if ($formSenha != $formConfSenha) {

    header('location:index.php?erro=sim');
    
} else {

    $dsn = 'mysql:dbname=db_cadastro;host=127.0.0.1';
    $usuario = 'root';
    $senha = '';

    $conn = new PDO($dsn, $usuario, $senha);

    $scriptCadastro = "INSERT INTO
    tb_cadastro (
        nome,
        telefone,
        usuario,
        senha
    )
    VALUES (
        :nome,
        :telefone,
        :usuario,
        :senha
    )";

    $scriptPreparado = $conn->prepare($scriptCadastro);

    $scriptPreparado->execute([
        ':nome' => $formNome,
        ':telefone' => $formTel,
        ':usuario' => $formUsuario,
        ':senha' => $formSenha
    ]);

    header('location:tabela.php');
}

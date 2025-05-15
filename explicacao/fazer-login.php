<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

if($senha == 123){
    echo "Senha correta, pode entrar";
}else{
    echo "Acesso bloqueado vacilão";
}

?>

<?php
// Recebe os dados do formulário
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Validação da senha
if ($senha == '123') {
    // Redireciona para a página de acesso liberado
    header("Location: liberado.php");
    exit;
} else {
    // Redireciona para a página de acesso bloqueado
    header("Location: bloqueado.php");
    exit;
}
?>
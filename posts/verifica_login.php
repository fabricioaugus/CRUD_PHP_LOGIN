<?php session_start();

#VERIFICAÇÃO DE LOGIN DE FORMA SIMPLES


//Recuperando os dados informados no form de login
$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : "";
$senha = (isset($_POST['senha'])) ? $_POST['senha'] : ""; 
//Teste para verificar se os dados do usuário estão corretos
if(($usuario == 'ramon@teste.com') && ($senha == '123')){
    $_SESSION['nome'] = 'TESTE';
    $_SESSION['logado'] = TRUE;
    echo "<script>window.location='index.php'</script>";
}else{
    echo "<script>alert('Usuário inválido');window.location='login.php'</script>";
}

?>
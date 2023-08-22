<?php include_once '../versao.php'; 
session_start();

if(isset($_SESSION['id'])){

    header('Location: ../views/painel_usuario.php/logado'); exit;
    
}else{ 

    include_once('../class/classes.php');
    include_once('../model/conexao.php');

    if(Usuario::consultarDadosUsuario($_POST['nivel'], $_POST['cpf'], $_POST['email'])){
        if(isset($_POST['name']) && isset($_POST['cpf']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message']) && isset($_POST['nivel'])){
            if($_POST['senha1'] === $_POST['senha2']){
                $cadastro = Usuario::inserirCadastro($_POST['name'], $_POST['cpf'], $_POST['email'], $_POST['senha1'], $_POST['phone'], $_POST['message'], $_POST['nivel']);
                if($cadastro){
                    Usuario::atvarSession($_POST['nivel'], $_POST['cpf'], $_POST['email']);
                    header('Location: painel_usuario.php/cadastrado'); exit;
                }
            }else{
                header('Location: ../index.php'); exit;
            }
        }
    }else{
        header('Location: ../views/login.php'); exit;
    }
}

<?php

class Url {

    static function getUrl($url){
        return strpos($_SERVER['REQUEST_URI'], $url);
    }
}

class Usuario {

    static function consultarTodosDados(){
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM usuarios");
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['nivel'] = $dado['nivel'];
            $_SESSION['nome'] = $dado['nome'];
            $_SESSION['cpf'] = $dado['cpf'];
            $_SESSION['email'] = $dado['email'];
            $_SESSION['senha'] = $dado['senha'];
            $_SESSION['num_celular'] = $dado['num_celular'];
            $_SESSION['endereco'] = $dado['endereco'];
            $_SESSION['cep'] = $dado['cep'];
            $_SESSION['descricao_cads'] = $dado['descricao_cads'];

            foreach($dado as $key => $value){
                $_SESSION[$key] = $value;
            }
            return true;
        }
    }

    static function consultarDadosUsuario($nivel, $cpf, $email){
        global $pdo;

        $cpf = str_replace('.', '', $cpf);
        $cpf = str_replace('-', '', $cpf);

        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE nivel = :nivel AND (cpf = :cpf OR email = :email)");
        $sql->bindValue(':nivel', $nivel);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->execute();
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            if($dado['id'] > 0){
                return false; exit;
            }else{
                return true; exit;
            }
        }else{
            return true; exit;
        }
    }

    static function atvarSession($nivel, $cpf, $email){
        global $pdo;

        $cpf = str_replace('.', '', $cpf);
        $cpf = str_replace('-', '', $cpf);

        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nivel = :nivel AND cpf = :cpf AND email = :email");
        $sql->bindValue(':nivel', $nivel);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->execute();
        $dado = $sql->fetch();
        $_SESSION['id'] = $dado['id'];
        $_SESSION['nivel'] = $dado['nivel'];
        $_SESSION['nome'] = $dado['nome'];
        $_SESSION['cpf'] = $dado['cpf'];
        $_SESSION['email'] = $dado['email'];
        $_SESSION['senha'] = $dado['senha'];
        $_SESSION['num_celular'] = $dado['num_celular'];
        $_SESSION['endereco'] = $dado['endereco'];
        $_SESSION['cep'] = $dado['cep'];
        $_SESSION['descricao_cads'] = $dado['descricao_cads'];
    }

    static function inserirCadastro($nome, $cpf, $email, $senha, $num_celular, $descricao_cads, $nivel){
        global $pdo;

        $cpf = str_replace('.', '', $cpf);
        $cpf = str_replace('-', '', $cpf);

        $num_celular = str_replace('(', '', $num_celular);
        $num_celular = str_replace(')', '', $num_celular);
        $num_celular = str_replace(' ', '', $num_celular);
        $num_celular = str_replace('-', '', $num_celular);

        $sql = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, cpf = :cpf, email = :email, senha = :senha, num_celular = :num_celular, descricao_cads = :descricao_cads, endereco = null, cep = null, nivel = :nivel");
        $sql->bindValue(':nivel', $nivel);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':cpf', $cpf);
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->bindValue(':num_celular', $num_celular);
        $sql->bindValue(':descricao_cads', $descricao_cads);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }
    
}
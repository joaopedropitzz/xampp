<?php
    function connecta_bd(){
        $servername = "localhost";
        $username = "root";
        $password = "admin";
        $dbname = "webti";
        //Criar conexao
        return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    }
    //connecta_bd();
    function cadastra_usuario($nome,$email,$login,$senha){
        $con = conecta_bd();
        $stmt = $con->prepare("INSERT INTO usuarios (nome, email, login, senha)
                                VALUES (:nome, :email, :login, :senha)");
        $stmt->bindParam(':nome' $nome);
        $stmt->bindParam(':email' $email);
        $stmt->bindParam(':login' $login);
        $stmt->bindParam(':senha' $senha);
        return $stmt->execute();
    }
   // cadastra_usuario("João Silva","joao", "12345");
?>
<?php 
function connecta_bd(){
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "webti";
    // Criar conexao
    return new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}
//connecta_bd();

function cadastra_usuario($nome, $login, $senha){
    $con= connecta_bd();
    $stmt =$con->prepare("INSERT INTO usuarios ( nome, login, senha) VALUES (:nome, :login, :senha)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':senha', $senha);
    return $stmt->execute();
}
//exemplo cadastro
cadastra_usuario("João Silva", "joao", "12345");

function delete_usuario($id){
$con= connecta_bd();
$stmt =$con->prepare("DELETE FROM usuarios WHERE id = :id");
$stmt->bindparam(':id', $id);
return $stmt->execute();
}
//delete_usuario(1); 
function update_usuario ($id, $nome, $login, $senha){
    $con= connecta_bd();
    $stmt=$con->prepare("UPDATE usuarios SET nome = :nome, login = :login, senha = :senha WHERE id = :id");
    $stmt->bindparam(':id', $id);
    $stmt->bindparam(':nome', $nome);
    $stmt->bindparam(':login', $login);
    $stmt->bindparam(':senha', $senha);
    return $stmt->execute();
}
function get_usuario($id){
    $con= connecta_bd();
    $stmt=$con->prepare("SELECT * FROM usuarios WHERE id = :id");
    $stmt->bindparam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function get_usuarios(){
    $con= connecta_bd();
    $stmt=$con->prepare("SELECT * FROM usuarios ");
    $stmt->execute();
 return $stmt->fetchALL(PDO::FETCH_ASSOC);
}
//echo var_dump(get_usuario(2));
//echo "<pre>";
//print_r(var_dump(get_usuarios()));
//echo "</pre>";
?>
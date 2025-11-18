<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])&& $_GET['error']== 'faltando_dados'){
        echo "<p style='color:red;'>Erro: Por favor, preencha todos os campos.</p>";
    }
    ?>
    <h2>Formulario de Cadastro</h2>
    <form action="imc.php" method="POST">
        <label for="name">Nome</label>
        <input type="text" id="iname" name = "nome">
        <label for="email">E-mail</label>
        <input type="text" id="iemail" name="email">
        <label for="peso">Peso</label>
        <input type="text" id="ipeso" name="peso">
        <label for="altura">Altura</label>
        <input type="text" id="ialtura" name="altura">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

<?php
require_once "conexao.php";
$id = $_GET['id'];
$usuario = get_usuario($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style_Editarusuario.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
    <title>Editar de Usuario</title>
  </head>
<body>
<div class="container">
<h1>Edição de Usuario</h1>
<br>
</div>

     <form action="atualizarUsuario.php" method="POST" class="container">
     <input type="hidden" name="id" value="<?= $id ?>">
      <div class="container">
        <label for="nome" class="texto">Nome:</label>
        </div>
        <div class="container">
        <input type="text" id="nome" name="nome" required value="<?php echo htmlspecialchars($usuario['nome']); ?>">
          </div>
          <br>
           <div class="container">
        <label for="login" class="texto">Login:</label>
           </div>
        <br>
            <div class="container">
        <input type="text" id="login" name="login" required value="<?php echo htmlspecialchars($usuario['login']); ?>" >
        </div>
        <br>
          <div class="container">
        <label for="senha" class="texto">senha:</label>
         </div>
         <br>
          <div class="container">
        <input type="password" id="senha" name="senha" required  value="<?php echo htmlspecialchars($usuario['senha']); ?>">
        </div>
         <br>
    <div class="container">
      <input type="submit" value="Editar" class="botao1"><br><br>
    </div>
    </form>
<br>
      <div class="container">
        <form action="excluirUsuario.php" method="POST">
             <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Deletar" class="botao1"><br><br>
        </form>
      </div>
      </form>
      <form action="lista-usuarios.php" method="POST">
      <div class="container">
        <input type="submit" value="voltar" class="botao1"><br><br>
        </div>
        </form>
</body>
</html>
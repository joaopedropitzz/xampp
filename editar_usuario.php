<?php
require_once "conexao.php";
$usuarios = get_usuarios();

//echo var_dump ($usuarios);
?>
<div class="container">
<h1>Lista de Usuários</h1>
<table border="1">
   <tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Login</th>
    
   </tr> 
   <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?php echo htmlspecialchars($usuario['id']);?></td>
        <td><?php echo htmlspecialchars($usuario['nome']);?></td>
        <td><?php echo htmlspecialchars($usuario['login']);?></td>
        
    </tr>
<?php endforeach; ?>
</table>
</div>
<body>
    <div class="container">
        <input type="submit" value="Editar"><br>

    </div>
    <div class="container">
        <input type="submit" value="Deletar">
    </div>

</body>
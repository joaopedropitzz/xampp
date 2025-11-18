
<?php
    if (!isset($_POST['peso'])&& isset($_POST['altura'])){
        header('Location: formulario.php?error=faltando_dados');
        exit();
    }
    $peso=$_POST['peso'];
    $altura=$_POST['altura'];
    //verificar se as variaveis peso e altura sao numericos
    if(!is_numeric($peso)|| !is_numeric($altura)||$altura<=0){
        header("Location: formulario.php?error=valores_invalidos");
        exit();
    }
    $imc = $peso / ($altura * $altura);
    $imc = round($imc, 2);
    echo "<h1>Resultado do Cálculo do IMC<h1>";
    echo "<p>Seu IMC é: $imc</p>";
?>

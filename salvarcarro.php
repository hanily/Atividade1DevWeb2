<b>Olá Usuário!</b><br>
Modelo do Carro: 
<?php
    if(isset($_POST['modelo'])){
     echo $_POST['modelo'] . "</br>";
    }
    ?>
Cor:
<?php
    if(isset($_POST['cor'])){
        echo $_POST['cor'] . "</br>";
       }
?>
Placa do Carro:
<?php
    if(isset($_POST['placa'])){
        echo $_POST['placa'] . "</br>";
       }
?>
Ano de Lançamento:
<?php
    if(isset($_POST['ano'])){
        echo $_POST['ano'] . "</br>";
       }
?>
UF:
<?php
    if(isset($_POST['uf'])){
        echo $_POST['uf'] . "</br>";
       }
?>
<html>

<head>
    <title>Usuario</title>
</head>

<body>
    <a href="cadastrcarro.php?">Voltar a Cadastro de Carros</a>
    
</body>

</html>
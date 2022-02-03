<?php
    if(isset($_POST['enviar']))
    {
        include_once('config.php');

        $marca = $_POST['Marca'];
        $modelo = $_POST['Modelo'];
        $cor = $_POST['Cor'];
        $placa = $_POST['Placa'];
        $ano = $_POST['Ano'];
        $chassi = $_POST['Chassi'];
        $proprietario = $_POST['Proprietário'];
     
        $result = mysqli_query($conexao, "INSERT INTO carro (marca, modelo, cor, placa, ano, chassi, proprietario) VALUES('$marca', '$modelo', '$cor', '$placa', '$ano', '$chassi', '$proprietario')");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Josenilson</title>
</head>
<body>
    <h1>Cadastro de Veículos</h1>
    <div class="main">
        <form action="index.php" method="post">
            <div class="Marca">
                <label><strong>Marca</strong></label><br>
                <input type="text" name="Marca" placeholder="Digite o marca do veículo" required><br><br>
            </div>
            <div>
                <label><strong>Modelo</strong></label><br>
                <input type="text" name="Modelo" placeholder="Digite o modelo do veículo" required><br><br>
            </div>
            <div>
                <label for=""><strong>Cor</strong></label><br>
                <input type="text" name="Cor" placeholder="Digite a cor do veículo" required><br><br>
            </div>
            <div>
                <label><strong>Placa</strong></label><br>
                <input type="text" name="Placa" placeholder="Digite a placa do veículo" required><br><br>
            </div>
        
            <div>
                <label><strong>Ano</strong></label><br>
                <input type="text" name="Ano" placeholder="Digite o ano do veículo" required><br><br>
            </div>
        
            <div>
                <label><Strong>Chassi</Strong></label><br>
                <input type="text" name="Chassi" placeholder="Digite o chassi do veículo" required><br><br>
            </div>
            <div>
                <label><strong>Proprietário</strong></label><br>
                <input type="text" name="Proprietário" placeholder="Digite o nome do Proprietário" required><br><br>
            </div>
            <input type="submit" class="submit" id="submit">Enviar
            <!--<button class="botao" type="submit">Enviar</button><br><br>!-->
        </form>
    </div>
</body>
</html>

$result = mysqli_query($conexao, "INSERT INTO radio(marca, modelo, cor, placa, ano, chassi, proprietario) VALUES($'marca', $'modelo', $'cor', $'placa', $'ano', $'chassi', $'proprietario')");
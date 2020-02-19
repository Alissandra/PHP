<?php

$mensagem = "";

if($_POST) {

    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];

    if (is_numeric($distancia) && is_numeric($autonomia)) {
       
        if ($distancia > 0 && $autonomia > 0) {
            $valorGasolina = 4.80;
            $valorAlcool = 3.80;
            $valorDiesel = 3.90;

            $calculoGasolina = ($distancia / $autonomia ) * $valorGasolina;
            $calculoGasolina = number_format($calculoGasolina, 2, ',', '.');
            
            $calculoAlcool = ($distancia / $autonomia ) * $valorAlcool;
            $calculoAlcool = number_format($calculoAlcool, 2, ',', '.');
            
            $calculoDiesel = ($distancia / $autonomia ) * $valorDiesel;
            $calculoDiesel = number_format($calculoDiesel, 2, ',', '.');
             
            $mensagem = "<p>Gasolina: R$ ".$calculoGasolina." reais.</p>";
            $mensagem.= "<p>Álcool: R$ ".$calculoAlcool." reais.</p>";
            $mensagem.= "Diesel : R$ ".$calculoDiesel." reais.</p>";
        
        } else {
            
            $mensagem = "<div class='card border-light mb-3 text-dark'>";
            $mensagem.= "<p>O valor da distância e da autonomia deve ser maior que 0!</p>";
            $mensagem.= "</div>";
        }
        
    } else {
        $mensagem = "<div class='card border-light mb-3 text-dark'>";
        $mensagem.= "<p>Algum valor recebido não é numérico!</p>";
        $mensagem.= "</div>";
    }

    
} else {
    $mensagem = "<div class='card border-light mb-3 text-dark'>";
    $mensagem.= "<p>Nenhum dado foi recebido pelo Formulário!</p>";
    $mensagem.= "</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">   
</head>
<body>  
    <main>
        <div class="card bg-info mb-4 text-white" style="max-width: 26rem;">
            <div class="card-header bg-info text-white text-center">
                <h5>Resultado do cálculo de consumo</h5>
            </div>    
            <div class="card-body text-center"> 
                <p><?php
                    echo $mensagem;
                ?></p>
                <a class="btn btn-dark" href="index.php">Voltar</a>
                
            </div>            
        </div>  
    </main>  
</body>
</html>
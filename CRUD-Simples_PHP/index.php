<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>
        <div class="card mb-3" style="max-width: 26rem;">
            <div class="card-header bg-info text-white">
                <h3>Instruções</h3>
                <p>A aplicação calcula os valores que serão gastos com combustível 
                            durante um deslocamento, consumo do veículo e valor do combustível.</p>
                <ul>
                    <li>Álcool</li>
                    <li>Diesel</li>
                    <li>Gasolina</li>
                </ul>
            </div>
            <div class="card-body text-info">
                <form action="calculo.php" method="POST">
                    <label class="card-text">Distância em Km a ser percorrida:</label>
                    <input type="number" class="form-control" name="distancia" required/>
                    <br />
                    <label for="autonomia">Consumo de combustível do veículo (Km/l):</label>
                    <input type="number" class="form-control" name="autonomia" required/>
                    <br />
                    <button class="btn btn-info" type="submit">Calcular</button>
                    <button class="btn btn-dark" type="reset">Limpar</button>
                </form>           
            </div>
        </div>
    </body>
</html>
<?php

require '../vendor/autoload.php';

use FlyingLuscas\Correios\Client;

$cep = $_POST['cep'];

if(!preg_match("/^[0-9]{5}+-[0-9]{3}$/", $cep)) {
    header("Location: index.php?error=invalid");
}

$correios = new Client();
$infos = $correios->zipcode()->find($cep);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da pesquisa</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">  

    <div class="py-3 text-center">
        <h2>Seu endereço</h2>
    </div>


    <div class="card-body font-weight-bold">
        <div class="card-body font-weight-bold">
            <form>
                <div class="form-group">
                    <label for="cep">Cep:</label>
                    <input type="text" class="form-control" value="<?= $cep ?>" disabled />
                </div>
                <div class="form-group">
                    <label for="rua">Rua:</label>
                    <input type="text" class="form-control" value="<?= $infos['street'] ?>" disabled />
                </div>

                <div class="form-group">
                    <label for="bairro">Bairro:</label>
                    <input type="text" class="form-control" value="<?= $infos['district'] ?>" disabled />
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" value="<?= $infos['city'] ?>" disabled />
                </div class="form-group">

                <div class="form-group">
                    <label for="uf">Estado:</label>
                    <input type="text" class="form-control" value="<?= $infos['uf'] ?>" disabled />
                </div>
            </form>
        </div> 

    </div>

    
</body>
</html>
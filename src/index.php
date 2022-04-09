<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ache seu endereço pelo cep</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">  

    <div class="py-3 text-center">
        <img class="d-block mx-auto mb-2" src="./assets/terra.png" width="96" height="96">
        <h2>Procura endereço</h2>
    </div>

    <div class="row">
        <div class="col-md-12">
        
            <div class="card-body font-weight-bold">

                <form action="./cep.php" method="post">
                    <div class="form-group">
                        <label for="para">Procure seu endereço</label>
                        <input type="text" class="form-control" name="cep" placeholder="0000-000">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Procurar</button>
                </form>
            </div>
        </div>

        <? if($_GET['error'] == 'invalid'): ?>
            <div class="row">
                <div class="col">
                    <span class="text text-danger">Cep Invalido, tente novamente!</span>
                </div>
            </div>
		<? endif ?>

    </div>
    </div>
</body>
</html>
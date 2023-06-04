<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Formulario</h1>
        <form action="recuperadados.php" method="POST" class="center" style="width: 45%;">
            <div class="mb-3 t-center"  >
                <label for="" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome">

                <label for="" class="form-label">Email</label>
                <input type="text" class="form-control" name="email">

                <label for="" class="form-label">Idade</label>
                <input type="text" class="form-control" name="idade">

                <label for="" class="form-label">Hobbie</label>
                <input type="text" class="form-control" name="hobbie">

                <button class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
</body>

</html>
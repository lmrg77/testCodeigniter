<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Luisa Rincon Codeigniter</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <?php foreach($menu as $item): ?>
                <li><a class="nav-link active" href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
            <?php endforeach; ?>
        </div>
        </div>
    </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
               <?php if(isset($result))
                    {
                    ?>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Fecha Ingreso</th>
                            <th>Nombre</th>
                            <th>Salario</th>
                        </tr>
                    <?php
                    foreach($result as $item):
                    ?>
                    <tr>
                            <td><?= $item->id ?></td>
                            <td><?= $item->fecha_ingreso ?></td>
                            <td><?= $item->nombre ?></td>
                            <td><?= $item->salario ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                <?php
                }else{
                    ?>
                    <form action="http://localhost/testCodeigniter/empleado/create" method="POST" accept-charset="utf-8">
                        <div class="mb-3">
                            <label for="fecha_ingreso" class="form-label">Fecha Ingreso</label>
                            <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="salario" class="form-label">Salario</label>
                            <input type="text" class="form-control" id="salario" name="salario" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Datos!</button>
                    </form>
                    <br>
                    <?php if(isset($msg)){?>
                    <div class="alert alert-success" role="alert">
                        <?= isset($msg) ? $msg : ''?>
                    </div>
                    <?php
                    }
                }
                ?>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>
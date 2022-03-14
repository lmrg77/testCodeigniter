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
                            <th>Codigo</th>
                            <th>Descripcion</th>
                            <th>Resumen</th>
                            <th>Empleado</th>
                        </tr>
                    <?php
                    foreach($result as $item):
                    ?>
                    <tr>
                            <td><?= $item->id ?></td>
                            <td><?= $item->codigo ?></td>
                            <td><?= $item->descripcion ?></td>
                            <td><?= $item->resumen ?></td>
                            <td><?= $item->nombre ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </table>
                <?php
                }else{
                    ?>
                    <form action="http://localhost/testCodeigniter/solicitud/create" method="POST" accept-charset="utf-8">
                        <div class="mb-3">
                            <label for="codigo" class="form-label">Codigo</label>
                            <input type="number" class="form-control" id="codigo" name="codigo" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                        </div>
                        <div class="mb-3">
                            <label for="resumen" class="form-label">Resumen</label>
                            <input type="text" class="form-control" id="resumen" name="resumen" required>
                        </div>
                        <div class="mb-3">
                            <label for="resumen" class="form-label">Empleado</label>
                            <select class="form-select" aria-label="Default select example" id="id_empleado" name="id_empleado" required>
                                <option selected>Seleccione...</option>    
                                <?php foreach($empleados as $item): ?>
                                <option value="<?= $item->id ?>"><?= $item->nombre ?></option>
                                <?php endforeach; ?>
                            </select>
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
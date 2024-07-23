<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cliente</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <br>
  <?php echo $this->include('plantilla/menu'); ?>
  <div class="container p-5">
    <h1>Clientes</h1>
    <a href="nuevo_cliente" class="btn btn-primary">Nuevo Cliente</a>

    <div class="container">
      <div class="list-group-horizontal position-relative overflow-auto w-100" style="margin: 4px, 4px;
            padding: 4px;
            width: 100%;
            height: 600px;
            overflow: auto;
            white-space: wrap;
            ">

        <table class="table table-striped">
          <thead>
            <th>cliente_Id</th>
            <th>Apellido</th>
            <th>nombre</th>
            <th>Email</th>
            <th>calle o avenida</th>
            <th>no_casa</th>
            <th>zona</th>
            <th>Direccion Completa</th>
          </thead>
          <tbody>
            <?php foreach ($datos as $cliente) : ?>
              <tr>
                <td><?php echo $cliente['cliente_id']; ?></td>
                <td><?php echo $cliente['apellido']; ?></td>
                <td><?php echo $cliente['nombre']; ?></td>
                <td><?php echo $cliente['correo_electronico']; ?></td>
                <td><?php echo $cliente['calle_avenida']; ?></td>
                <td><?php echo $cliente['no_casa']; ?></td>
                <td><?php echo $cliente['zona']; ?></td>
                <td><?php echo $cliente['calle_avenida'] . " " .
                      $cliente['no_casa'] . " zona " .
                      $cliente['zona'];
                    ?>
                </td>
                <td>
                  <a href="" class="btn btn-success">Actualizar</a>
                </td>
                <td>
                  <a href="eliminar_cliente/<?php echo $cliente['cliente_id']; ?>" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
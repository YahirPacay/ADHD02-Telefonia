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
    <h1>Lineas Telefonicas</h1>
    <a href="nuevo_linea" class="btn btn-primary">Nueva Linea Telefonica</a>

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
            <th>no_telefono</th>
            <th>fecha de Pago</th>
            <th>meses_atraso</th>
            <th>plan_id</th>
            <th>cliente_id</td>
          </thead>
          <tbody>
            <?php foreach ($datos as $telefonia) : ?>
              <tr>

                <td><?php echo $telefonia['no_telefono']; ?></td>
                <td><?php echo $telefonia['fecha_pago']; ?></td>
                <td><?php echo $telefonia['meses_atraso']; ?></td>
                <td><?php echo $telefonia['plan_id']; ?></td>
                <td><?php echo $telefonia['cliente_id']; ?></td>
                <td>
                  <a href="" class="btn btn-success">Actualizar</a>
                </td>
                <td>
                  <a href="eliminar_numero/<?php echo $telefonia['no_telefono']; ?>" class="btn btn-danger">Eliminar</a>
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
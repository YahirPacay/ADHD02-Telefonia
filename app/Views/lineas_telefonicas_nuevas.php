<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva linea telefonica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row justify-content-center p-5">
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-warning-subtle rounded-5">Nueva linea telefonica</h1>
            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 bg-warning-subtle text-info-emphasis p-5 border border-primary rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">

                <form action="agregar_linea" method="post">
                    <div class="mb-3">
                        <label for="txtNumero" class="form-label">Numero de Telefono</label>
                        <input type="text" class="form-control" id="txtNumero" name="txtNumero" placeholder="Coloca tu número de telefono">
                    </div>
                    <div class="mb-3">
                        <label for="txtFechaPago" class="form-label">Fecha Pago</label>
                        <input type="text" class="form-control" id="txtFechaPago" name="txtFechaPago" placeholder="Coloca tu fecha de pago">
                    </div>
                    <div class="mb-3">
                        <label for="txtmesesAtraso" class="form-label">Meses Atraso</label>
                        <input type="text" class="form-control" id="txtmesesAtraso" name="txtmesesAtraso" placeholder="Coloca tu Meses Atrasos">
                    </div>
                    <div class="mb-3">
                        <label for="txtId" class="form-label">plan_id</label>
                        <input type="text" class="form-control" id="txtId" name="txtId" placeholder="numero de plan">
                    </div>
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">cliente_id</label>
                        <input type="text" class="form-control" id="txtClienteId" name="txtClienteId" placeholder="Coloca numero de cliente">
                    </div>
                    <div class="mb-3">
                        <label for="btnGuardar" class="form-label"></label>
                        <input type="submit" id="btnGuardar" name="btnGuardar" class="form-control btn btn-primary" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
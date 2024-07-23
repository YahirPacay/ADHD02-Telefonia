<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Planes nuevos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container position-static top-50 start-50 ">
        <div class="row justify-content-center p-5">
        <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-success-subtle rounded-5">Planes nuevos</h1>

            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 bg-success-subtle text-info-emphasis p-5 border border-dark rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="agregar_plan" method="post">
                    <div class="mb-3">
                        <label for="txtId" class="form-label">ID</label>
                        <input type="text" id="txtId" name="txtId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtPagoMensual" class="form-label">Pago Mensual</label>
                        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMinutos" class="form-label">Minutos</label>
                        <input type="number" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtCantidadMensajes" class="form-label">Mensajes</label>
                        <input type="number" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="btnGuardarPlan" class="form-label"></label>
                        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control btn btn-dark" value="Guardar">
                    </div>
                </form>
            </div> 
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
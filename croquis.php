<?php require_once "includes/header.php" ?>

<div class="container-lg p-5" style="background:#F7F6F6; margin-top:20px; border-radius: 20px;" action="">
  <h1>Croquis</h1>
  <form>
    <div class="container-sm" style="background:white; margin-top:20px; border-radius: 20px;" action="">
      <!--Subir archivo de croquis-->
      <div>
        <div class="mb-3">
          <label for="imagencroquis" class="form-label">Subir archivo de croquis</label>
          <input class="form-control" type="file" name="imagencroquis" id="imagencroquis">
        </div>
      </div>
      <!--15. Datos de quien conoce el accidente-->
      <div>
        <label class="fw-bold">15. Datos de quien conoce el accidente</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="grado">Grado</label>
            <input name="grado" type="text" class="form-control" id="grado" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label for="apellidosnombres">Apellidos y nombre</label>
            <input type="text" class="form-control" id="apellidosnombres" name="apellidosnombres" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Identificación No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Placa</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Entidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Firma</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Grado</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Apellidos y nombre</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Identificación No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Placa</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Entidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Firma</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>
      </div>
      <!--15. Correspondió-->
      <div>
        <label class="fw-bold">15. Correspondio</label>
        <br>
        <label>Numero Unico de Investigación</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            Departamento
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            Municipio
            <input type="text" class="form-control" id="" placeholder="">

          </div>
          <div class="p-2 flex-fill">
            Entidad
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            U. receptora
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            Año
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            Consecutivo
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

      </div>
    </div>
  </form>
</div>

</body>

</html>
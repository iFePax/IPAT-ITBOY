<?php require_once "includes/header.php" ?>

<div class="container-lg p-5" style="background:#F7F6F6; margin-top:20px; border-radius: 20px;" action="">
  <h1>Anexo 2. Victimas: Pasajeros, acompañantes o peatones</h1>
  <form>
    <div class="container-sm" style="background:white; margin-top:20px; border-radius: 20px;" action="">
      <!--9. Victimas: Pasajeros, acompañantes o peatones-->
      <div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">9. Victimas: Pasajeros, acompañantes o peatones</label>
          </div>
          <div class="p-2 flex-fill">
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Del vehiculo No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Nombre y apellidos</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Tipo de documento</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el tipo de documento</option>
              <option value="1">Cedula</option>
              <option value="2">Pasaporte</option>
              <option value="3">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Numero de Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Fecha de nacimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
          <div class="p-2 flex-fill">
            <label>Sexo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el sexo</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
          </div>

          <div class="p-2 flex-fill">
            <label>Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Dirección de domicilio</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ciudad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Telefono</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Se practico examen</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen1">
                  <label class="form-check-label" for="flexRadioExamen1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen2" checked>
                  <label class="form-check-label" for="flexRadioExamen2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Autorizo</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo1">
                  <label class="form-check-label" for="flexRadioAutorizo1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo2" checked>
                  <label class="form-check-label" for="flexRadioAutorizo2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Embriaguez</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez1">
                  <label class="form-check-label" for="flexRadioEmbriaguez1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez2" checked>
                  <label class="form-check-label" for="flexRadioEmbriaguez2">
                    Negativo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <label>Grado</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Sustancias psicoactivas</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas1">
                  <label class="form-check-label" for="flexRadioPsicoactivas1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas2" checked>
                  <label class="form-check-label" for="flexRadioPsicoactivas2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Chaleco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco1">
                  <label class="form-check-label" for="flexRadioChaleco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco2" checked>
                  <label class="form-check-label" for="flexRadioChaleco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Casco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco1">
                  <label class="form-check-label" for="flexRadioCasco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco2" checked>
                  <label class="form-check-label" for="flexRadioCasco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Cinturón</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon1">
                  <label class="form-check-label" for="flexRadioCinturon1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon2" checked>
                  <label class="form-check-label" for="flexRadioCinturon2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Hospital, Clinica o centro de atención</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción de lesiones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <label class="fw-bold">9.1 Detalles de la victima</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">Condición</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Peaton
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Pasajero
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Acompañante
                  </label>
                </div>
              </div>
            </div>

          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--9. Victimas: Pasajeros, acompañantes o peatones-->
      <div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">9. Victimas: Pasajeros, acompañantes o peatones</label>
          </div>
          <div class="p-2 flex-fill">
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Del vehiculo No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Nombre y apellidos</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Tipo de documento</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el tipo de documento</option>
              <option value="1">Cedula</option>
              <option value="2">Pasaporte</option>
              <option value="3">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Numero de Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Fecha de nacimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
          <div class="p-2 flex-fill">
            <label>Sexo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el sexo</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
          </div>

          <div class="p-2 flex-fill">
            <label>Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Dirección de domicilio</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ciudad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Telefono</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Se practico examen</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen1">
                  <label class="form-check-label" for="flexRadioExamen1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen2" checked>
                  <label class="form-check-label" for="flexRadioExamen2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Autorizo</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo1">
                  <label class="form-check-label" for="flexRadioAutorizo1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo2" checked>
                  <label class="form-check-label" for="flexRadioAutorizo2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Embriaguez</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez1">
                  <label class="form-check-label" for="flexRadioEmbriaguez1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez2" checked>
                  <label class="form-check-label" for="flexRadioEmbriaguez2">
                    Negativo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <label>Grado</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Sustancias psicoactivas</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas1">
                  <label class="form-check-label" for="flexRadioPsicoactivas1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas2" checked>
                  <label class="form-check-label" for="flexRadioPsicoactivas2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Chaleco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco1">
                  <label class="form-check-label" for="flexRadioChaleco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco2" checked>
                  <label class="form-check-label" for="flexRadioChaleco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Casco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco1">
                  <label class="form-check-label" for="flexRadioCasco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco2" checked>
                  <label class="form-check-label" for="flexRadioCasco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Cinturón</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon1">
                  <label class="form-check-label" for="flexRadioCinturon1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon2" checked>
                  <label class="form-check-label" for="flexRadioCinturon2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Hospital, Clinica o centro de atención</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción de lesiones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <label class="fw-bold">9.1 Detalles de la victima</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">Condición</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Peaton
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Pasajero
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Acompañante
                  </label>
                </div>
              </div>
            </div>

          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--9. Victimas: Pasajeros, acompañantes o peatones-->
      <div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">9. Victimas: Pasajeros, acompañantes o peatones</label>
          </div>
          <div class="p-2 flex-fill">
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Del vehiculo No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Nombre y apellidos</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Tipo de documento</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el tipo de documento</option>
              <option value="1">Cedula</option>
              <option value="2">Pasaporte</option>
              <option value="3">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Numero de Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Fecha de nacimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
          <div class="p-2 flex-fill">
            <label>Sexo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el sexo</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
          </div>

          <div class="p-2 flex-fill">
            <label>Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Dirección de domicilio</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ciudad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Telefono</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Se practico examen</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen1">
                  <label class="form-check-label" for="flexRadioExamen1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen2" checked>
                  <label class="form-check-label" for="flexRadioExamen2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Autorizo</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo1">
                  <label class="form-check-label" for="flexRadioAutorizo1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo2" checked>
                  <label class="form-check-label" for="flexRadioAutorizo2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Embriaguez</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez1">
                  <label class="form-check-label" for="flexRadioEmbriaguez1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez2" checked>
                  <label class="form-check-label" for="flexRadioEmbriaguez2">
                    Negativo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <label>Grado</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Sustancias psicoactivas</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas1">
                  <label class="form-check-label" for="flexRadioPsicoactivas1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas2" checked>
                  <label class="form-check-label" for="flexRadioPsicoactivas2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Chaleco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco1">
                  <label class="form-check-label" for="flexRadioChaleco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco2" checked>
                  <label class="form-check-label" for="flexRadioChaleco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Casco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco1">
                  <label class="form-check-label" for="flexRadioCasco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco2" checked>
                  <label class="form-check-label" for="flexRadioCasco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Cinturón</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon1">
                  <label class="form-check-label" for="flexRadioCinturon1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon2" checked>
                  <label class="form-check-label" for="flexRadioCinturon2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Hospital, Clinica o centro de atención</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción de lesiones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <label class="fw-bold">9.1 Detalles de la victima</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">Condición</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Peaton
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Pasajero
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Acompañante
                  </label>
                </div>
              </div>
            </div>

          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--9. Victimas: Pasajeros, acompañantes o peatones-->
      <div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">9. Victimas: Pasajeros, acompañantes o peatones</label>
          </div>
          <div class="p-2 flex-fill">
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Del vehiculo No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Nombre y apellidos</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Tipo de documento</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el tipo de documento</option>
              <option value="1">Cedula</option>
              <option value="2">Pasaporte</option>
              <option value="3">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Numero de Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Fecha de nacimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
          <div class="p-2 flex-fill">
            <label>Sexo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el sexo</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
          </div>

          <div class="p-2 flex-fill">
            <label>Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Dirección de domicilio</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ciudad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Telefono</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Se practico examen</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen1">
                  <label class="form-check-label" for="flexRadioExamen1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen2" checked>
                  <label class="form-check-label" for="flexRadioExamen2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Autorizo</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo1">
                  <label class="form-check-label" for="flexRadioAutorizo1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo2" checked>
                  <label class="form-check-label" for="flexRadioAutorizo2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Embriaguez</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez1">
                  <label class="form-check-label" for="flexRadioEmbriaguez1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez2" checked>
                  <label class="form-check-label" for="flexRadioEmbriaguez2">
                    Negativo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <label>Grado</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Sustancias psicoactivas</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas1">
                  <label class="form-check-label" for="flexRadioPsicoactivas1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas2" checked>
                  <label class="form-check-label" for="flexRadioPsicoactivas2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Chaleco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco1">
                  <label class="form-check-label" for="flexRadioChaleco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco2" checked>
                  <label class="form-check-label" for="flexRadioChaleco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Casco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco1">
                  <label class="form-check-label" for="flexRadioCasco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco2" checked>
                  <label class="form-check-label" for="flexRadioCasco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Cinturón</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon1">
                  <label class="form-check-label" for="flexRadioCinturon1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon2" checked>
                  <label class="form-check-label" for="flexRadioCinturon2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Hospital, Clinica o centro de atención</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción de lesiones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <label class="fw-bold">9.1 Detalles de la victima</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">Condición</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Peaton
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Pasajero
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Acompañante
                  </label>
                </div>
              </div>
            </div>

          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--9. Victimas: Pasajeros, acompañantes o peatones-->
      <div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">9. Victimas: Pasajeros, acompañantes o peatones</label>
          </div>
          <div class="p-2 flex-fill">
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Del vehiculo No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Nombre y apellidos</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Tipo de documento</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el tipo de documento</option>
              <option value="1">Cedula</option>
              <option value="2">Pasaporte</option>
              <option value="3">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Numero de Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Fecha de nacimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
          <div class="p-2 flex-fill">
            <label>Sexo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el sexo</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
          </div>

          <div class="p-2 flex-fill">
            <label>Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Dirección de domicilio</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ciudad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Telefono</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Se practico examen</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen1">
                  <label class="form-check-label" for="flexRadioExamen1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen2" checked>
                  <label class="form-check-label" for="flexRadioExamen2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Autorizo</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo1">
                  <label class="form-check-label" for="flexRadioAutorizo1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo2" checked>
                  <label class="form-check-label" for="flexRadioAutorizo2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Embriaguez</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez1">
                  <label class="form-check-label" for="flexRadioEmbriaguez1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez2" checked>
                  <label class="form-check-label" for="flexRadioEmbriaguez2">
                    Negativo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <label>Grado</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Sustancias psicoactivas</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas1">
                  <label class="form-check-label" for="flexRadioPsicoactivas1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas2" checked>
                  <label class="form-check-label" for="flexRadioPsicoactivas2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Chaleco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco1">
                  <label class="form-check-label" for="flexRadioChaleco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco2" checked>
                  <label class="form-check-label" for="flexRadioChaleco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Casco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco1">
                  <label class="form-check-label" for="flexRadioCasco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco2" checked>
                  <label class="form-check-label" for="flexRadioCasco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Cinturón</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon1">
                  <label class="form-check-label" for="flexRadioCinturon1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon2" checked>
                  <label class="form-check-label" for="flexRadioCinturon2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Hospital, Clinica o centro de atención</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción de lesiones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <label class="fw-bold">9.1 Detalles de la victima</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">Condición</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Peaton
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Pasajero
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Acompañante
                  </label>
                </div>
              </div>
            </div>

          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <!--9. Victimas: Pasajeros, acompañantes o peatones-->
      <div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">9. Victimas: Pasajeros, acompañantes o peatones</label>
          </div>
          <div class="p-2 flex-fill">
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Del vehiculo No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Nombre y apellidos</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Tipo de documento</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el tipo de documento</option>
              <option value="1">Cedula</option>
              <option value="2">Pasaporte</option>
              <option value="3">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Numero de Documento</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Fecha de nacimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
          <div class="p-2 flex-fill">
            <label>Sexo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el sexo</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
          </div>

          <div class="p-2 flex-fill">
            <label>Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Dirección de domicilio</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ciudad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Telefono</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Se practico examen</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen1">
                  <label class="form-check-label" for="flexRadioExamen1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioExamen" id="flexRadioExamen2" checked>
                  <label class="form-check-label" for="flexRadioExamen2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Autorizo</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo1">
                  <label class="form-check-label" for="flexRadioAutorizo1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioAutorizo" id="flexRadioAutorizo2" checked>
                  <label class="form-check-label" for="flexRadioAutorizo2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Embriaguez</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez1">
                  <label class="form-check-label" for="flexRadioEmbriaguez1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioEmbriaguez" id="flexRadioEmbriaguez2" checked>
                  <label class="form-check-label" for="flexRadioEmbriaguez2">
                    Negativo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <label>Grado</label>
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Sustancias psicoactivas</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas1">
                  <label class="form-check-label" for="flexRadioPsicoactivas1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioPsicoactivas" id="flexRadioPsicoactivas2" checked>
                  <label class="form-check-label" for="flexRadioPsicoactivas2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Chaleco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco1">
                  <label class="form-check-label" for="flexRadioChaleco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioChaleco" id="flexRadioChaleco2" checked>
                  <label class="form-check-label" for="flexRadioChaleco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Casco</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco1">
                  <label class="form-check-label" for="flexRadioCasco1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCasco" id="flexRadioCasco2" checked>
                  <label class="form-check-label" for="flexRadioCasco2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Cinturón</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon1">
                  <label class="form-check-label" for="flexRadioCinturon1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioCinturon" id="flexRadioCinturon2" checked>
                  <label class="form-check-label" for="flexRadioCinturon2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Hospital, Clinica o centro de atención</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="exampleFormControlTextarea1" class="form-label">Descripción de lesiones</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>

        <label class="fw-bold">9.1 Detalles de la victima</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">Condición</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Peaton
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Pasajero
                  </label>
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Acompañante
                  </label>
                </div>
              </div>
            </div>

          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos1">
                  <label class="form-check-label" for="flexGravedadDos1">
                    Muerto
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexGravedadDos" id="flexGravedadDos2" checked>
                  <label class="form-check-label" for="flexGravedadDos2">
                    Herido
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--13. Observaciones-->
      <div>
        <label for="exampleFormControlTextarea1" class="form-label fw-bold">13. Observaciones</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
      </div>

      <!--15. Datos de quien conoce el accidente-->
      <div>
        <label class="fw-bold">15. Datos de quien conoce el accidente</label>
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
<?php require_once "includes/header.php" ?>

<div class="container-lg p-5" style="background:#F7F6F6; margin-top:20px; border-radius: 20px;" action="">
  <h1>Anexo 1. Conductores, Vehiculos, Propietarios</h1>
  <form>
    <div class="container-sm" style="background:white; margin-top:20px; border-radius: 20px;" action="">
      <!--8. Conductores, vehiculos y propietarios-->
      <div>
        <label class="fw-bold">8. Conductores, vehiculos y propietarios</label>
        <br>
        <label class="fw-bold">8.1 Conductor</label>
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
            <label>Porta licencia</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioLicencia" id="flexRadioLicencia1">
                  <label class="form-check-label" for="flexRadioLicencia1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioLicencia" id="flexRadioLicencia2" checked>
                  <label class="form-check-label" for="flexRadioLicencia2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Licencia de conducción No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Categoria</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la categoria</option>
              <option value="1"></option>
              <option value="2"></option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Restricción</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Fecha</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Código Of. tránsito</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
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

        <label class="fw-bold">8.2 Vehiculo</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Placa</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Placa remolqueada</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Marca</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Linea</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Color</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Modelo</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Carroceria</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ton</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Pasajeros</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Licencia de trans No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Empresa</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>NIT.</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>Matriculado en</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Inmovilizado en</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>A disposición de</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>Tarjetas de registro No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Cantidad de acompañantes o pasajeros al momento del accidente</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>Revision Tecno Mecanica</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTecno" id="flexRadioTecno1">
                  <label class="form-check-label" for="flexRadioTecno1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTecno" id="flexRadioTecno2" checked>
                  <label class="form-check-label" for="flexRadioTecno2">
                    No
                  </label>
                </div>
              </div>
              <label>No.</label>
              <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Porta SOAT</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSOAT" id="flexRadioSOAT1">
                  <label class="form-check-label" for="flexRadioSOAT1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSOAT" id="flexRadioSOAT2" checked>
                  <label class="form-check-label" for="flexRadioSOAT2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Póliza No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Aseguradora</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Porta Seg Responsabilidad civil contractual</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegResp" id="flexRadioSegResp1">
                  <label class="form-check-label" for="flexRadioSegResp1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegResp" id="flexRadioSegResp2" checked>
                  <label class="form-check-label" for="flexRadioSegResp2">
                    No
                  </label>
                </div>
              </div>
            </div>
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Aseguradora</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>

          <div class="p-2 flex-fill">
            <label>Porta Seg Responsabilidad Extracontractual</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegRespExt" id="flexRadioSegRespExt1">
                  <label class="form-check-label" for="flexRadioSegRespExt1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegRespExt" id="flexRadioSegRespExt2" checked>
                  <label class="form-check-label" for="flexRadioSegRespExt2">
                    No
                  </label>
                </div>
              </div>
            </div>

            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Aseguradora</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
        </div>

        <label class="fw-bold">Propietario</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Mismo Conductor</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioConductor" id="flexRadioConductor1">
                  <label class="form-check-label" for="flexRadioConductor1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioConductor" id="flexRadioConductor2" checked>
                  <label class="form-check-label" for="flexRadioConductor2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Apellidos y Nombre</label>
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
        </div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">8.3 Clase vehiculo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la clase de vehiculo</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold"></label>8.4 Clase Servicio</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la clase de servicio</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">8.5 Modalidad de transporte</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la Modalidad de transporte</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">8.6 Radio de accion</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el Radio de accion</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
        </div>

        <div class="p-2 flex-fill">
          <label class="fw-bold">8.7 Fallas en</label>
          <div class="d-flex">
            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Frenos
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Dirección
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Luces
                </label>
              </div>
            </div>
            <div class="p-2 flex-fill">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Bocina
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Llantas
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Suspensión
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Otra
                </label>
              </div>
            </div>
          </div>

        </div>

        <div class="p-2 flex-fill">
          <label for="exampleFormControlTextarea1" class="fw-bold">8.8 Descripción daños materiales del vehiculo</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="p-2 flex-fill">
          <label class="fw-bold">8.9 Lugar de impacto</label>
          <div class="d-flex">
            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Frontal
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Lateral
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Posterior
                </label>
              </div>
            </div>
            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Otro
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--8. Conductores, vehiculos y propietarios-->
      <div>
        <label class="fw-bold">8. Conductores, vehiculos y propietarios</label>
        <br>
        <label class="fw-bold">8.1 Conductor</label>
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
            <label>Porta licencia</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioLicencia" id="flexRadioLicencia1">
                  <label class="form-check-label" for="flexRadioLicencia1">
                    Positivo
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioLicencia" id="flexRadioLicencia2" checked>
                  <label class="form-check-label" for="flexRadioLicencia2">
                    Negativo
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label>Licencia de conducción No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Categoria</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la categoria</option>
              <option value="1"></option>
              <option value="2"></option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label>Restricción</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Fecha</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Código Of. tránsito</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
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

        <label class="fw-bold">8.2 Vehiculo</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Placa</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Placa remolqueada</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Nacionalidad</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Marca</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Linea</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Color</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Modelo</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Carroceria</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Ton</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Pasajeros</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Licencia de trans No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Empresa</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>NIT.</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>Matriculado en</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Inmovilizado en</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>A disposición de</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>Tarjetas de registro No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Cantidad de acompañantes o pasajeros al momento del accidente</label>
            <input type="text" class="form-control" id="" placeholder="">
            <label>Revision Tecno Mecanica</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTecno" id="flexRadioTecno1">
                  <label class="form-check-label" for="flexRadioTecno1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioTecno" id="flexRadioTecno2" checked>
                  <label class="form-check-label" for="flexRadioTecno2">
                    No
                  </label>
                </div>
              </div>
              <label>No.</label>
              <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Porta SOAT</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSOAT" id="flexRadioSOAT1">
                  <label class="form-check-label" for="flexRadioSOAT1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSOAT" id="flexRadioSOAT2" checked>
                  <label class="form-check-label" for="flexRadioSOAT2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Póliza No.</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Aseguradora</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Porta Seg Responsabilidad civil contractual</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegResp" id="flexRadioSegResp1">
                  <label class="form-check-label" for="flexRadioSegResp1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegResp" id="flexRadioSegResp2" checked>
                  <label class="form-check-label" for="flexRadioSegResp2">
                    No
                  </label>
                </div>
              </div>
            </div>
            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Aseguradora</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>

          <div class="p-2 flex-fill">
            <label>Porta Seg Responsabilidad Extracontractual</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegRespExt" id="flexRadioSegRespExt1">
                  <label class="form-check-label" for="flexRadioSegRespExt1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioSegRespExt" id="flexRadioSegRespExt2" checked>
                  <label class="form-check-label" for="flexRadioSegRespExt2">
                    No
                  </label>
                </div>
              </div>
            </div>

            <label>No.</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Aseguradora</label>
            <input type="text" class="form-control" id="" placeholder="">

            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="" id="">
          </div>
        </div>

        <label class="fw-bold">Propietario</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label>Mismo Conductor</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioConductor" id="flexRadioConductor1">
                  <label class="form-check-label" for="flexRadioConductor1">
                    Si
                  </label>
                </div>
              </div>
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioConductor" id="flexRadioConductor2" checked>
                  <label class="form-check-label" for="flexRadioConductor2">
                    No
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label>Apellidos y Nombre</label>
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
        </div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold">8.3 Clase vehiculo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la clase de vehiculo</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">8.4 Clase Servicio</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la clase de servicio</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">8.5 Modalidad de transporte</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la Modalidad de transporte</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold">8.6 Radio de accion</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el Radio de accion</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
        </div>

        <div class="p-2 flex-fill">
          <label class="fw-bold">8.7 Fallas en</label>
          <div class="d-flex">
            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Frenos
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Dirección
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Luces
                </label>
              </div>
            </div>
            <div class="p-2 flex-fill">

              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Bocina
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Llantas
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Suspensión
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Otra
                </label>
              </div>
            </div>
          </div>

        </div>

        <div class="p-2 flex-fill">
          <label for="exampleFormControlTextarea1" class="fw-bold">8.8 Descripción daños materiales del vehiculo</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <div class="p-2 flex-fill">
          <label class="fw-bold">8.9 Lugar de impacto</label>
          <div class="d-flex">
            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Frontal
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Lateral
                </label>
              </div>
            </div>

            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Posterior
                </label>
              </div>
            </div>
            <div class="p-2 flex-fill">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Otro
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--11. Hipótesis del accidente de tránsito-->
      <div>
        <label class="fw-bold">11. Hipótesis del accidente de tránsito</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            Del conductor
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <input type="text" class="form-control" id="" placeholder="">
                <input type="text" class="form-control" id="" placeholder="">

              </div>
              <div class="p-2 flex-fill">
                <input type="text" class="form-control" id="" placeholder="">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <div class="d-flex">
              <div class="p-2 flex-fill">
                Del vehiculo
                <input type="text" class="form-control" id="" placeholder="">
                <input type="text" class="form-control" id="" placeholder="">

              </div>
              <div class="p-2 flex-fill">
                De la via
                <input type="text" class="form-control" id="" placeholder="">
                <input type="text" class="form-control" id="" placeholder="">
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <div class="d-flex">
              <div class="p-2 flex-fill">
                Del peaton
                <input type="text" class="form-control" id="" placeholder="">
                <input type="text" class="form-control" id="" placeholder="">

              </div>
              <div class="p-2 flex-fill">
                Del pasajero
                <input type="text" class="form-control" id="" placeholder="">
                <input type="text" class="form-control" id="" placeholder="">
              </div>

            </div>
          </div>

        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            Otro
            <input type="text" class="form-control" id="" placeholder="">
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

      <!--16. Correspondio-->
      <div>
        <label class="fw-bold">16. Correspondio</label>
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
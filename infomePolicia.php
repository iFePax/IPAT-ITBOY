<?php require_once "includes/header.php" ?>

<div class="container-lg p-5" style="background:#F7F6F6; margin-top:20px; border-radius: 20px;" action="">
  <h1>Informe Policial de Accidente de Tránsito</h1>
  <form action="guardarInforme.php" method="$_POST">
    <div class="container-sm" style="background:white; margin-top:20px; border-radius: 20px;" action="">
      <!--1. Organismo de tránsito - 2. Gravedad-->
      <div>
        <label class="fw-bold">1. Organismo de tránsito</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Organismo_de_transito">Nombre</label>
            <input type="text" class="form-control" id="Organismo_de_transito" name="Organismo_de_transito" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label for="Puntoatencion">Punto de Atención de tránsito de</label>
            <input type="text" class="form-control" id="Puntoatencion" name="Puntoatencion" placeholder="">
          </div>

          <!--2. Gravedad-->
          <div class="p-2 flex-fill">
            <label class="fw-bold">2. Gravedad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input type="radio" name="Gravedad" class="form-check-input" value="Con muertos">
                  Con muertos
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input type="radio" name="Gravedad" class="form-check-input" value="Con heridos">
                  Con heridos
                </div>
              </div>

              <div class="p-2 flex-fill">
                <div class="form-check">
                  <input type="radio" name="Gravedad" class="form-check-input" value="Solo daños">
                  Solo daños
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--3. Lugar o coordenadas geográficas-->
      <div>
        <label class="fw-bold">3. Lugar o coordenadas geográficas</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="CodigoLugar">Código de ruta</label>
            <input type="text" class="form-control" id="CodigoLugar" name="CodigoLugar" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Lugar">Vía y kilometro o sitio, dirección y ciudad</label>
            <input type="text" class="form-control" id="Lugar" name="Lugar" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label>Coordenadas</label>
            <div class="d-flex">
              <div class="flex-fill">
                <input type="text" class="form-control" id="CoordLon" name="CoordLon" placeholder="Longitud">
              </div>
              <div class="flex-fill">
                <input type="text" class="form-control" id="CoordLat" name="CoordLat" placeholder="Latitud">
              </div>
            </div>
          </div>
          <!--3.1 Localidad o Comuna-->
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Localidad_o_comuna">3.1 Localidad o Comuna</label>
            <input type="text" class="form-control" id="Localidad_o_comuna" name="Localidad_o_comuna" placeholder="">
          </div>
        </div>
      </div>
      <!--4. Fecha y hora - 5. Clase de accidente-->
      <div>
        <label class="fw-bold">4. Fecha y hora</label>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Fecha_y_hora_ocurrencia">Fecha y hora de ocurrencia</label>
            <input class="form-control" type="datetime-local" name="Fecha_y_hora_ocurrencia" id="Fecha_y_hora_ocurrencia">
            <label for="Fecha_y_hora_levantamiento">Fecha y hora de levantamiento</label>
            <input class="form-control" type="datetime-local" name="Fecha_y_hora_levantamiento" id="Fecha_y_hora_levantamiento">
          </div>

          <!--5. Clase de accidente-->
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Clase_de_accidente">5. Clase de accidente</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Choque</option>
              <option value="2">Atropello</option>
              <option value="3">Volcamiento</option>
              <option value="4">Caida ocupante</option>
              <option value="5">Incendio</option>
              <option value="6">Otro</option>
            </select>

            <label class="fw-bold" for="Choque_con">5.1 Choque con</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Vehículo</option>
              <option value="2">Tren</option>
              <option value="3">Semoviente</option>
              <option value="4">Objeto fijo</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Objeto_fijo">5.2 Objeto fijo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Muro</option>
              <option value="2">Poste</option>
              <option value="3">Árbol</option>
              <option value="4">Baranda</option>
              <option value="5">Semáforo</option>
              <option value="6">Inmueble</option>
              <option value="7">Hidrante</option>
              <option value="8">Valla señal</option>
              <option value="9">Tarima cáseta</option>
              <option value="10">Vehículo estacionado</option>
              <option value="11">Otro</option>
            </select>
          </div>
        </div>

      </div>
      <!--6. Características del lugar-->
      <div>
        <label class="fw-bold">6. Características del lugar</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Area">6.1 Area</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Rural</option>
              <option value="2">Nacional</option>
              <option value="3">Departamental</option>
              <option value="4">Municipal</option>
              <option value="5">Urbana</option>
            </select>
            <label class="fw-bold" for="Sector">6.2 Sector</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Residencial</option>
              <option value="2">Industrial</option>
              <option value="3">Comercial</option>
            </select>

          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Zona">6.3 Zona</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Escolar</option>
              <option value="2">Turística</option>
              <option value="3">Militar</option>
              <option value="4">Deportiva</option>
              <option value="5">Privada</option>
              <option value="6">Hospitalaria</option>
            </select>
            <label class="fw-bold" for="Diseño">6.4 Diseño</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Glorieta</option>
              <option value="2">Intersección</option>
              <option value="3">Lote o predio</option>
              <option value="4">Paso a nivel</option>
              <option value="5">Pontón</option>
              <option value="6">Cicla ruta</option>
              <option value="7">Paso Elevado</option>
              <option value="8">Paso inferior</option>
              <option value="9">Peatonal</option>
              <option value="10">Puente</option>
              <option value="11">Tramo de Vía</option>
              <option value="12">Túnel</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Condicion_climatica">6.5 Condición climática</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione una opción</option>
              <option value="1">Granizo</option>
              <option value="2">Lluvia</option>
              <option value="3">Niebla</option>
              <option value="4">Viento</option>
              <option value="5">Normal</option>
            </select>
          </div>
        </div>
      </div>
      <!--7. Características de las vías-->
      <div>
        <label class="fw-bold">7. Características de las vías</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="">7.1 Geometricas</label> No se como hacerlo aca
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el item A</option>
                  <option value="1">Recta</option>
                  <option value="2">Curva</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el item B</option>
                  <option value="1">Plano</option>
                  <option value="2">Pendiente</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el item C</option>
                  <option value="1">Bahia de estacionamiento</option>
                  <option value="2">Con Anden</option>
                  <option value="3">Con Berma</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
            <label class="fw-bold" for="Utilizacion">7.2 Utilización</label>

            <div class="d-flex">
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la utilización</option>
                  <option value="1">Un sentido</option>
                  <option value="2">Doble sentido</option>
                  <option value="3">Reversible</option>
                  <option value="4">Contraflujo</option>
                  <option value="5">Ciclo vía</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>

            <label class="fw-bold" for="Calzadas">7.3 Calzadas</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el numero de calzadas</option>
                  <option value="1">Una</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres o mas</option>
                  <option value="4">Variable</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>

            <label class="fw-bold" for="Carriles">7.4 Carriles</label>
            <div class="d-flex">
              <div class="p-2  flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el numero de carriles</option>
                  <option value="1">Un</option>
                  <option value="2">Dos</option>
                  <option value="3">Tres o mas</option>
                  <option value="4">Variables</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
            <label class="fw-bold" for="Superficie_de_rodadura">7.5 Supercicie de rodadura</label>
            <div class="d-flex">
              <div class="p-2  flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la supercifie</option>
                  <option value="1">Asfalto</option>
                  <option value="2">Afirmado</option>
                  <option value="3">Adoquin</option>
                  <option value="4">Empedrado</option>
                  <option value="5">Concreto</option>
                  <option value="6">Tierra</option>
                  <option value="7">Otro</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
          </div>

          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Estado">7.6 Estado</label>
            <div class="d-flex">
              <div class="p-2  flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el estado</option>
                  <option value="1">Bueno</option>
                  <option value="2">Con huecos</option>
                  <option value="3">Derrumbes</option>
                  <option value="4">En reparación</option>
                  <option value="5">Hundimiento</option>
                  <option value="6">Inundación</option>
                  <option value="7">Parchada</option>
                  <option value="8">Rizada</option>
                  <option value="9">Fisurada</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
            <label class="fw-bold" for="Condiciones">7.7 Condiciones</label>
            <div class="d-flex">
              <div class="p-2  flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la condición</option>
                  <option value="1">Aceite</option>
                  <option value="2">Humedad</option>
                  <option value="3">Lodo</option>
                  <option value="4">Alcantarilla destapada</option>
                  <option value="5">Material orgánico</option>
                  <option value="6">Material suelto</option>
                  <option value="7">Seca</option>
                  <option value="8">Otra</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
            <label class="fw-bold" for="">7.8 Iluminación artificial</label>
            <div class="d-flex">
              <div class="p-2  flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el tipo de iluminación</option>
                  <option value="1">Buena</option>
                  <option value="2">Mala</option>
                  <option value="3">Sin iluminación</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
            <label class="fw-bold" for="">7.9 Controles de tránsito</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el item A</option>
                  <option value="1">Agente de tránsito</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el Estado del semaforo</option>
                  <option value="1">Operando</option>
                  <option value="2">Intermitente</option>
                  <option value="3">Con daños</option>
                  <option value="4">Apagado</option>
                  <option value="5">Oculto</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione las señales verticales</option>
                  <option value="1">Pare</option>
                  <option value="2">Ceda el paso</option>
                  <option value="3">No gire</option>
                  <option value="4">Sentido vial</option>
                  <option value="5">No adelantar</option>
                  <option value="6">Velocidad maxima</option>
                  <option value="7">Otra</option>
                  <option value="8">Ninguna</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
            <label class="fw-bold">7.10 Visibilidad</label>
            <div class="d-flex">
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione el item A</option>
                  <option value="1">Agente de tránsito</option>
                </select>
              </div>
              <div class="p-2 flex-fill">
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleccione la via</option>
                  <option value="1">Via 1</option>
                  <option value="2">Via 2</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--8. Conductores, vehiculos y propietarios-->
      <div>
        <label class="fw-bold">8. Conductores, vehiculos y propietarios</label>
        <label class="fw-bold">8.1 Conductor</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Conductor_Propietario_apellidos_nombre">Nombre y apellidos</label>
            <input type="text" class="form-control" id="Conductor_Propietario_apellidos_nombre" name="Conductor_Propietario_apellidos_nombre" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Conductor_doc">Tipo de documento</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el tipo de documento</option>
              <option value="1">Cedula</option>
              <option value="2">Pasaporte</option>
              <option value="3">Tarjeta de identidad</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label for="Conductor_identificacion">Numero de Documento</label>
            <input type="text" class="form-control" id="Conductor_identificacion" name="Conductor_identificacion" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Conductor_nacionalidad">Nacionalidad</label>
            <input type="text" class="form-control" id="Conductor_nacionalidad" name="Conductor_nacionalidad" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Conductor_fecha_nacimiento">Fecha de nacimiento</label>
            <input class="form-control" type="datetime-local" name="Conductor_fecha_nacimiento" id="Conductor_fecha_nacimiento">
          </div>
          <div class="p-2 flex-fill">
            <label for="Conductor_sexo">Sexo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el sexo</option>
              <option value="1">Hombre</option>
              <option value="2">Mujer</option>
            </select>
          </div>

          <div class="p-2 flex-fill">
            <label for="Conductor_gravedad">Gravedad</label>
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
            <label for="Conductor_direccion">Dirección de domicilio</label>
            <input type="text" class="form-control" id="Conductor_direccion" name="Conductor_direccion" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Conductor_direccion_ciudad">Ciudad</label>
            <input type="text" class="form-control" id="Conductor_direccion_ciudad" name="Conductor_direccion_ciudad" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Conductor_direccion_telefono">Telefono</label>
            <input type="text" class="form-control" id="Conductor_direccion_telefono" name="Conductor_direccion_telefono" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Conductor_examen">Se practico examen</label>
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
            <label for="Examen_autorizo">Autorizo</label>
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
            <label for="Examen_embriaguez">Embriaguez</label>
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
                <label for="Examen_embriaguez_grado">Grado</label>
                <input type="text" class="form-control" id="Examen_embriaguez_grado" name="Examen_embriaguez_grado" placeholder="">
              </div>
            </div>
          </div>
          <div class="p-2 flex-fill">
            <label for="Examen_sustancias_psicoactivas">Sustancias psicoactivas</label>
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
            <label for="Porta_licencia">Porta licencia</label>
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
            <label for="Licencia_de_conduccion">Licencia de conducción No.</label>
            <input type="text" class="form-control" id="Licencia_de_conduccion" name="Licencia_de_conduccion" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Licencia_categoria">Categoria</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la categoria</option>
              <option value="A1"></option>
              <option value="A2"></option>
              <option value="A3"></option>
              <option value="B1"></option>
              <option value="B2"></option>
              <option value="B3"></option>
              <option value="C1"></option>
              <option value="C2"></option>
              <option value="C3"></option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label FOR="Licencia_restriccion">Restricción</label>
            <input type="text" class="form-control" id="Licencia_restriccion" name="Licencia_restriccion" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Exp_ven">Fecha</label>
            <input class="form-control" type="datetime-local" name="Exp_ven" id="Exp_ven">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Licencia_codigo_of_transito">Código Of. tránsito</label>
            <input type="text" class="form-control" id="" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Chaleco">Chaleco</label>
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
            <label for="Casco">Casco</label>
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
            <label for="Cinturon">Cinturón</label>
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
            <label for="Hospital">Hospital, Clinica o centro de atención</label>
            <input type="text" class="form-control" id="Hospital" name="Hospital" placeholder="">
          </div>
        </div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Descripcion_lesiones" class="form-label">Descripción de lesiones</label>
            <textarea class="form-control" id="Descripcion_lesiones" name="Descripcion_lesiones" rows="3"></textarea>
          </div>
        </div>

        <label class="fw-bold">8.2 Vehiculo</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Vehiculo_placa">Placa</label>
            <input type="text" class="form-control" id="Vehiculo_placa" name="Vehiculo_placa" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_placa_remolque">Placa remolqueada</label>
            <input type="text" class="form-control" id="Vehiculo_placa_remolque" name="Vehiculo_placa_remolque" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_nacionalidad">Nacionalidad</label>
            <input type="text" class="form-control" id="Vehiculo_nacionalidad" name="Vehiculo_nacionalidad" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Vehiculo_marca">Marca</label>
            <input type="text" class="form-control" id="Vehiculo_marca" anme="Vehiculo_marca" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_linea">Linea</label>
            <input type="text" class="form-control" id="Vehiculo_linea" anme="Vehiculo_linea" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_color">Color</label>
            <input type="text" class="form-control" id="Vehiculo_color" name="Vehiculo_color" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_modelo">Modelo</label>
            <input type="text" class="form-control" id="Vehiculo_modelo" name="Vehiculo_modelo" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_carroceria">Carroceria</label>
            <input type="text" class="form-control" id="Vehiculo_carroceria" name="Vehiculo_carroceria" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_ton">Ton</label>
            <input type="text" class="form-control" id="Vehiculo_ton" name="Vehiculo_ton" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label for="Vehiculo_pasajeros">Pasajeros</label>
            <input type="text" class="form-control" id="Vehiculo_pasajeros" name="Vehiculo_pasajeros" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_licencia_transito">Licencia de trans No.</label>
            <input type="text" class="form-control" id="Vehiculo_licencia_transito" name="Vehiculo_licencia_transito" placeholder="">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Vehiculo_empresa">Empresa</label>
            <input type="text" class="form-control" id="Vehiculo_empresa" name="Vehiculo_empresa" placeholder="">
            <label for="Vehiculo_NIT">NIT.</label>
            <input type="text" class="form-control" id="Vehiculo_NIT" name="Vehiculo_NIT" placeholder="">
            <label for="Vehiculo_matriculado">Matriculado en</label>
            <input type="text" class="form-control" id="Vehiculo_matriculado" name="Vehiculo_matriculado" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_inmovilizado">Inmovilizado en</label>
            <input type="text" class="form-control" id="Vehiculo_inmovilizado" name="Vehiculo_inmovilizado" placeholder="">
            <label for="Disposicion">A disposición de</label>
            <input type="text" class="form-control" id="Disposicion" name="Disposicion" placeholder="">
            <label for="Vehiculo_tarjetas_registro">Tarjetas de registro No.</label>
            <input type="text" class="form-control" id="Vehiculo_tarjetas_registro" name="Vehiculo_tarjetas_registro" placeholder="">
          </div>
          <div class="p-2 flex-fill">
            <label for="Vehiculo_cantidad_acompañantes">Cantidad de acompañantes o pasajeros al momento del accidente</label>
            <input type="text" class="form-control" id="Vehiculo_cantidad_acompañantes" name="Vehiculo_cantidad_acompañantes" placeholder="">
            <label for="Vehiculo_tecnicomecanica">Revision Tecno Mecanica</label>
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
            <label for="Vehiculo_porta_soat">Porta SOAT</label>
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
            <label for="Vehiculo_poliza">Póliza No.</label>
            <input type="text" class="form-control" id="Vehiculo_poliza" name="Vehiculo_poliza" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label for="Vehiculo_soat_aseguradora">Aseguradora</label>
            <input type="text" class="form-control" id="Vehiculo_soat_aseguradora" name="Vehiculo_soat_aseguradora" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label>Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="Vehiculo_soat_vencimiento" id="Vehiculo_soat_vencimiento">
          </div>
        </div>

        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Vehiculo_porta_seguridad_contractual">Porta Seg Responsabilidad civil contractual</label>
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
            <label for="Vehiculo_seguridad_contractual_numero">Numero de seguridad contractual</label>
            <input type="text" class="form-control" id="Vehiculo_seguridad_contractual_numero" name="Vehiculo_seguridad_contractual_numero" placeholder="">

            <label for="Vehiculo_seguridad_contractual_aseguradora">Aseguradora</label>
            <input type="text" class="form-control" id="Vehiculo_seguridad_contractual_aseguradora" name="Vehiculo_seguridad_contractual_aseguradora" placeholder="">

            <label for="Vehiculo_seguridad_contractual_vencimineto">Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="Vehiculo_seguridad_contractual_vencimineto" id="Vehiculo_seguridad_contractual_vencimineto">
          </div>

          <div class="p-2 flex-fill">
            <label for="Vehiculo_porta_seguridad_extracontractual">Porta Seg Responsabilidad Extracontractual</label>
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

            <label for="Vehiculo_seguridad_extracontractual_numero">Numero de seguridad Extracontractual</label>
            <input type="text" class="form-control" id="Vehiculo_seguridad_extracontractual_numero" name="Vehiculo_seguridad_extracontractual_numero" placeholder="">

            <label for="Vehiculo_seguridad_extracontractual_aseguradora">Aseguradora</label>
            <input type="text" class="form-control" id="Vehiculo_seguridad_extracontractual_aseguradora" name="Vehiculo_seguridad_extracontractual_aseguradora" placeholder="">

            <label for="Vehiculo_seguridad_extracontractual_vencimineto">Fecha de Vencimiento</label>
            <input class="form-control" type="datetime-local" name="Vehiculo_seguridad_extracontractual_vencimineto" id="Vehiculo_seguridad_extracontractual_vencimineto">
          </div>
        </div>

        <label class="fw-bold">Propietario</label>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label for="Propietario_mismo_conductor">Mismo Conductor</label>
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
            <label for="Propietario_apellidos_nombres">Apellidos y Nombre</label>
            <input type="text" class="form-control" id="Propietario_apellidos_nombres" name="Propietario_apellidos_nombres" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label for="Propietario_doc">Documento</label>
            <input type="text" class="form-control" id="Propietario_doc" name="Propietario_doc" placeholder="">
          </div>

          <div class="p-2 flex-fill">
            <label for="Propietario_identificacion">Identificación No.</label>
            <input type="text" class="form-control" id="Propietario_identificacion" name="Propietario_identificacion" placeholder="">
          </div>
        </div>
        <div class="d-flex">
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Clase_vehiculo">8.3 Clase vehiculo</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la clase de vehiculo</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Clase_servicio">8.4 Clase Servicio</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la clase de servicio</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Modalidad_de_transporte">8.5 Modalidad de transporte</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione la Modalidad de transporte</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
          <div class="p-2 flex-fill">
            <label class="fw-bold" for="Radio_de_accion">8.6 Radio de accion</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
              <option selected>Seleccione el Radio de accion</option>
              <option value="1">Automovil</option>
              <option value="2">Bus</option>
              <option value="3">Camion</option>
            </select>
          </div>
        </div>

        <div class="p-2 flex-fill">
          <label class="fw-bold" for="Fallas">8.7 Fallas en</label>
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
          <label for="Descripcion_daños_vehiculo" class="fw-bold">8.8 Descripción daños materiales del vehiculo</label>
          <textarea class="form-control" id="Descripcion_daños_vehiculo" name="Descripcion_daños_vehiculo" rows="3"></textarea>
        </div>

        <div class="p-2 flex-fill">
          <label class="fw-bold" for="Lugar_impacto">8.9 Lugar de impacto</label>
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
    </div>
    <div class="p-3 col-12">
      <button class="btn btn-primary" type="submit">Siguiente</button>
    </div>
  </form>
</div>

</body>

</html>
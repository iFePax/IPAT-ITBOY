<?php
if (isset($_POST)) {
    require_once 'includes/conexion.php';
    $Organismo_de_transito = isset($_POST['Organismo_de_transito']) ? mysqli_real_escape_string($db, $_POST['Organismo_de_transito']) : false;
    /*nuevo en la db*/
    $Puntoatencion = isset($_POST['Puntoatencion']) ? mysqli_real_escape_string($db, $_POST['Puntoatencion']) : false;

    if (isset($_POST['Gravedad'])) {
        /*Falta id-name*/
        $Gravedad = isset($_POST['Gravedad']) ? mysqli_real_escape_string($db, $_POST['Gravedad']) : false;
    }

    /*nuevo en la db*/
    $CodigoLugar = isset($_POST['CodigoLugar']) ? mysqli_real_escape_string($db, $_POST['CodigoLugar']) : false;
    $Lugar = isset($_POST['Lugar']) ? mysqli_real_escape_string($db, $_POST['Lugar']) : false;
    /*nuevo en la db*/
    $gravedad = isset($_POST['CoordLon']) ? mysqli_real_escape_string($db, $_POST['CoordLon']) : false;
    /*nuevo en la db*/
    $CoordLat = isset($_POST['CoordLat']) ? mysqli_real_escape_string($db, $_POST['CoordLat']) : false;
    $Localidad_o_comuna = isset($_POST['Localidad_o_comuna']) ? mysqli_real_escape_string($db, $_POST['Localidad_o_comuna']) : false;
    /*nuevo en la db*/
    $Fecha_y_hora_ocurrencia = isset($_POST['Fecha_y_hora_ocurrencia']) ? mysqli_real_escape_string($db, $_POST['Fecha_y_hora_ocurrencia']) : false;
    $Fecha_y_hora_levantamiento = isset($_POST['Fecha_y_hora_levantamiento']) ? mysqli_real_escape_string($db, $_POST['Fecha_y_hora_levantamiento']) : false;
    /*Falta id-name*/
    $Clase_de_accidente = isset($_POST['Clase_de_accidente']) ? mysqli_real_escape_string($db, $_POST['Clase_de_accidente']) : false;
    /*Falta id-name*/
    $Choque_con = isset($_POST['Choque_con']) ? mysqli_real_escape_string($db, $_POST['Choque_con']) : false;
    /*Falta id-name*/
    $Objeto_fijo = isset($_POST['Objeto_fijo']) ? mysqli_real_escape_string($db, $_POST['Objeto_fijo']) : false;
    /*Falta id-name*/
    $Area = isset($_POST['Area']) ? mysqli_real_escape_string($db, $_POST['Area']) : false;
    /*Falta id-name*/
    $Sector = isset($_POST['Sector']) ? mysqli_real_escape_string($db, $_POST['Sector']) : false;
    /*Falta id-name*/
    $Zona = isset($_POST['Zona']) ? mysqli_real_escape_string($db, $_POST['Zona']) : false;
    /*Falta id-name*/
    $Diseño = isset($_POST['Diseño']) ? mysqli_real_escape_string($db, $_POST['Diseño']) : false;
    /*Falta id-name*/
    $Condicion_climatica = isset($_POST['Condicion_climatica']) ? mysqli_real_escape_string($db, $_POST['Condicion_climatica']) : false;
    /*Revisar linea 209*/
    $gravedad = isset($_POST['gravedad']) ? mysqli_real_escape_string($db, $_POST['gravedad']) : false;
    $gravedad = isset($_POST['gravedad']) ? mysqli_real_escape_string($db, $_POST['gravedad']) : false;
    $gravedad = isset($_POST['gravedad']) ? mysqli_real_escape_string($db, $_POST['gravedad']) : false;
    /*Falta id-name*/
    $Utilizacion = isset($_POST['Utilizacion']) ? mysqli_real_escape_string($db, $_POST['Utilizacion']) : false;
    /*Falta id-name*/
    $Calzadas = isset($_POST['Calzadas']) ? mysqli_real_escape_string($db, $_POST['Calzadas']) : false;
    /*Falta id-name*/
    $Carriles = isset($_POST['Carriles']) ? mysqli_real_escape_string($db, $_POST['Carriles']) : false;
    /*Falta id-name*/
    $Superficie_de_rodadura = isset($_POST['Superficie_de_rodadura']) ? mysqli_real_escape_string($db, $_POST['Superficie_de_rodadura']) : false;
    /*Falta id-name*/
    $Estado = isset($_POST['Estado']) ? mysqli_real_escape_string($db, $_POST['Estado']) : false;
    /*Falta id-name*/
    $Condiciones = isset($_POST['Condiciones']) ? mysqli_real_escape_string($db, $_POST['Condiciones']) : false;
    /*Revisar linea 380*/
    /*Revisar linea 398*/
    $Conductor_Propietario_apellidos_nombre = isset($_POST['Conductor_Propietario_apellidos_nombre']) ? mysqli_real_escape_string($db, $_POST['Conductor_Propietario_apellidos_nombre']) : false;
    /*Falta id-name*/
    $Conductor_doc = isset($_POST['Conductor_doc']) ? mysqli_real_escape_string($db, $_POST['Conductor_doc']) : false;
    $Conductor_identificacion = isset($_POST['Conductor_identificacion']) ? mysqli_real_escape_string($db, $_POST['Conductor_identificacion']) : false;
    $Conductor_nacionalidad = isset($_POST['Conductor_nacionalidad']) ? mysqli_real_escape_string($db, $_POST['Conductor_nacionalidad']) : false;
    $Conductor_fecha_nacimiento = isset($_POST['Conductor_fecha_nacimiento']) ? mysqli_real_escape_string($db, $_POST['Conductor_fecha_nacimiento']) : false;
    /*Falta id-name*/
    $Conductor_sexo = isset($_POST['Conductor_sexo']) ? mysqli_real_escape_string($db, $_POST['Conductor_sexo']) : false;
    /*Falta id-name*/
    $Conductor_gravedad = isset($_POST['Conductor_gravedad']) ? mysqli_real_escape_string($db, $_POST['Conductor_gravedad']) : false;
    $Conductor_direccion = isset($_POST['Conductor_direccion']) ? mysqli_real_escape_string($db, $_POST['Conductor_direccion']) : false;
    $Conductor_direccion_ciudad = isset($_POST['Conductor_direccion_ciudad']) ? mysqli_real_escape_string($db, $_POST['Conductor_direccion_ciudad']) : false;
    $Conductor_direccion_telefono = isset($_POST['Conductor_direccion_telefono']) ? mysqli_real_escape_string($db, $_POST['Conductor_direccion_telefono']) : false;
    /*Falta id-name*/
    $Conductor_examen = isset($_POST['Conductor_examen']) ? mysqli_real_escape_string($db, $_POST['Conductor_examen']) : false;
    /*Falta id-name*/
    $Examen_autorizo = isset($_POST['Examen_autorizo']) ? mysqli_real_escape_string($db, $_POST['Examen_autorizo']) : false;
    /*Falta id-name*/
    $Examen_embriaguez = isset($_POST['Examen_embriaguez']) ? mysqli_real_escape_string($db, $_POST['Examen_embriaguez']) : false;
    $Examen_embriaguez_grado = isset($_POST['Examen_embriaguez_grado']) ? mysqli_real_escape_string($db, $_POST['Examen_embriaguez_grado']) : false;
    /*Falta id-name*/
    $Examen_sustancias_psicoactivas = isset($_POST['Examen_sustancias_psicoactivas']) ? mysqli_real_escape_string($db, $_POST['Examen_sustancias_psicoactivas']) : false;
    /*Falta id-name*/
    $Porta_licencia = isset($_POST['Porta_licencia']) ? mysqli_real_escape_string($db, $_POST['Porta_licencia']) : false;
    $Licencia_de_conduccion = isset($_POST['Licencia_de_conduccion']) ? mysqli_real_escape_string($db, $_POST['Licencia_de_conduccion']) : false;
    /*Falta id-name*/
    $Licencia_categoria = isset($_POST['Licencia_categoria']) ? mysqli_real_escape_string($db, $_POST['Licencia_categoria']) : false;
    /*Falta id-name*/
    $Licencia_restriccion = isset($_POST['Licencia_restriccion']) ? mysqli_real_escape_string($db, $_POST['Licencia_restriccion']) : false;
    /*Falta id-name*/
    $Exp_ven = isset($_POST['Exp_ven']) ? mysqli_real_escape_string($db, $_POST['Exp_ven']) : false;
    /*Falta id-name*/
    $Licencia_codigo_of_transito = isset($_POST['Licencia_codigo_of_transito']) ? mysqli_real_escape_string($db, $_POST['Licencia_codigo_of_transito']) : false;
    /*Falta id-name*/
    $Chaleco = isset($_POST['Casco']) ? mysqli_real_escape_string($db, $_POST['Chaleco']) : false;
    /*Falta id-name*/
    $Casco = isset($_POST['Casco']) ? mysqli_real_escape_string($db, $_POST['Casco']) : false;
    /*Falta id-name*/
    $Cinturon = isset($_POST['Cinturon']) ? mysqli_real_escape_string($db, $_POST['Cinturon']) : false;
    $Hospital = isset($_POST['Hospital']) ? mysqli_real_escape_string($db, $_POST['Hospital']) : false;
    $Descripcion_lesiones = isset($_POST['Descripcion_lesiones']) ? mysqli_real_escape_string($db, $_POST['Descripcion_lesiones']) : false;
    $Vehiculo_placa = isset($_POST['Vehiculo_placa']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_placa']) : false;
    $Vehiculo_placa_remolque = isset($_POST['Vehiculo_placa_remolque']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_placa_remolque']) : false;
    $Vehiculo_nacionalidad = isset($_POST['Vehiculo_nacionalidad']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_nacionalidad']) : false;
    $Vehiculo_marca = isset($_POST['Vehiculo_marca']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_marca']) : false;
    $Vehiculo_linea = isset($_POST['Vehiculo_linea']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_linea']) : false;
    $Vehiculo_color = isset($_POST['Vehiculo_color']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_color']) : false;
    $Vehiculo_modelo = isset($_POST['Vehiculo_modelo']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_modelo']) : false;
    $Vehiculo_carroceria = isset($_POST['Vehiculo_carroceria']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_carroceria']) : false;
    $Vehiculo_ton = isset($_POST['Vehiculo_ton']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_ton']) : false;
    $Vehiculo_pasajeros = isset($_POST['Vehiculo_pasajeros']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_pasajeros']) : false;
    $Vehiculo_licencia_transito = isset($_POST['Vehiculo_licencia_transito']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_licencia_transito']) : false;
    $Vehiculo_empresa = isset($_POST['Vehiculo_empresa']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_empresa']) : false;
    $Vehiculo_NIT = isset($_POST['Vehiculo_NIT']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_NIT']) : false;
    $Vehiculo_matriculado = isset($_POST['Vehiculo_matriculado']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_matriculado']) : false;
    $Vehiculo_inmovilizado = isset($_POST['Vehiculo_inmovilizado']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_inmovilizado']) : false;
    /*nuevo en la db*/
    $Disposicion = isset($_POST['Disposicion']) ? mysqli_real_escape_string($db, $_POST['Disposicion']) : false;
    $Vehiculo_tarjetas_registro = isset($_POST['Vehiculo_tarjetas_registro']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_tarjetas_registro']) : false;
    $Vehiculo_cantidad_acompañantes = isset($_POST['Vehiculo_cantidad_acompañantes']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_cantidad_acompañantes']) : false;
    /*Falta id-name*/
    $Vehiculo_tecnicomecanica = isset($_POST['Vehiculo_tecnicomecanica']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_tecnicomecanica']) : false;
    /*Falta id-name*/
    $Vehiculo_porta_soat = isset($_POST['Vehiculo_porta_soat']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_porta_soat']) : false;
    $Vehiculo_poliza = isset($_POST['Vehiculo_poliza']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_poliza']) : false;
    $Vehiculo_soat_aseguradora = isset($_POST['Vehiculo_soat_aseguradora']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_soat_aseguradora']) : false;
    $Vehiculo_soat_vencimiento = isset($_POST['Vehiculo_soat_vencimiento']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_soat_vencimiento']) : false;
    /*Falta id-name*/
    $Vehiculo_porta_seguridad_contractual = isset($_POST['Vehiculo_porta_seguridad_contractual']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_porta_seguridad_contractual']) : false;
    $Vehiculo_seguridad_contractual_numero = isset($_POST['Vehiculo_seguridad_contractual_numero']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_seguridad_contractual_numero']) : false;
    $Vehiculo_seguridad_contractual_aseguradora = isset($_POST['Vehiculo_seguridad_contractual_aseguradora']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_seguridad_contractual_aseguradora']) : false;
    $Vehiculo_seguridad_contractual_vencimineto = isset($_POST['Vehiculo_seguridad_contractual_vencimineto']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_seguridad_contractual_vencimineto']) : false;
    /*Falta id-name*/
    $Vehiculo_porta_seguridad_extracontractual = isset($_POST['Vehiculo_porta_seguridad_extracontractual']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_porta_seguridad_extracontractual']) : false;
    $Vehiculo_seguridad_extracontractual_numero = isset($_POST['Vehiculo_seguridad_extracontractual_numero']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_seguridad_extracontractual_numero']) : false;
    $Vehiculo_seguridad_extracontractual_aseguradora = isset($_POST['Vehiculo_seguridad_extracontractual_aseguradora']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_seguridad_extracontractual_aseguradora']) : false;
    $Vehiculo_seguridad_extracontractual_vencimineto = isset($_POST['Vehiculo_seguridad_extracontractual_vencimineto']) ? mysqli_real_escape_string($db, $_POST['Vehiculo_seguridad_extracontractual_vencimineto']) : false;
    /*Falta id-name*/
    $Propietario_mismo_conductor = isset($_POST['Propietario_mismo_conductor']) ? mysqli_real_escape_string($db, $_POST['Propietario_mismo_conductor']) : false;
    $Propietario_apellidos_nombres = isset($_POST['Propietario_apellidos_nombres']) ? mysqli_real_escape_string($db, $_POST['Propietario_apellidos_nombres']) : false;
    $Propietario_doc = isset($_POST['Propietario_doc']) ? mysqli_real_escape_string($db, $_POST['Propietario_doc']) : false;
    $Propietario_identificacion = isset($_POST['Propietario_identificacion']) ? mysqli_real_escape_string($db, $_POST['Propietario_identificacion']) : false;
    /*Falta id-name*/
    $Clase_vehiculo = isset($_POST['Clase_vehiculo']) ? mysqli_real_escape_string($db, $_POST['Clase_vehiculo']) : false;
    $Clase_servicio = isset($_POST['Clase_servicio']) ? mysqli_real_escape_string($db, $_POST['Clase_servicio']) : false;
    $Modalidad_de_transporte = isset($_POST['Modalidad_de_transporte']) ? mysqli_real_escape_string($db, $_POST['Modalidad_de_transporte']) : false;
    $Radio_de_accion = isset($_POST['Radio_de_accion']) ? mysqli_real_escape_string($db, $_POST['Radio_de_accion']) : false;
    /*Falta id-name-No erntendi la logica XD 1046*/
    $Fallas = isset($_POST['Fallas']) ? mysqli_real_escape_string($db, $_POST['Fallas']) : false;
    $Descripcion_daños_vehiculo = isset($_POST['Descripcion_daños_vehiculo']) ? mysqli_real_escape_string($db, $_POST['Descripcion_daños_vehiculo']) : false;
    $Lugar_impacto = isset($_POST['Lugar_impacto']) ? mysqli_real_escape_string($db, $_POST['Lugar_impacto']) : false;

    $query = "INSERT INTO informe_policial_de_accidente_de_transito VALUES(3,'$Organismo_de_transito','a',null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null);";
    //$query = "INSERT INTO informe_policial_de_accidente_de_transito VALUES('$Organismo_de_transito','$Puntoatencion','$Gravedad','$CodigoLugar','$Lugar','$CoordLon','$CoordLat','$Localidad_o_comuna','$Fecha_y_hora_ocurrencia','$Fecha_y_hora_levantamiento','$Clase_de_accidente','$Fecha_y_hora_ocurrecncia','$Choque_con','$Objeto_fijo','$Area','$Sector','$Zona','$Diseño','$Condicion_climatica','$gravedad','$gravedad','$gravedad','$Utilizacion','$Calzadas','$Carriles','$Superficie_de_rodadura','$Estado','$Condiciones','$Conductor_Propietario_apellidos_nombre','$Conductor_doc','$Conductor_identificacion','$Conductor_nacionalidad','$Conductor_fecha_nacimiento','$Conductor_sexo','$Conductor_gravedad','$Conductor_direccion','$Conductor_direccion_ciudad','$Conductor_direccion_telefono','$Conductor_examen','$Examen_autorizo','$Examen_embriaguez','$Examen_embriaguez_grado','$Examen_sustancias_psicoactivas','$Porta_licencia','$Licencia_de_conduccion','$Licencia_categoria','$Licencia_restriccion','$Exp_ven','$Exp_ven_fecha','$Licencia_codigo_of_transito','$Chaleco','$Casco','$Cinturon','$Hospital','$Descripcion_lesiones','$Vehiculo_placa','$Vehiculo_placa_remolque','$Vehiculo_nacionalidad','$Vehiculo_marca','$Vehiculo_linea','$Vehiculo_color','$Vehiculo_modelo','$Vehiculo_carroceria','$Vehiculo_ton','$Vehiculo_pasajeros','$Vehiculo_licencia_transito','$Vehiculo_empresa','$Vehiculo_NIT','$Vehiculo_matriculado','$Vehiculo_inmovilizado','$Disposicion','$Vehiculo_tarjetas_registro','$Vehiculo_tecnicomecanica','$Vehiculo_tecnicomecanica_numero','$Vehiculo_cantidad_acompañantes','$Vehiculo_porta_soat','$Vehiculo_poliza','$Vehiculo_soat_aseguradora','$Vehiculo_soat_vencimiento','$Vehiculo_porta_seguridad_contractual','$Vehiculo_seguridad_contractual_numero','$Vehiculo_seguridad_contractual_aseguradora','$Vehiculo_seguridad_contractual_vencimineto','$Vehiculo_porta_seguridad_extracontractual','$Vehiculo_seguridad_extracontractual_numero','$Vehiculo_seguridad_extracontractual_aseguradora','$Vehiculo_seguridad_extracontractual_vencimineto','$Propietario_mismo_conductor','$Propietario_apellidos_nombres','$Propietario_doc','$Propietario_identificacion','$Clase_vehiculo','$Clase_servicio','$Modalidad_de_transporte','$Radio_de_accion','$Descripcion_daños_vehiculo','$Fallas','$Lugar_impacto');";

    $guardar = mysqli_query($db, $query);
}
header("Location:croquis.php");

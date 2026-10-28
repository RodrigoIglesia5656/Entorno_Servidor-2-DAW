<?php

/**
 * Procesa y valida los datos del formulario de registro de evento deportivo.
 *
 * @param string &$nombreEvento
 * @param string &$fecha
 * @param string &$ubicacion
 * @param array  &$deportes
 * @return array Array de mensajes de error (vacío si no hay errores)
 */
function procesarEvento(&$nombreEvento, &$fecha, &$ubicacion, &$deportes)
{
    $errores = [];

    // Validar Nombre del Evento
    if (empty($_POST["nombreEvento"])) {
        $errores[] = "Debe ingresar el nombre del evento.";
    } else {
        $nombreEvento = $_POST["nombreEvento"];
    }

    // Validar Fecha
    if (empty($_POST["fecha"])) {
        $errores[] = "Debe seleccionar una fecha.";
    } else {
        $fecha = $_POST["fecha"];
    }

    // Validar Ubicación
    if (empty($_POST["ubicacion"])) {
        $errores[] = "Debe ingresar la ubicación.";
    } else {
        $ubicacion = $_POST["ubicacion"];
    }

    // Validar Deportes
    if (empty($_POST["deportes"])) {
        $errores[] = "Debe seleccionar al menos un deporte.";
    } else {
        $deportes = $_POST["deportes"];
    }
    return $errores;
}

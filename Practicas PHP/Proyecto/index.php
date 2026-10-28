<?php
// ==========================================================
//  Index.php - Controlador principal
//  Gestiona el flujo del formulario (evento deportivo)
// ==========================================================

// Incluir funciones auxiliares
require_once __DIR__ . '/funciones/libreria.php';

// ------------------------------
// Inicialización de variables
// ------------------------------
$nombreEvento = "";
$fecha        = "";
$ubicacion    = "";
$deportes     = [];
$errores      = [];

// Lista de deportes disponibles (para el select múltiple)
$listaDeportes = ["Fútbol", "Baloncesto", "Tenis", "Natación"];

// ------------------------------
// Procesamiento del formulario
// ------------------------------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $errores = procesarEvento($nombreEvento, $fecha, $ubicacion, $deportes);
}

// ------------------------------
// Carga de la vista del formulario
// ------------------------------
include 'vistas/formulario.php';

// ------------------------------
// Resultado tras el envío
// ------------------------------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($errores)) {
        // Si no hay errores, mostrar ficha del evento
        include 'vistas/tablaResultados.php';
    } else {
        // En caso de errores, mostrarlos
        include 'vistas/mostrarErrores.php';
    }
}

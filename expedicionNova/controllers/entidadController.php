<?php

class EntidadController {

    private $gestor;

    public function __construct() {
        $this->gestor = new GestorEntidades();
    }

    public function index() {
        $entidades = $this->gestor->obtenerTodos();
        include "views/lista.php";
    }

    public function crear() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $id = uniqid();
            $entidad = null;

            $tipo = $_POST['tipo'] ?? '';
            $nombre = $_POST['nombre'] ?? '';
            $planeta = $_POST['planeta'] ?? 'Desconocido';
            $origen = $_POST['origen'] ?? 'Desconocido';
            $nivelEstabilidad = $_POST['nivelEstabilidad'] ?? 0;

            if ($tipo === "FormaDeVida") {
                $dieta = $_POST['dieta'] ?? 'No especificada';
                $entidad = new FormaDeVida($id, $nombre, $planeta, $origen, $nivelEstabilidad, $dieta);
            }

            if ($tipo === "MineralRaro") {
                $dureza = $_POST['dureza'] ?? 0;
                $entidad = new MineralRaro($id, $nombre, $planeta, $origen, $nivelEstabilidad, $dureza);
            }

            if ($tipo === "ArtefactoAntiguo") {
                $antiguedad = $_POST['antiguedad'] ?? 0;
                $entidad = new Artefacto($id, $nombre, $planeta, $origen, $nivelEstabilidad, $antiguedad);
            }

            $this->gestor->guardar($entidad);

            header("Location: index.php");
            exit;
        }

        include "views/crear.php";
    }

    public function editar() {

    $id = $_GET['id'] ?? null;
    $entidad = $this->gestor->buscar($id);

    if (!$entidad) {
        echo "Entidad no encontrada";
        exit;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $tipo = $_POST['tipo'] ?? "";
        $nombre = $_POST['nombre'] ?? "";
        $planeta = $_POST['planeta'] ?? "";
        $origen = $_POST['origen'] ?? "";
        $nivelEstabilidad = $_POST['nivelEstabilidad'] ?? 0;

        $nueva = null;

        if ($tipo === "FormaDeVida") {
            $nueva = new FormaDeVida($id, $nombre, $planeta, $origen, $nivelEstabilidad, $_POST['dieta'] ?? "");
        }

        elseif ($tipo === "MineralRaro") {
            $nueva = new MineralRaro($id, $nombre, $planeta, $origen, $nivelEstabilidad, $_POST['dureza'] ?? 0);
        }

        elseif ($tipo === "ArtefactoAntiguo") {
            $nueva = new Artefacto($id, $nombre, $planeta, $origen, $nivelEstabilidad, $_POST['antiguedad'] ?? 0);
        }

        if ($nueva) {
            $this->gestor->reemplazar($id, $nueva);
        }

        header("Location: index.php");
        exit;
    }

    include "views/editar.php";
}

    public function eliminar() {
        $id = $_GET['id'] ?? null;
        $this->gestor->eliminar($id);

        header("Location: index.php");
        exit;
    }
}

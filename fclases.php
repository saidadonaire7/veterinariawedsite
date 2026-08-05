<?php
class datosmascota
{
    public function __construct(
        protected $did,
        protected $dnombre,
        protected $despecie = null,
        protected $draza = null,
        protected $dedad = null,
        protected $dpeso = null,
        protected $dcolor = null,
        protected $dresponsable = null,
        protected $dtelefono = null
    ) {
    }

    // Getters
    public function get_id() { return $this->did; }
    public function get_nombre() { return $this->dnombre; }
    public function get_especie() { return $this->despecie; }
    public function get_raza() { return $this->draza; }
    public function get_edad() { return $this->dedad; }
    public function get_peso() { return $this->dpeso; }
    public function get_color() { return $this->dcolor; }
    public function get_responsable() { return $this->dresponsable; }
    public function get_telefono() { return $this->dtelefono; }

    // Setters
    public function set_nombre($dnombre) { $this->dnombre = $dnombre; }
    public function set_especie($despecie) { $this->despecie = $despecie; }
    public function set_raza($draza) { $this->draza = $draza; }
    public function set_edad($dedad) { $this->dedad = $dedad; }
    public function set_peso($dpeso) { $this->dpeso = $dpeso; }
    public function set_color($dcolor) { $this->dcolor = $color; }
    public function set_responsable($dresponsable) { $this->dresponsable = $dresponsable; }
    public function set_telefono($dtelefono) { $this->dtelefono = $dtelefono; }
}
?>
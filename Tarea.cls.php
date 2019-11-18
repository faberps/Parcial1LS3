<?php
    class Tarea{
        public $aNombre;
        public $aFecha;
        public $aEstado;

        function __construct($pNombre,$pFecha,$pEstado){
            $this->nombre = $pNombre;
            $this->fechaCreacion = $pFecha; 
            $this->estado = $pEstado;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        public function setNombre($aNombre)
        {
            $this->nombre = $aNombre;

            return $this;
        }
        public function getFechaCreacion()
        {
            return $this->fechaCreacion;
        }
        public function setFechaCreacion($aFecha)
        {
            $this->fechaCreacion = $aFecha;

            return $this;
        }
        public function getEstado()
        {
            return $this->estado;
        }
        public function setEstado($aEstado)
        {
            $this->estado = $aEstado;

            return $this;
        }
    }
?>
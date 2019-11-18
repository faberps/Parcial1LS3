<?php
    class Tarea{
        public $aNombre = null;
        public $aFecha = null;
        public $aEstado = false;

        function __construct(string $pNombre, string $pFecha, bool $pEstado){
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
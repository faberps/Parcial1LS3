<?php
    class Tarea{
        public $aNombre;
        public $aFecha;
        public $aEstado;

        function __construct($pNombre,$pFecha,$pEstado){
            $this->aNombre = $pNombre;
            $this->aFecha = $pFecha; 
            $this->aEstado = $pEstado;
        }
        public function getNombre()
        {
            return $this->aNombre;
        }
        public function setNombre($aNombre)
        {
            $this->aNombre = $aNombre;

            return $this;
        }
        public function getFechaCreacion()
        {
            return $this->aFecha;
        }
        public function setFechaCreacion($aFecha)
        {
            $this->aFecha = $aFecha;

            return $this;
        }
        public function getEstado()
        {
            return $this->aEstado;
        }
        public function setEstado($aEstado)
        {
            

            return $this->aEstado = $aEstado;;
        }
    }
?>
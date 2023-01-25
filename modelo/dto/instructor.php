<?php
    class Instructor{

        private $Id_instructor;
        private $numero_documento;
        private $nombre;
        private $apellido;
        private $telefono;
        private $gmail;
        private $id_usuario;
        
        function setId_instructor($Id_instructor) { 
            $this->Id_instructor = $Id_instructor; 
        }
        function getId_instructor() { 
            return $this->Id_instructor; 
        }
        function setNumero_documento($numero_documento) { 
            $this->numero_documento = $numero_documento; 
        }
        function getNumero_documento() {
             return $this->numero_documento; 
            }
        function setNombre($nombre) { 
            $this->nombre = $nombre; 
        }
        function getNombre() { 
            return $this->nombre; 
        }
        function setApellido($apellido) { 
            $this->apellido = $apellido; 
        }
        function getApellido() { 
            return $this->apellido; 
        }
        function setTelefono($telefono) { 
            $this->telefono = $telefono; 
        }
        function getTelefono() { 
            return $this->telefono; 
        }
        function setGmail($gmail) { 
            $this->gmail = $gmail; 
        }
        function getGmail() { 
            return $this->gmail; 
        }
        function setId_usuario($id_usuario) { 
            $this->id_usuario = $id_usuario; 
        }
        function getId_usuario() { 
            return $this->id_usuario; 
        }
    }
?>
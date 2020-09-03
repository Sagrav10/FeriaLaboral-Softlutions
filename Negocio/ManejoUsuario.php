<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/" . CARPETA_RAIZ . RUTA_PERSISTENCIA . "UsuarioDAO.php");

    /**
     * Clase que representa la clase "ManejoUsuario"
     */
    class ManejoUsuario 
    {

        //-----------------------------------
        // Atributos
        //-----------------------------------

        /**
         * Representa la conexión con la base de datos
         *
         * @var Object
         */
        private $conexion;

        /**
         * Representa el objeto de esta clase
         *
         * @var ManejoUsuario
         */
        private static $manejoUsuario;

        //----------------------------------
        // Constructor
        //----------------------------------

        /**
         * Método constructor de la clase ManejoUsuario
         *
         * @param Object $conexion
         */
        public function __construct($conexion) 
        {
            $this->conexion = $conexion;
        }

        //---------------------------------
        // Métodos
        //---------------------------------

        /**
         * Crea un usuario
         *
         * @param Usuario $pUsuario
         */
        public function crearUsuario($pUsuario) 
        {
            $usuarioDAO = UsuarioDAO::obtenerUsuarioDAO($this->conexion);
            $usuarioDAO->crear($pUsuario);
        }

        /**
         * Busca un usuario en la base de datos
         *
         * @param int $pId
         * @return Usuario
         */
        public function buscarUsuario($pId) 
        {
            $usuarioDAO = UsuarioDAO::obtenerUsuarioDAO($this->conexion);
            $usuario = $usuarioDAO->consultar($pId);
            return $usuario;
        }
        
        /**
         * Actualiza un usuario
         *
         * @param Usuario $pUsuario
         */
        public function actualizarUsuario($pUsuario) 
        {
            $usuarioDAO = UsuarioDAO::obtenerUsuarioDAO($this->conexion);
            $usuarioDAO->actualizar($pUsuario);
        }

        /**
         * Elimina un usuario
         *
         * @param int $pId
         */
        public function eliminarUsuario($pId) 
        {
            $usuarioDAO = UsuarioDAO::obtenerUsuarioDAO($this->conexion);
            $usuarioDAO->eliminar($pId);
        }

        /**
         * Busca un usuario en la base de datos
         *
         * @param String $pNickname
         * @return Usuario
         */
        public function buscarUsuarioPorNickname($pNickname) 
        {
            $usuarioDAO = UsuarioDAO::obtenerUsuarioDAO($this->conexion);
            $usuario = $usuarioDAO->consultarUsuarioPorNickname($pNickname);
            return $usuario;
        }

        /**
         * Obtiene la lista de usuarios
         *
         * @return Usuario[]
         */
        public function listarUsuarios() 
        {
            $usuarioDAO = UsuarioDAO::obtenerUsuarioDAO($this->conexion);
            $usuarios = $usuarioDAO->listar();
            return $usuarios;
        }
    } 
?>
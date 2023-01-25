<?php

    require_once 'modelo/conexion.php';

    /*================================================== 
                        MODELO DE USUARIO
    ===================================================*/

    class InstructorDao{
        /*====================================================
                    ATRIBUTOS DE LA CLASE USUARIO
        ====================================================*/
        private $Id_instructor;
        private $numero_documento;
        private $nombre;
        private $apellido;
        private $telefono;
        private $gmail;
        private $id_usuario;

        /*====================================================
                            METODO CONSTRUCTOR
        ====================================================*/        

        function __construct( $objDtoInstructor ){

            $this -> Id_instructor             = $objDtoInstructor -> getId_instructor();
            $this -> numero_documento          = $objDtoInstructor -> getNumero_documento();
            $this -> nombre                    = $objDtoInstructor -> getNombre();
            $this -> apellido                  = $objDtoInstructor -> getApellido();
            $this -> telefono                  = $objDtoInstructor -> getTelefono();
            $this -> gmail                     = $objDtoInstructor -> getGmail();
            $this -> id_usuario                = $objDtoInstructor -> getId_usuario();

        }
       
        public function mdlConsultarUser(){
            /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/  
            $sql = "call SpConsultUser (?, ?);";

            try {

                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                
                $stmt = $conexion->conectar() -> prepare($sql);
                $stmt -> bindParam ( 1, $this -> usuario,    PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this -> clave,      PDO::PARAM_STR);
                $stmt -> execute();

                $resultSet = $stmt;
            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase DAO ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
            } catch (PDOException $ex) {
                echo "Se ha presentado un error al listar los datos ". $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
            }// FIN DEL TRY-CATCH
            
            return $resultSet;

        }   
        /*====================================================*/   
        public function mdlListarInstructor(){
            /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/  
            $sql = "call SpConsultInstructors ( );";

            try {

                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                $stmt -> execute();

                $resultSet = $stmt;
            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase DAO ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
            } catch (PDOException $ex) {
                echo "Se ha presentado un error al listar los datos ". $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
            }// FIN DEL TRY-CATCH
            
            return $resultSet;

        }   

        
        function mdlInsertarUsuario(){

            /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/
            $sql = 'call SpCreateUser( ?, ?, ?)';

            try {
            
                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                /*====================================================
                            LOS VALORES QUE SE INSERTARAN
                ====================================================*/

                $stmt -> bindParam ( 1, $this -> usuario,    PDO::PARAM_STR);
                $stmt -> bindParam ( 2, $this -> clave,      PDO::PARAM_STR);
                $stmt -> bindParam ( 3, $this -> rol,        PDO::PARAM_STR);

                $stmt -> execute();

            } catch(Exception $e) {

                echo "Se ha presentado un error en la clase DAO ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();

            } catch (PDOException $ex) {

                echo "Se ha presentado un error al insertar los datos ". $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();

            }

        }
        public function mdlEliminarInstructor(){

            /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/            

            $sql = "call SpDeleteUser( ? )";

            try{

                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                /*====================================================
                     SE INGRESA EL CODIGO QUE SE DESEA ELIMINAR
                ====================================================*/

                $stmt -> bindParam ( 1, $this->id_usuario ,    PDO::PARAM_INT);

                $stmt -> execute();

            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase DAO ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
            } catch (PDOException $ex) {
                echo "Se ha presentado un error al eliminar los datos ". $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
            }// FIN DEL TRY-CATCH

        } //FIN DEL METODO ELIMINAR
        public function mdlModificarInstructor(){

            /*====================================================
                INSGRESAR LA CONSULTA, PUEDE SER SP O QUERY
            ====================================================*/

            $sql = 'call SpUpdateInstructor( ?, ?, ?, ?, ?, ?)';
            try {
                
                /*====================================================
                            INSTACIAR LA BASE DE DATOS
                ====================================================*/
                $conexion = new Conexion();
                $stmt = $conexion->conectar() -> prepare($sql);

                /*====================================================
                          LOS VALORES QUE SE VAN A MODIFICAR
                ====================================================*/
                $stmt -> bindParam ( 1, $this -> Id_instructor,      PDO::PARAM_INT);
                $stmt -> bindParam ( 2, $this -> numero_documento,   PDO::PARAM_INT);
                $stmt -> bindParam ( 3, $this -> nombre,             PDO::PARAM_STR);
                $stmt -> bindParam ( 4, $this -> apellido,           PDO::PARAM_STR);
                $stmt -> bindParam ( 5, $this -> telefono,           PDO::PARAM_INT);
                $stmt -> bindParam ( 6, $this -> gmail,              PDO::PARAM_STR);
                
                $stmt -> execute();
                
            } catch(Exception $e) {
                echo "Se ha presentado un error en la clase DAO ". $e->getMessage() . " El error se encuentra la linea: " . $e->getLine();
            } catch (PDOException $ex) {
                echo "Se ha presentado un error al modificar los datos ". $ex->getMessage() . " El error se encuentra la linea: " . $ex->getLine();
            }// FIN DEL TRY-CATCH

        }// FIN DEL METODO MODIFICAR
    }

?>
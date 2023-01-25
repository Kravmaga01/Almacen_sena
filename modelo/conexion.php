<?php

    /*======================================================
                CONEXION A LA BASE DE DATOS
    ======================================================*/
class Conexion{

    private $driver;
    private $host;
    private $user;
    private $pass;
    private $dataBase;
    private $charSet;

    /*
    METODO CONSTRUCTOR
    Es el que inicializa una clase, es el metodo de arranque
    */

    function __construct(){

        $archivo = 'util/config.ini';
        
        if (!$vector = parse_ini_file($archivo)) throw new Exception("Ojo no se pudo abrir el archivo " . $archivo, 1);
        
        $this -> driver     =   $vector['driver'];
        $this -> host       =   $vector['host'];
        $this -> user       =   $vector['user'];
        $this -> pass       =   $vector['pass'];
        $this -> dataBase   =   $vector['database'];
        $this -> charSet    =   $vector['charset'];

        //echo var_dump($vector);
        //print 'La clase arranco';

    }
    public function conectar(){
        /*======================================================
                    CONSTRUIR LA CADENA DE CONEXION 
        ======================================================*/
        try {

            $cadena = $this -> driver . ':host=' . $this -> host . ';dbname=' . $this -> dataBase;

            /*======================================================
                            INSTANCIAR LA CLASE PDO
            ======================================================*/
    
            $conexion = new PDO($cadena, $this -> user, $this -> pass);
            
            $conexion -> setAttribute ( PDO::ATTR_ERRMODE,               PDO::ERRMODE_EXCEPTION);
            $conexion -> setAttribute ( PDO::ATTR_DEFAULT_FETCH_MODE,    PDO::FETCH_ASSOC);

            /*======================================================
                  ESTABLECER LA CODIFICACION CON Ñ Y TILDES
            ======================================================*/

            $conexion -> exec ('SET CHARACTER SET '. $this -> charSet);

            //echo $cadena;
            
            //echo var_dump($conexion);
            
            //si todo funciona bien, se ejecutara solo el try

        } catch ( PDOException $e ) { //Si hay un error en la conexion PDO
            die('Error en la coneccion PDO' . $e->getMessage());
            echo 'Linea del error: ' . $e->getLine();
            //si algo de try genera error, se llamara el catch
        } catch ( Exception $ex ){ //Si hay un error en la clase creada
            die('Error en la coneccion ' . $ex->getMessage());
            echo 'Linea del error: ' . $ex->getLine();
        }
        
        return $conexion;

    }




} //Fin Clase

/*$objCon = new Conexion();

echo 'nota<br>';
echo var_dump( $objCon -> conectar() ); 

*/

?>
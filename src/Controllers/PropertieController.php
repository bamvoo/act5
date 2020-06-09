<?php


namespace Rentit\Controllers;


use Rentit\Controller;

final class PropertieController extends Controller
{
    public function __construct($request) {
        parent::__construct($request);
    }

    public function index() {
        $data = ['title'=>'Propiedades'];
        $this->getDB();
        $this->render($data);
    }

    function error() {
        throw new \Exception("Algo funciona mal, espero unos momentos por favor");
    }

    public function getQuery($sql, $params = null) {
        $db=$this->getDB();
        $sentencia = $this->query($db, $sql, $params);
        $resultados = $this->row_extract_one($sentencia);
        return $resultados;
    }

    public function getResults($sql, $params = null) {
        $db=$this->getDB();
        $sentencia = $this->query($db, $sql, $params);
        $resultados = $this->row_extracts($sentencia);
        return $resultados;
    }

    public function add() {
        if (isset($_POST)){;
            session_start();
            $param=["usuari"=>$_SESSION['user']];
            $sql="SELECT id FROM usuarios WHERE name='".$_SESSION['user']."';";
            $result = $this->getQuery($sql,$param);
            $id = $result['id'];
            $sql="INSERT INTO propiedades ( `direccion`, `precio`, `descripcion`, `id_usuario`, `m_cuadrados`, `poblacion`, `tipo`, `propiedad`) 
            VALUES ('".$_POST['direc']."', ".$_POST['precio'].", '".$_POST['desc']."', ". $id .", ".$_POST['m2'].", '".$_POST['poblac']."', '".$_POST['select_ca']."', '".$_POST['select_p']."');";
            $result = $this->getQuery($sql, "");
            if (!is_array($result)){
                header('location:/');
                return true;
            }
        }
    }
}
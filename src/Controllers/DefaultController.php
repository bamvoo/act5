<?php


namespace Rentit\Controllers;

use Rentit\Controller;

final class DefaultController extends Controller {

    public function __construct($request) {
        parent::__construct($request);

    }
    public function index() {
        $show = $this->showPropiedades();
        $data = ['title'=>'Bienvenido','propiedades'=>$show];
//        $data["html"]=$this->showPropiedades();
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

    public function getResults($sql, $params = null)
    {
        $db=$this->getDB();
        $sentencia = $this->query($db, $sql, $params);
        $resultados = $this->row_extracts($sentencia);
        return $resultados;
    }

    public function showPropiedades(){
        $sql = "SELECT * FROM propiedades;";
        $total = $this->getResults($sql);
        return $total;
    }
}
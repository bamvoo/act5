<?php


namespace Rentit\Controllers;

use Rentit\Controller;

final class LoginController extends Controller {

    public function __construct($request) {
        parent::__construct($request);

    }
    public function index() {
        $data = ['title'=>'Iniciar Sesión'];
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

    public function logIn(){

        if (isset($_POST)){

            $pass= hash('sha256', $_POST['passwd_post']);
            $params=['user'=>$_POST['user_post'], 'passwd' => $pass];
            $sql="SELECT * FROM usuarios WHERE name='".$_POST['user_post']."' AND password='".$pass."';";
            $result = $this->getQuery($sql, $params);

            if (is_array($result)){
                session_start();
                $_SESSION['user']=$_POST['user_post'];
                $_SESSION['passwd']=$_POST['passwd_post'];
                header('location:/');
                return true;
            }

        } else{
            return false;
        }
    }
}

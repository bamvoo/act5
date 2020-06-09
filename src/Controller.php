<?php


namespace Rentit;


abstract class Controller implements View, Model {

    protected $request;

    function __construct($request) {
        $this->request = $request;
    }

    function error(){
        throw new \Exception("Problemas técnicos");
    }

    public function render(array $dataview = null, string $template = null) {
        if ($dataview) {
            extract($dataview);
            include 'Templates/' . $this->request->getController() . '.php';
            if ($template != "") {
                include 'Templates/' . $template . '.php';
            }
        }
    }

    function getDB() {
        $db = DB::singleton();
        return $db;
    }

    protected function query($db, $sql, $params = null) {
        try {
            $stmt = $db->prepare($sql);
            if ($params) {
                $res = $stmt->execute($params);
            } else {
                $res = $stmt->execute();
            }
            return $stmt;
        }catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    protected function row_extract_one($stmt) {
        $rows = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $rows;
    }

    protected function row_extracts($stmt) {
        $rows = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $rows;
    }
}
<?php


namespace Rentit;


interface Model
{
    public function getDB();
    public function getQuery($sql, $params = null);
    public function getResults($sql, $params = null);
}
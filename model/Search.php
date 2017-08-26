<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/26/2017
 * Time: 1:41 AM
 */
class Search implements JsonSerializable {

    private $db;
    private $term;


    public function __construct($term = null)
    {
        $this->term =$term;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

    public function __get($prop) {
        return $this->$prop;
    }
}

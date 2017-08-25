<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/25/2017
 * Time: 18:35 PM
 */
class User implements JsonSerializable {
    private $id;
    private $username;
    private $password;


    function __construct($username, $password, $id = null) {

        if (strlen($username) < 3){
            echo "molq imeto da ima pone 3 bukvi";
        }

        if (strlen($password) < 6 ){
            echo "Parolata trqbva da ima pone 6 simvola";
        }

        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
    }


    public function jsonSerialize() {
        $result = get_object_vars($this);
        unset($result['password']);
        return $result;
    }

    public function __get($prop) {
        return $this->$prop;
    }
}
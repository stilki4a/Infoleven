<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/24/2017
 * Time: 2:38 AM
 */
class Book implements JsonSerializable {
        private $id;
        private $title;
        private $pages;
        private $genre;
        private $mediaImage;
        private $publishDate;
        private $userId = 1;


    public function __construct($title,$pages,$genre,$userID,$publishDate = null,$id = null) {


    $this->title =$title;
    $this->pages = $pages;
    $this->genre = $genre;
    $this->publishDate = $publishDate;
    $this->userId = $userID;

    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }

    public function __get($prop) {
        return $this->$prop;
    }



        public function setId($id){

            if(is_numeric($id) && $id > 0){
                $this->id = $id;
            }

        }

//        public function setImage($image){
//            if($image === null){
//                $this->mediaImage='lib3.jpg';
//            }else{
//                $this->mediaImage = $image;
//            }
//
//        }


    }

<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/26/2017
 * Time: 2:28 AM
 */
class SearchDAO
{
    private $db;


    const SEARCG_SQL = 'SELECT * FROM  books WHERE book_title LIKE %?%';

    const SEARCH_FROM_TO_SQL = 'SELECT * FROM books WHERE book_pages BETWEEN ? AND ?';

    const SEARCH_BY_GENRE_SQL = 'SELECT * FROM books WHERE book_genre = ?';

    public function __construct() {
        $this->db = DBConnection::getDb ();
    }


    public function searchName(Search $term){
        $stmt = $this->db->prepare(self::SEARCG_SQL);
        $stmt->execute(array(
            $this->term
        ));

        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($arr);
        return $arr;
    }

    public function searchGenre($genre){

        $stmt = $this->db->prepare(self::SEARCH_BY_GENRE_SQL);
        $stmt->execute(array($genre));

        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($arr);
        return $arr;
    }



    public function searchFromTo($from,$to){
        $stmt = $this->db->prepare(self::SEARCH_FROM_TO_SQL);
        $stmt->execute(array($from,$to));

        $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($arr);
        return $arr;
    }

}
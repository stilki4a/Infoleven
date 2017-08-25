<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/24/2017
 * Time: 2:37 AM
 */
class BookDAO {

    private $db;

      const ADD_BOOK = 'INSERT INTO books VALUES(null,?,?,?,null,(SELECT NOW()),?)';

    const ALL_BOOKS_SQL = "SELECT book_id, book_title, book_pages,book_genre,book_image,publish_date,user_id
								FROM books
								ORDER BY publish_date DESC";


    public function __construct() {
        $this->db = DBConnection::getDb ();
    }

    public function addBook (Book $book){

        $pstmt = $this->db->prepare( self::ADD_BOOK );
        $pstmt->execute ( array (
            $book->title,
            $book->pages,
            $book->genre,
//            $book->publishDate,
            $book->userId
        ) );

    }

        public function listBooks(){
            $stmt = $this->db->prepare(self::ALL_BOOKS_SQL);
            $stmt->execute(array());

            $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($arr);
            return $arr;
        }


    public function randomName($extension){
        while(true){
            $random = sha1(rand(0,PHP_INT_MAX));
            $name = $random. "." .$extension;
            if(!file_exists($name)){
                return $name;
            }
        }
    }


}

<?php

class Mahasiswa_model {
    // private $mhs = [
    //     [
    //         "nama" => "Muhammad Afrizal Fadillah",
    //         "npm" => "203040075",
    //         "email" => "sukakamu@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Dimas Putra",
    //         "npm" => "203040076",
    //         "email" => "dimas@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Ray Gening",
    //         "npm" => "203040077",
    //         "email" => "ray@gmail.com",
    //         "jurusan" => "Teknik Industri"
    //     ],
    //     [
    //         "nama" => "Yoga Bagja Ramadan",
    //         "npm" => "203040078",
    //         "email" => "yoga@gmail.com",
    //         "jurusan" => "Teknik Mesin"
    //     ],
    //     ];

    private $dbh; // database handler
    private $stmt;

    public function __construct() {
        
        // data source nam
        $dsn = 'mysql:host=localhost;dbname=prakweb_203040075_mvc';

        try {
            $this->dbh = new PDO($dsn, 'root','');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
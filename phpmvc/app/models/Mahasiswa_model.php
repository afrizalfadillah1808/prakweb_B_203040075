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

    private $table = 'mahasiswa';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }



    public function getAllMahasiswa() {
        // $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        // $this->stmt->execute();
        // return $this->stmt->fetchAll(PDO::FETCH_ASSOC);

        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();


    }

    public function getMahasiswaById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id ');

        $this->db->bind('id', $id);
        return $this->db->single();
    }
}
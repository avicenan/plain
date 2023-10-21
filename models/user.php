<?php
namespace Models;

class User {
    private $id;
    private $username;
    private $photo;

    public function __construct($id, $username, $photo) {
        $this->id = $id;
        $this->username = $username;
        $this->photo = $photo;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    // Tambahan untuk menampilkan photo user yang telah login (masih error)
    public function getPhoto() {
        return $this->photo;
    }

}
?>
<?php

class Group {
    private $id;
    private $name;
    private $users = [];

    public function __construct($id, $name) {
        $this->id = $id;
        $this->name = $name;
    }

    // Getter and setter methods for id, name, and users

    public function addUser($user) {
        $this->users[] = $user;
    }

    public function getUsers() {
        return $this->users;
    }
}
?>
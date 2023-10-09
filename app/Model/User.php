<?php

class User {
    private $id;
    private $login;
    private $passwordHash;
    private $groups = [];

    public function __construct($id, $login, $passwordHash) {
        $this->id = $id;
        $this->login = $login;
        $this->passwordHash = $passwordHash;
    }

    // Getter and setter methods for id, login, passwordHash, and groups

    public function addGroup($group) {
        $this->groups[] = $group;
    }

    public function getGroups() {
        return $this->groups;
    }
}

?>
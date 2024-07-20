<?php

class Test extends DataBase {

    //without prepare()
    /*
    public function getAllUsers() {
        $sql = 'SELECT * FROM users'; 
        $stmt = $this->connect()->query($sql); 

        while ($row = $stmt->fetch()) { 
            echo $row['users_firstname'] . ' ' . $row['users_lastname'] . ' ' . $row['user_dateofbirth'] . "<br>";
        }
    }
*/

    public function getAllUsers() {
        $sql = 'SELECT * FROM users';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()) {
            echo $row['users_firstname'] . ' ' . $row['users_lastname'] . ' ' . $row['user_dateofbirth'] . "<br>";
        }
    }
    
    public function getUsersByFullName($firstname, $lastname) {
        $sql = "SELECT * FROM users WHERE users_firstname = ? AND users_lastname = ?"; 
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute([$firstname, $lastname]); 
        $names = $stmt->fetchAll(); 
    
        foreach ($names as $name) {
            echo $name['users_dateofbirth'] . '<br>'; 
        }
    }
    
    public function addUser($firstname, $lastname, $dateofbirth) {
        $sql = "INSERT INTO users (users_firstname, users_lastname, user_dateofbirth) VALUES (?, ?, ?)"; 
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute([$firstname, $lastname, $dateofbirth]); 
    }
}

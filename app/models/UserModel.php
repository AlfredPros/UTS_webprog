<?php

class UserModel extends Database 
{
    public function getAllUser()
    {
      $queryUser = $this->db->prepare("SELECT * from allUser");
      $queryUser->execute();
      return $queryUser->fetchAll();
    }
    public function insertUser($data)
    {
      if ($this->usernameAvailable($data['username'])) {
        $query = $this->db->prepare("INSERT into allUser(firstName, lastName, username, password, birthDate,
        gender, profilePhoto)
        values (:firstName, :lastName, :username, :password, :birthDate,
                :gender, :profilePhoto)");
        $query->bindParam(":firstName", $data['firstName']);
        $query->bindParam(":lastName", $data['lastName']);
        $query->bindParam(":username", $data['username']);
        $query->bindParam(":password", $data['password']);
        $query->bindParam(":birthDate", $data['birthDate']);
        $query->bindParam(":gender", $data['gender']);
        $query->bindParam(":profilePhoto", $data['profilePhoto']);
        $query->execute();
        return $query->rowCount();
      }
    }

    public function usernameAvailable($username)
    {
        $query = $this->db->prepare("SELECT * FROM allUser WHERE username=:username");
        $query->bindParam(":username", $username);
        $query->execute();

        if ($query->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }
}

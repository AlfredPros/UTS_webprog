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

    public function login($username, $password)
    {
        $query = $this->db->prepare("SELECT UID, username,password WHERE username=:username");
        $query->bindParam(":username", $username);
        $query->execute();

        $result = $query->fetch();
        if ($query->rowCount() > 0) {
            $encryptedpassword = hash("sha512", $password);
            if ($encryptedpassword == $result['password']) {
                return $result['UID'];
            } else {
                // Jika encryptedpassword tidak sama dengan input
                return false;
            }
        } else {
            // Jika tidak ditemukan username
            return false;
        }
    }

    public function isAdmin($data)
    {
        $query = $this->db->prepare("SELECT * FROM allUser WHERE UID=:UID");
        $query->bindParam(":UID", $data['UID']);
        $query->execute();
        $result = $query->fetch();

        if ($result['isAdmin'] == 'Y') {
            return true;
        } else {
            return false;
        }
    }
}

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
      $query = $this->db->prepare("INSERT into allUser(firstName, lastName, username, password, birthDate,
                                    gender, profilePhoto, isAdmin)
      values (:firstName, :lastName, :username, :password, :birthDate,
                                    :gender, :profilePhoto, :isAdmin)");
      $query->bindParam(":firstName", $data['firstName']);
      $query->bindParam(":lastName", $data['lastName']);
      $query->bindParam(":username", $data['username']);
      $query->bindParam(":password", $data['password']);
      $query->bindParam(":birthDate", $data['birthDate']);
      $query->bindParam(":gender", $data['gender']);
      $query->bindParam(":profilePhoto", $data['profilePhoto']);
      $query->bindParam(":isAdmin", $data['isAdmin']);
      $query->execute();
      return $query->rowCount();
    }
}

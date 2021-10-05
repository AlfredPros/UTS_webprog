<?php

class CommentModel extends Database
{
    public function getAllComments($NID)
    {
      $queryNews = $this->db->prepare("SELECT UID, commentContent, (SELECT username FROM allUser WHERE allUser.UID=comment.UID) AS username, 
      (SELECT profilePhoto FROM allUser WHERE allUser.UID=comment.UID) AS profilePhoto, DATE_FORMAT(commentDate, '%M %D,  %Y %l:%i %p') commentDate from comment 
       ORDER BY commentDate");
      $queryNews->bindParam(":NIM", $NID);
      $queryNews->execute();
      return $queryNews->fetchAll();
    }
    public function insertCommemt($data)
    {
      $query = $this->db->prepare("INSERT INTO comment(UID, NID, 
                                    commentContent)
      values (:UID, :NID, :commentContent)");
      $query->bindParam(":UID", $data['UID']);
      $query->bindParam(":NID", $data['NID']);
      $query->bindParam(":commentContent", $data['commentContent']);
      $query->execute();
      return $query->rowCount();
    }

    public function hasNotLiked($data)
    {
        $query = $this->db->prepare("SELECT * FROM likedBy WHERE UID=:UID");
        $query->bindParam(":UID", $data['UID']);
        $query->execute();

        if ($query->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function likeBy($data)
    {
        if ($this->hasNotLiked($data)) {
            $query = $this->db->prepare("INSERT INTO likedBy(CID, UID) VALUES (:CID , :UID)");
            $query->bindParam(":CID", $data['CID']);
            $query->bindParam(":UID", $data['UID']);
            
            // Update total likes dalam database
            $queryUpdate = $this->db->prepare("UPDATE comment SET totalLikes=:totalLikes WHERE CID=:CID");
            $updatedLike = $data['totalLikes'] + 1;
            $queryUpdate->bindParam(":totalLikes", $updatedLike);
            $queryUpdate->bindParam(":CID", $data['CID']);
            $queryUpdate->execute();
            return $queryUpdate->rowCount();
        }
    }
}

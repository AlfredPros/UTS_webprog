<?php

class CommentModel extends Database
{
    public function getAllComments($NID)
    {
      $queryNews = $this->db->prepare("SELECT UID, commentContent, (SELECT username FROM alluser WHERE alluser.UID=comment.UID) AS username, 
      (SELECT profilePhoto FROM alluser WHERE alluser.UID=comment.UID) AS profilePhoto, DATE_FORMAT(commentDate, '%M %D,  %Y %l:%i %p (GMT+7)') commentDate,
       CID, totalLikes
       from comment 
       WHERE NID=:NID
       ORDER BY commentDate DESC");
      $queryNews->bindParam(":NID", $NID);
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

    public function hasNotLiked($UID, $CID)
    {
        $query = $this->db->prepare("SELECT * FROM likedby WHERE UID=:UID AND CID=:CID");
        $query->bindParam(":UID", $UID);
        $query->bindParam(":CID", $CID);
        $query->execute();

        if ($query->rowCount() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function activateLikeButton($data)
    {
        if ($this->hasNotLiked($data['UID'], $data['CID'])) {
            $query = $this->db->prepare("INSERT INTO likedby(CID, UID) VALUES (:CID , :UID)");
            $query->bindParam(":CID", $data['CID']);
            $query->bindParam(":UID", $data['UID']);
            $query->execute();
            
            // Update total likes dalam database
            $queryUpdate = $this->db->prepare("UPDATE comment SET totalLikes=:totalLikes WHERE CID=:CID");
            $updatedLike = $data['totalLikes'] + 1;
            $queryUpdate->bindParam(":totalLikes", $updatedLike);
            $queryUpdate->bindParam(":CID", $data['CID']);
            $queryUpdate->execute();
            return $queryUpdate->rowCount();
        } else{
            $query = $this->db->prepare("DELETE FROM likedby WHERE UID=:UID AND CID=:CID");
            $query->bindParam(":CID", $data['CID']);
            $query->bindParam(":UID", $data['UID']);
            $query->execute();

            // Update total likes dalam database
            $queryUpdate = $this->db->prepare("UPDATE comment SET totalLikes=:totalLikes WHERE CID=:CID");
            $updatedLike = $data['totalLikes'] - 1;
            $queryUpdate->bindParam(":totalLikes", $updatedLike);
            $queryUpdate->bindParam(":CID", $data['CID']);
            $queryUpdate->execute();
            return $queryUpdate->rowCount();
        }
    }
}

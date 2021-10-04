<?php

class NewsModel extends Database
{
    public function getAllNews()
    {
      $queryNews = $this->db->prepare("SELECT * from news");
      $queryNews->execute();
      return $queryNews->fetchAll();
    }

    public function getNewsByCategory($category)
    {
      $queryNews = $this->db->prepare("SELECT * from news WHERE newsCategory=:newsCategory");
      $queryNews->bindParam(":newsCategory", $category);
      $queryNews->execute();
      return $queryNews->fetchAll();
    }

    public function insertNews($data)
    {
      $query = $this->db->prepare("INSERT into news(newsTitle, newsCategory, newsThumbnail, 
                                    newsWriter, newsContent)
      values (:newsTitle, :newsCategory, :newsThumbnail, 
                                    :newsWriter, :newsContent)");
      $query->bindParam(":newsTitle", $data['newsTitle']);
      $query->bindParam(":newsCategory", $data['newsCategory']);
      $query->bindParam(":newsThumbnail", $data['newsThumbnail']);
      $query->bindParam(":newsWriter", $data['newsWriter']);
      $query->bindParam(":newsContent", $data['newsContent']);
      $query->execute();
      return $query->rowCount();
    }

    public function deleteNews($NID){
        $query = $this->db->prepare("DELETE FROM news WHERE NID=:NID");
        $query->bindParam(":NID", $NID);
        $query->execute();
        return $query->rowCount();
    }

    public function updateNews($data)
    {
        $query = $this->db->prepare("UPDATE news SET 
        newsTitle=:newsTitle,
        newsCategory=:newsCategory,
        newsThumbnail=:newsThumbnail,
        newsWriter=:newsWriter,
        newsPublicationDate=:newsPublicationDate,
        newsContent=:newsContent
        WHERE NID=:NID
        ");
        $query->bindParam("newsTitle", $data['newsTitle']);
        $query->bindParam("newsCategory", $data['newsCategory']);
        $query->bindParam("newsThumbnail", $data['newsThumbnail']);
        $query->bindParam("newsWriter", $data['newsWriter']);
        $query->bindParam("newsPublicationDate", $data['newsPublicationDate']);
        $query->bindParam("newsContent", $data['newsContent']);

        $query->execute();
        return $query->rowCount();

    }
}
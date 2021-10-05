<?php

class NewsModel extends Database
{
  public function getNews($NID){
    $queryNews = $this->db->prepare("SELECT NID, newsTitle, newsCategory, newsThumbnail,
                                   newsWriter, DATE_FORMAT(newsPublicationDate, '%M %D, %Y %l:%i %p'), newsContent FROM news WHERE NID=:NID");
    $queryNews->bindParam(":NID", $NID);
    $queryNews->execute();
    return $queryNews->fetch();
  }

  public function getAllNews()
  {
    $queryNews = $this->db->prepare("SELECT NID, newsTitle, newsCategory, newsThumbnail,
                                    newsWriter, DATE_FORMAT(newsPublicationDate, '%M %D, %Y'), newsContent FROM news");
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
      newsContent=:newsContent
      WHERE NID=:NID
      ");
      $query->bindParam("NID", $data['NID']);
      $query->bindParam("newsTitle", $data['newsTitle']);
      $query->bindParam("newsCategory", $data['newsCategory']);
      $query->bindParam("newsThumbnail", $data['newsThumbnail']);
      $query->bindParam("newsWriter", $data['newsWriter']);
      $query->bindParam("newsContent", $data['newsContent']);

      $query->execute();
      return $query->rowCount();

  }
}

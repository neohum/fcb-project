<?php
namespace PhpBook\CMS;                                   // Namespace declaration

class Fcb
{
    protected $db;                                       // Holds ref to Database object

    public function __construct(Database $db)
    {
        $this->db = $db;                                 // Add ref to Database object
    }

    // Get individual article
  public function getId(string $userid)
  {

    if (!empty($userid)) {
      $sql = "SELECT userid FROM user WHERE userid = :userid ";
      $arguments['userid'] = $userid;
      return $this->db->runSQL($sql, $arguments)->fetch();
      
    }
    
  }


  public function getPass(string $password)
  {

    if (!empty($password)) {
      $sql = "SELECT password FROM user WHERE password = :password ";
      $arguments['password'] = $password;
      return $this->db->runSQL($sql, $arguments)->fetch();
      
    }
    
  }
    public function insertFcb(string $userid, string $password)
    {
        $sql = "INSERT INTO user (userid, password) VALUES (:userid, :password);";
        $arguments['userid'] = $userid;
        $arguments['password'] = $password;

        return $this->db->runSQL($sql, $arguments)->fetch();
    }

    public function searchSameId(string $userid)
    {
        $sql = "SELECT * FROM user WHERE userid = :userid;";
        $arguments['userid'] = $userid;

        return $this->db->runSQL($sql, $arguments)->fetch();
    }
  


    // Get summaries of articles
    public function getAll(string $service_id)
    {
      $table_name =$service_id;                             // Max articles to return
      $sql = "SELECT * FROM $table_name";
      return $this->db->runSQL($sql)->fetchAll(); // Return data
    }


  

}
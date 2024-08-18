<?php
namespace PhpBook\CMS; 

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;// Namespace declaration
use PhpOffice\PhpSpreadsheet\IOFactory;

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


  public function setClassName(string $className)
  {
    try {
      $sql = "INSERT INTO class (className) VALUES (:className);";
      $arguments['className'] = $className;

      return $this->db->runSQL($sql, $arguments)->fetch();
    } catch (\Exception $e) {
      return $e->getMessage();
    }
  }

  public function insert(int $classname, int $number, string $name)
  {
    try {
      $sql = "INSERT INTO students (classname, number, name) VALUES (:classname, :number, :name);";
      
      $arguments['classname'] = $classname;
      $arguments['number'] = $number;
      $arguments['name'] = $name;

      return $this->db->runSQL($sql, $arguments)->fetch();
    } catch (\Exception $e) {
      return $e->getMessage();
    }

  }

  public function getNumberOfStudent($classname)
  {
    $sql = "SELECT COUNT(*) FROM students WHERE classname = :classname;";
    $arguments['classname'] = $classname;

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
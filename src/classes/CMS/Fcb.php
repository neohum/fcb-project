<?php
namespace PhpBook\CMS; 



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

  public function insert(int $classname, int $studentnumber, string $studentname)
  {
    try {
      $sql = "INSERT INTO student (classname, studentnumber, studentname) VALUES (:classname, :studentnumber, :studentname);";
      
      $arguments['classname'] = $classname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['studentname'] = $studentname;

      return $this->db->runSQL($sql, $arguments)->fetch();
    } catch (\Exception $e) {
      return $e->getMessage();
    }

  }
  public function setSubjectCheck(string $subjectname, $studentnumber, int $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, classname, studentname) VALUES (:subjectname, :studentnumber, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;
      

      return $this->db->runSQL($sql, $arguments)->fetch();
  
  }


    public function setSubject5Check(string $subjectname, $studentnumber, int $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, classname, studentname) VALUES (:subjectname, :studentnumber, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;
      

      return $this->db->runSQL($sql, $arguments)->fetch();
  
  }

    public function setSubject3Check(string $subjectname, $studentnumber, int $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, classname, studentname) VALUES (:subjectname, :studentnumber, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;
      

      return $this->db->runSQL($sql, $arguments)->fetch();
  
  }

    public function setSubjectWriting(string $subjectname, $studentnumber, int $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, classname, studentname) VALUES (:subjectname, :studentnumber, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;
      

      return $this->db->runSQL($sql, $arguments)->fetch();
  
  }

 

  public function login(int $classname, string $studentname)
  {
    $sql = "SELECT * FROM student WHERE classname = :classname AND studentname = :studentname;";
    $arguments['classname'] = $classname;
    $arguments['studentname'] = $studentname;

    return $this->db->runSQL($sql, $arguments)->fetch();
  }


    // Get summaries of articles
    public function getAll(string $service_id)
    {
      $table_name =$service_id;                             // Max articles to return
      $sql = "SELECT * FROM $table_name";
      return $this->db->runSQL($sql)->fetchAll(); // Return data
    }

    public function getClassTotal($classname)
    {
      $sql = "SELECT COUNT(*) FROM student WHERE className = :classname;";
      $arguments['classname'] = $classname;

      return $this->db->runSQL($sql, $arguments)->fetch();
    }
  
    public function getStudentName(int $classname, $studentnumber)
    {
      $sql = "SELECT studentname FROM student WHERE classname = :classname AND studentnumber = :studentnumber;";
      $arguments['classname'] = $classname;
      $arguments['studentnumber'] = $studentnumber;

      return $this->db->runSQL($sql, $arguments)->fetch();
    }

}
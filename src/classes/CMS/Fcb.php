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

  public function insert($classname, $studentnumber, $studentname)
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

  public function getToTeacher($userid)
  {
    $sql = "SELECT classname FROM user WHERE userid = :userid;";
    
    $arguments['userid'] = $userid;

    return $this->db->runSQL($sql, $arguments)->fetch();
  }

  public function setToTeacher($classname, $userid)
  {
    try {
      $sql = "UPDATE user SET classname = :classname WHERE userid = :userid;";
      
      $arguments['classname'] = $classname;
      $arguments['userid'] = $userid;

      return $this->db->runSQL($sql, $arguments)->fetch();
    } catch (\Exception $e) {
      return $e->getMessage();
    }

  }


  public function setSubjectCheck( $subjectname, $studentnumber, $subjectname2, $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, subjectname2, classname, studentname) VALUES (:subjectname, :studentnumber, :subjectname2, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['subjectname2'] = $subjectname2;
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;
      

      return $this->db->runSQL($sql, $arguments)->fetch();
  
  }


    public function setSubject5Check(string $subjectname, $studentnumber, $subjectname2, int $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, subjectname2, classname, studentname) VALUES (:subjectname, :studentnumber, :subjectname2, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['subjectname2'] = $subjectname2;
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;

      

      return $this->db->runSQL($sql, $arguments)->fetch();
  
  }

    public function setSubject3Check(string $subjectname, $studentnumber, $subjectname2, int $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, subjectname2 classname, studentname) VALUES (:subjectname, :studentnumber, :subjectname2, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['subjectname2'] = $subjectname2;
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;
      

      return $this->db->runSQL($sql, $arguments)->fetch();
  
  }

    public function setSubjectWriting(string $subjectname, $studentnumber, $subjectname2, int $classname, $studentname)
  {
  
      $sql = "INSERT INTO subject (subjectname, studentnumber, subjectname2, classname, studentname) VALUES (:subjectname, :studentnumber, :subjectname2, :classname, :studentname);";
      
      $arguments['subjectname'] = $subjectname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['subjectname2'] = $subjectname2;
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
  
    public function getStudentName( $classname, $studentnumber)
    {
      $sql = "SELECT studentname FROM student WHERE classname = :classname AND studentnumber = :studentnumber;";
      $arguments['classname'] = $classname;
      $arguments['studentnumber'] = $studentnumber;

      return $this->db->runSQL($sql, $arguments)->fetch();
    }

    public function getCheckList( $classname, string $studentname)
    {
      $sql = "SELECT subjectname,subjectname2, score, score2, created_at FROM subject WHERE classname = :classname AND studentname = :studentname  ORDER BY created_at DESC LIMIT 10 ; ";
      $arguments['classname'] = $classname;
      $arguments['studentname'] = $studentname;
   

      return $this->db->runSQL($sql, $arguments)->fetchAll();
    }

      public function getSubjectInfo( $classname, $studentnumber, $today)
      {
        $sql = "SELECT * FROM subject WHERE classname = :classname AND studentnumber = :studentnumber AND created_at > :today;";
        $arguments['classname'] = $classname;
        $arguments['studentnumber'] = $studentnumber;
        $arguments['today'] = date("Y-m-d");
  
        return $this->db->runSQL($sql, $arguments)->fetchAll();
      }

      public function getSubjectInfo2( $classname, $studentnumber, $today)
      {
        $sql = "SELECT * FROM subject WHERE classname = :classname AND studentnumber = :studentnumber AND created_at > :today;";
        $arguments['classname'] = $classname;
        $arguments['studentnumber'] = $studentnumber;
        $arguments['today'] = date("Y-m-d");
  
        return $this->db->runSQL($sql, $arguments)->fetchAll();
      }
      
      public function setSubjectCheckBox($score, $studentnumber, $studentname, $created_at)
      {
        $sql = "UPDATE subject SET score = :score WHERE studentnumber = :studentnumber AND studentname = :studentname AND created_at = :created_at;";
        $arguments['score'] = $score;
        $arguments['studentnumber'] = $studentnumber;
        $arguments['studentname'] = $studentname;
        $arguments['created_at'] = $created_at;
  
        return $this->db->runSQL($sql, $arguments)->fetch();
      }

          public function setSubjectCheckBox2($score2, $studentnumber, $studentname, $created_at)
      {
      
        $sql = "UPDATE subject SET score2 = :score2 WHERE studentnumber = :studentnumber AND studentname = :studentname AND created_at = :created_at;";
        $arguments['score2'] = $score2;
        $arguments['studentnumber'] = $studentnumber;
        $arguments['studentname'] = $studentname;
        $arguments['created_at'] = $created_at;
  
        return $this->db->runSQL($sql, $arguments)->fetch();
      }


    



}
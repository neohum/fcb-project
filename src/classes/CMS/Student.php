<?php
namespace PhpBook\CMS; 



class Student
{
    protected $db;                                       // Holds ref to Database object

    public function __construct(Database $db)
    {
        $this->db = $db;                                 // Add ref to Database object
    }

    // Get individual article


  public function getTeacher($userid)
  {
      $sql = "SELECT classname FROM user WHERE userid = :userid ";
      $arguments['userid'] = $userid;
      return $this->db->runSQL($sql, $arguments)->fetchAll();
  }

  public function getStudentAll($classname)
  {
      $sql = "SELECT * FROM student WHERE classname = :classname";
      $arguments['classname'] = $classname;
      return $this->db->runSQL($sql, $arguments)->fetchAll();
  }

  public function insertStudent( $classname,  $studentnumber,  $studentname)
  {
      $sql = "INSERT INTO student (classname, studentnumber, studentname) VALUES (:classname, :studentnumber, :studentname);";
      $arguments['classname'] = $classname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['studentname'] = $studentname;
     

      return $this->db->runSQL($sql, $arguments)->fetch();
  }

  public function updateStudent($id, $classname, $studentnumber, $studentname)
  {
      $sql = "UPDATE student SET classname = :classname, studentnumber = :studentnumber, studentname = :studentname WHERE id = :id;";
      $arguments['classname'] = $classname;
      $arguments['studentnumber'] = $studentnumber;
      $arguments['studentname'] = $studentname;
      $arguments['id'] = $id;

      return $this->db->runSQL($sql, $arguments)->fetch();
  }

  public function getStudentResultAll($studentnumber, $studentname)
  {
      $sql = "SELECT * FROM subject WHERE studentnumber = :studentnumber AND studentname = :studentname";
      $arguments['studentnumber'] = $studentnumber;
      $arguments['studentname'] = $studentname;
      return $this->db->runSQL($sql, $arguments)->fetchAll();
  }

  public function deleteStudent($id)
  {
      $sql = "DELETE FROM student WHERE id = :id;";
      $arguments['id'] = $id;

      return $this->db->runSQL($sql, $arguments)->fetch();
  }



}
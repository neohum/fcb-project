<?php 
namespace PhpBook\CMS;

class Session 
{
  public $userName;
  public $userPw;

  public $studentname;

  public $classname;

  public $studentnumber;

  public $errorForAddClass;

  public function __construct()
  {
    session_start();
    $this->userName = $_SESSION['userName'] ?? null;
    $this->userPw = $_SESSION['userPw'] ?? null;
    $this->studentname = $_SESSION['studentname'] ?? null;
    $this->classname = $_SESSION['classname'] ?? null;
    $this->studentnumber = $_SESSION['studentnumber'] ?? null;
    $this->errorForAddClass = $_SESSION['errorForAddClass'] ?? null;
  }

  public function create($member)
  { 
    session_regenerate_id(true);
    $_SESSION['userName'] = $member['userName'];
    $_SESSION['userPw'] = $member['userPw'];
    
  }

  public function createStudent($member)
  {
    session_regenerate_id(true);
    $_SESSION['studentname'] = $member['studentname'];
    $_SESSION['classname'] = $member['classname'];
    $_SESSION['studentnumber'] = $member['studentnumber'];
    
  }

  public function update($member)
  {
    $this->create($member);
  }

  public function className($member){
    session_regenerate_id(true);
    $_SESSION['className']  = $member['className'];
  }

  public function errorForAddClass($member){
    session_regenerate_id(true);
    $_SESSION['errorForAddClass'] = $member;
  }

  public function delete()
  {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 2400,
        $params['path'], $params['domain'],
        $params['secure'], $params['httponly']
      );
    }
    session_destroy();
  }
}
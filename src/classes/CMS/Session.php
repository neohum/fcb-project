<?php 
namespace PhpBook\CMS;

class Session 
{
  public $userName;
  public $userPw;

  public function __construct()
  {
    session_start();
    $this->userName = $_SESSION['userName'] ?? null;
    $this->userPw = $_SESSION['userPw'] ?? null;
  }

  public function create($member)
  { 
    session_regenerate_id(true);
    $_SESSION['userName'] = $member['userName'];
    $_SESSION['userPw'] = $member['userPw'];
    
  }

  public function update($member)
  {
    $this->create($member);
  }

  public function className($member){
    session_regenerate_id(true);
    $_SESSION['className']  = $member['className'];
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
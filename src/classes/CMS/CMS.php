<?php
namespace PhpBook\CMS;                                   // Declare namespace

class CMS
{
    protected $db               = null;                         // Stores reference to Database object
                         // Stores reference to Like object
    protected $fcb              = null;                         // Stores reference to Fcb <object data="" type=""></object>
    
    protected $session          = null;

    protected $student          = null;
  // Stores reference to Session object


    public function __construct($dsn, $username, $password)
    {
        $this->db = new Database($dsn, $username, $password); // Create Database object
    }



     public function getFcb()
    {
        if ($this->fcb === null) {         // If $repair property null
            $this->fcb = new Fcb($this->db); // Create repair object
        }
        return $this->fcb;                 // Return repair object
    }

    public function getSession()
    {
        if ($this->session === null) {         // If $repair property null
            $this->session = new Session(); // Create repair object
        }
        return $this->session;                 // Return repair object
    }

    public function getStudent()
    {
        if ($this->student === null) {         // If $repair property null
            $this->student = new Student($this->db); // Create repair object
        }
        return $this->student;                 // Return repair object
    }


}
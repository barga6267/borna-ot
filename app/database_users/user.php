<?php
session_start();
include_once 'db.php';
//========================================================login=logout==============================
class user extends db
{
    private $tb = 'user_tbl';
    private $username;
    private $password;
    private $res;
    
    public function login_user($data)
    {

        $this->settbl($this->tb);
        $this->username = $data['username'];
        $this->password = $data['password'];

        $this->res = $this->search_data('username', $this->username);

        if ($this->password == $this->res->password) {

            $_SESSION['lastname'] = $this->res->lastname;
            header("location:dashbord.php?contact=index");
        }

    }
}
//=========================================================end======================================

<?php
class User{
    public $eamil;
    private $password;
    public function __construct($eamil,$password)
    {
        $this->eamil=$eamil;
        $this->password=$password;
    }

    public function login(){
        echo 'User :'.$this->eamil.' has logged in';
}
}

$UserOne=new User('jesser','123');

$UserOne->login();
echo $UserOne-> 






?>






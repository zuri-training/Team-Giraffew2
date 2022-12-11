<?php
class formController extends UserAuth{
	private $fullname;
	private $email;
	private $password;
	private $confirmPassword;

    public function __construct(){
        parent::__construct();
    }
	
	public function handleForm(){
		switch(true) {
            case isset($_POST['register']):
                //code to register students 
                $this->fullname = $_POST['fullname'];
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->confirmPassword = $_POST['conpass'];
                $this->register($this->fullname, $this->email, $this->password, $this->confirmPassword);
                break;
            case isset($_POST['login']):
                ////code to login students 
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->login($this->email, $this->password);
                break;
            case isset($_POST['logout']):
                //code to logout students 
                $this->email = $_POST['email'];
                $this->logout($this->email);
                break;
            case isset($_POST['reset']):
                //code for updating password
                $this->email = $_POST['email'];
                $this->password = $_POST['password'];
                $this->updateUser($this->email, $this->password);
                break;
            default:
                echo 'No form was submitted';
                break;
        }
    }
	}
?>
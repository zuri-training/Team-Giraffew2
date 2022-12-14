<?php
class formController extends UserAuth{
	private $fullname;
	private $email;
	private $password;
	private $confirmPassword;
	private $nameoffile;
	private $upload;
	private $filesizes;
	private $tmp;
	private $tmp2;
	private $pngfilesize;
	private $pngfilename;
	
	
    public function __construct(){
        parent::__construct();
    }
	
	public function handleForm(){
		switch(true) {
            case isset($_POST['register']):
                //code to register users 
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
			case isset($_POST['upload']):
                //code for updating password
                $this->nameoffile = $_POST['nameoffile'];
                $this->upload = $_FILES['zipFile']['name'];
				$this->filesizes = $_FILES['zipFile']['size'];
				$this->tmp = $_FILES['zipFile']['tmp_name'];
				$this->pngfilename = $_FILES['pngFile']['name'];
				$this->tmp2 = $_FILES['pngFile']['tmp_name'];
				$this->pngfilesize = $_FILES['pngFile']['size'];
                $this->uploadFile($this->nameoffile, $this->upload, $this->filesizes, $this->tmp, $this->pngfilename, $this->tmp2, $this->pngfilesize);
                break;
			case isset($_POST['all']):
                //code for getting all users
                $this->getAllCards();
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

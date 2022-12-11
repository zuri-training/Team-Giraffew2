<?php
include_once 'Dbh.php';
session_start();

class UserAuth extends Dbh{
    private $db;

    public function __construct(){
        $this->db = new Dbh();
    }

    public function register($fullname, $email, $password, $confirmPassword){
        $conn = $this->db->connect();
        if($this->confirmPasswordMatch($password, $confirmPassword)){
			//$check = "SELECT * FROM students WHERE email = '$email'";
			//$result = $conn->query($check);
			if(!$this->checkEmailExist($email)){
            $sql = "INSERT INTO users (`fullname`, `email`, `password`) VALUES ('$fullname','$email', '$password')";
            if($conn->query($sql)){
               header("Location:./login.php?regsuc=1");
            } else {
                echo "Opps". $conn->error;
            }
			}else{
				header("Location:./signup.php?emailexist=1");
			}
        } else{
			header("Location:./signup.php?password=1");
		}       
    }

    public function login($email, $password){
        $conn = $this->db->connect();
        $sql = "SELECT * FROM users WHERE email='$email' AND `password`='$password'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $_SESSION['email'] = $email;
			$arr = mysqli_fetch_array($result);			
			$_SESSION['username'] = $arr['fullname'];
            header("Location:index.php");
        } else {
            header("Location:./login.php?message=1");
        }
    }
	
	public function checkEmailExist($email){
		$conn = $this->db->connect();
		$sql = "SELECT * FROM users WHERE email = '$email'";
		$result = $conn->query($sql);
		if($result->num_rows > 0){
			return true;
		}else{
			return false;
		}
	}

    public function logout($username){
        session_start();
        session_destroy();
        header('Location: index.php');
    }

    public function confirmPasswordMatch($password, $confirmPassword){
        if($password === $confirmPassword){
            return true;
        } else {
            return false;
        }
    }
}
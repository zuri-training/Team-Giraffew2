<?php
session_start();
include_once 'Dbh.php';

class UserAuth extends Dbh{
    private $db;

    public function __construct(){
        $this->db = new Dbh();
    }

    public function register($fullname, $email, $password, $confirmPassword){
        $conn = $this->db->connect();
        if($this->confirmPasswordMatch($password, $confirmPassword)){
			if(!$this->checkEmailExist($email)){
            $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname','$email', '$password')";
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
			$_SESSION['email'] = $arr['email'];
			$_SESSION['fullname'] = $arr['fullname'];
            header("Location:profile.php");
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
        header('Location: ./login.php');
    }

    public function confirmPasswordMatch($password, $confirmPassword){
        if($password === $confirmPassword){
            return true;
        } else {
            return false;
        }
    }
	
	public function uploadFile($nameoffile, $upload, $filesize, $tmp, $pngfilename, $tmp2, $pngfilesize){
		$conn = $this->db->connect();

    // destination of the file on the server
    $destination = 'uploads/' . $upload;
	$destination2 = 'uploads/' . $pngfilename;
    // get the file extension
    $extension = pathinfo($upload, PATHINFO_EXTENSION);
	$extension2 = pathinfo($pngfilename, PATHINFO_EXTENSION);

    if(!in_array($extension, ['zip'])) {
		header("Location:./upload.php?zip=1");
        echo "You file extension must be .zip format";
    }elseif(!in_array($extension2, ['png'])){
		header("Location:./upload.php?png=1");
	}elseif ($filesize > 1000000) { // file shouldn't be larger than 1Megabyte
		header("Location:./upload.php?size1=1");
    }elseif ($pngfilesize > 1000000) { // file shouldn't be larger than 1Megabyte
        header("Location:./upload.php?size2=1");
    }else {
        // move the uploaded (temporary) file to the specified destination
        if(move_uploaded_file($tmp, $destination) && move_uploaded_file($tmp2, $destination2)) {
            $sql = "INSERT INTO files(file_name,name,zipfilesize,pngfilename,pngfilesize) VALUES ('$upload','$nameoffile','$filesize','$pngfilename','$pngfilesize')";
            if ($conn->query($sql)) {
                header("Location:./upload.php?success=1");
            }
        }else {
            header("Location:./upload.php?error=1");
        }
    }
	}
	
	public function getAllCards(){
        $conn = $this->db->connect();
        $sql = "SELECT * FROM files";
        $result = $conn->query($sql);
		if(isset($_SESSION['email'])){
      ?>
	<html lang='en'>
  	<head>
    <meta charset='UTF-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='preconnect' href='https://fonts.googleapis.com' />
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
    <link
      href='https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&family=Merriweather:wght@300;400;700;900&family=Montserrat:wght@400;500;700&display=swap'
      rel='stylesheet'
    />
    <link rel='stylesheet' href='css/favorite.css' />
    <title>Library Page</title>
  </head>
  <body>
    <header class='header'>
		<h1 class='logo'><a href='index.php'>Cardex</a></h1>
    </header>
    <div class='wrapper'>
      <aside class='aside'>
        <div class='navs'>
          <a href='index.php' class='links'
            ><img src='img/Huge-icon.png' class='icon' alt='' />Home</a
          >

          <a href='saved.php' class='links'
            ><img src='img/Vector0.png' class='icon' alt='' />Saved</a
          >

          <a href='#' class='links active'
            ><img src='img/Vector11.png' class='icon' alt='' />Favorite</a
          >
			<form action='action.php' method='POST' class='form' style='text-align: center; margin-top: 5%'>
        <button class='btn btn-primary' name='all' style='background-color: transparent; border: none; color: white;'>
        Library
       </button>
     </form>
         <form action='action.php' method='POST'>
        <button type='submit' name='logout' style='background-color: transparent; border: none; color: white;'><img
              src='img/Vector111.png'
              class='icon'
              alt=''
            />Logout</button>
     </form>
        </div>
      </aside>
      <main class='main'>
        <div class='container'>
          <h1>Library Page</h1><div class='gallery'>
<?php
			if($result->num_rows > 0){
			$count =0;
            while($data = mysqli_fetch_assoc($result)){
 ?>
            <div class='card'>
              <figure class='gallery-item'>
                <img src='./uploads/<?php echo $data['pngfilename'];?>' alt='' />
              </figure>
              <p><a href="uploads/<?php echo $data['file_name'];?>"><img src='img/Group2.png' alt='' /></a> | <img src="img/like.png">| <img src="img/dislike.png">| <a href="comment.php?id=<?php echo $data['file_id'];?>"><img src="img/comment.png"></a></p>
              <p><?php echo $data['name'];?></p>
			  </div>
<?php
			}
				}
?>
</div></div>
      </main>
    </div>
  </body>
</html>
<?php		//$this->allUsers();
		
	}
		
	}
	
}
?>

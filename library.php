<?php
session_start();
include_once 'classes/Dbh.php';
$sql = "SELECT * FROM files";
$result = $db->query($sql);
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
		<div class="profile">
        <img src="img/Component2.png" class="img img-bell" alt="" />
        <a href="profile.php"><p class="name"><?php echo "Welcome " . $_SESSION['fullname']; ?></p></a>
        <img src="img/Vector.png" class="img img-icon" alt="" />
      </div>
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

          <a href='#' class='links'
            ><img src='img/Vector11.png' class='icon' alt='' />Favorite</a
          >
		<a href="library.php" class="links active"
            ><img
              src="img/Vector11.png"
              class="icon"
              alt=""
            />Library</a
          >
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
				$id = $data['file_id'];
				$sql2 = "SELECT * FROM comments WHERE card_id = $id";
				$query2 = $db->query($sql2);
				$num = mysqli_num_rows($query2);
 ?>
            <div class='card'>
              <figure class='gallery-item'>
                <img src='img/<?php echo $data['pngfilename'];?>' alt='' />
              </figure>
              <p><a href="uploads/<?php echo $data['file_name'];?>"><img src='img/Group2.png' alt='' /></a> | <img src="img/like.png">| <img src="img/dislike.png">| <a href="comment.php?id=<?php echo $id;?>" style="text-decoration: none;"><img src="img/comment.png"><font color="white"><?php if($num > 0) { echo " (" .$num. ")"; }?></font></a></p>
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
		
	}else{
	header("Location:login.php?acc=1");
}
?>

<?php
session_start();
include_once 'classes/Dbh.php';
if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&family=Merriweather:wght@300;400;700;900&family=Montserrat:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/favorite.css" />
    <title>Library Page</title>
  </head>
  <body>
    <header class="header">
		<h1 class="logo"><a href="index.php">Cardex</a></h1>
      <div class="profile">
        <img src="img/Component2.png" class="img img-bell" alt="" />
        <a href="profile.php"><p class="name"><?php echo "Welcome " . $_SESSION['fullname']; ?></p></a>
        <img src="img/Vector.png" class="img img-icon" alt="" />
      </div>
    </header>
    <div class="wrapper">
      <aside class="aside">
        <div class="navs">
          <a href="index.php" class="links"
            ><img src="img/Huge-icon.png" class="icon" alt="" />Home</a
          >

          <a href="saved.php" class="links"
            ><img src="img/Vector0.png" class="icon" alt="" />Saved</a
          >

          <a href="#" class="links active"
            ><img src="img/Vector11.png" class="icon" alt="" />Favorite</a
          >
			<form action="action.php" method="POST" class="form" style="text-align: center; margin-top: 5%">
        <button class="btn btn-primary" name="all" style="background-color: transparent; border: none; color: white;">
        Library
       </button>
     </form>
         <form action="action.php" method="POST">
        <button type="submit" name="logout" style="background-color: transparent; border: none; color: white;"><img
              src="img/Vector111.png"
              class="icon"
              alt=""
            />Logout</button>
     </form>
        </div>
      </aside>
      <main class="main">
        <div class="container">
          <h1>Library Page</h1>
          <div class="gallery">
            <div class="card">
              <figure class="gallery-item">
                <img src="img/d2.png" alt="" />
              </figure>
              <img src="img/love.png" alt="" />
              <p>Master card</p>
			  </div>
            </div>
        </div>
      </main>
    </div>
  </body>
</html>
<?php
}else{
	header("Location:login.php?acc=1");
}
?>
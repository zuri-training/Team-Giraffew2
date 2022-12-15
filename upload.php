<?php
session_start();
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
    <link rel="stylesheet" href="css/profile.css" />
    <title>Upload File Page</title>
  </head>
  <body>
    <header class="header">
      <h1 class="logo"><a href="index.php">Cardex</a></h1>
      <div class="profile">
        <img
          src="img/Component2.png"
          class="img img-bell"
          alt=""
        />
        <a href="profile.php"><p class="name"><?php echo "Welcome " . $_SESSION['fullname']; ?></p></a>
        <img src="img/Vector.png" class="img img-icon" alt="" />
      </div>
    </header>
    <div class="wrapper">
      <aside class="aside">
        <div class="navs">
          <a href="index.php" class="links"
            ><img
              src="img/Huge-icon.png"
              class="icon"
              alt=""
            />Home</a
          >

          <a href="saved.php" class="links"
            ><img
              src="img/Vector0.png"
              class="icon"
              alt=""
            />Saved</a
          >

          <a href="favorite.php" class="links"
            ><img
              src="img/Vector11.png"
              class="icon"
              alt=""
            />Favorite</a
          >
			<form action="action.php" method="POST" class="form" style="text-align: center; margin-top: 5%">
        <button class="btn btn-primary" name="all" style="background-color: transparent; border: none; color: white;">
        Library
       </button>
     </form>
	<form action="action.php" method="POST">
        <button type="submit" name="logout" style="background-color: transparent; border: none; color: white;" class="links"><img
              src="img/Vector111.png"
              class="icon"
              alt=""
            />Logout</button>
     </form>
        </div>
      </aside>
      <main class="main">
        <div class="container">
		  <h1 style="color: white;">Upload Credit Card Sample</h1><br/>
			<div align="center">
			<form action="action.php" enctype="multipart/form-data" method="post">
				<?php if(isset($_GET['success']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Uploading Successfull</p>";
				?>
				<?php if(isset($_GET['zip']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Please Upload a Zip file</p>";
				?>
				<?php if(isset($_GET['png']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Please Upload a Png file</p>";
				?>
				<?php if(isset($_GET['file1']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Zip file must be either 10MB or Less</p>";
				?>
				<?php if(isset($_GET['file2']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:red'>Png file must be either 10MB or Less</p>";
				?>
				<?php if(isset($_GET['error']) )
                echo "<p class='alert alert-danger text-center' align='center' style='color:green'>Uploading Failed</p>";
            	?>
				<div class="relative">
              
					<table style="color: white;" height="200px" width="400px" border="1">
						<tr style="border: 0px none;">
							<td>Name of File</td><td><input type="text" name="nameoffile" required></td>
						</tr>
						<tr style="border: 0px none;"><td>Select File to Upload(PNG)</td><td><input type="file" name="pngFile" accept="png/*" required></td></tr>
						<tr style="border: 0px none;"><td>Select File to Upload(ZIP)</td><td><input type="file" name="zipFile" accept="zip/*" required></td></tr>
						<tr><td></td><td align="center"><input type="submit" name="upload" value="Upload"/></td></tr>
					</table>
            </div>
			
		  	</form>
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

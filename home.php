<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1 style=" font-weight: 600; font-style: Arial, son-serf; align-items: center;">Hello, <?php echo $_SESSION['name']; ?></h1>
     <p style="align-items:center;"> Welcome to our Boutique, we help you save your money: <br></p>
     <p style="align-items:center;">click the button below to shop!</p>
     <button style ="cursor:pointer; border-radius:2% ; 
     background-color: goldenrod; color: black;"> <a href="index.html">Fashion Moven Boutique</button>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>
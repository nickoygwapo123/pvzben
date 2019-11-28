<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
  <html>
    <head>
	    <title>Home</title>
	    <link rel="stylesheet" type="text/css" href="css/index.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
        body{
          background-image:url(wall1.jpg);
        }
        .topnav {
    overflow: hidden;
    background-color: #abababa1;
    height: 50px;
}

.source{
  height:200px;
  width:200px;
}
      </style>
    </head>
    <body>
    
        </div>
        <div class="topnav" id="myTopnav">
          <a href="index.php" >Home</a>
          <div class="dropdown">
          <button class="dropbtn">Database 
            <i class="fa fa-caret-down"></i>
          </button>
            <div class="dropdown-content">
              <a href="add.html">Join as Player</a>
              <a href="add2.html">Join as Plant</a>
              <a href="#"></a>
            </div>
        </div> 
        <a href="index3.php">View Player</a>
        <a href="index4.php">View Plant Player</a>
          <a href="contact.php">Contact</a>
        <li style="float:right"><?php  if (isset($_SESSION['username'])) : ?><a class="active" href="index.php?logout='1'">Logout</a><?php endif ?>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

        <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
          <div class="error success" >
            <h3>
              <?php 
                echo $_SESSION['success']; 
                unset($_SESSION['success']);
              ?>
            </h3>
          </div>
        <?php endif ?>
    	

        <script>
          function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
              x.className += " responsive";
            } else {
              x.className = "topnav";
            }
          }
      </script>
      <div class="container">
      <?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = $dbConn->query("SELECT * FROM tbl_plant ORDER BY studentid DESC");
?>

<html>
<head>	
<title>Homepage</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	body {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 30px;	
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
    font-family: 'Staatliches', cursive;
    text-align: center;
}
a{
	font-family: 'Staatliches', cursive;
}
</style>
</head>

<body>

	
<a href="add2.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Plant ID</td>
		<td>Username</td>
		<td>Gender</td>
		<td>Birth Date</td>
		<td>Address</td>
		<td>Contact</td>
		<td>Update</td>
	</tr>
	<?php 	
	while($row = $result->fetch(PDO::FETCH_ASSOC)) { 		
		echo "<tr>";
		echo "<td>".$row['fname']."</td>";
		echo "<td>".$row['lname']."</td>";
		echo "<td>".$row['gender']."</td>";	
		echo "<td>".$row['birthdate']."</td>";	
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['contact']."</td>";
		echo "<td><a href=\"edit.php?id=$row[studentid]\">Edit</a> | <a href=\"delete.php?id=$row[studentid]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>

        </div>


    

		
</body>
</html>
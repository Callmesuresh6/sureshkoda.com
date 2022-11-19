<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'institute_management';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM join_now ORDER BY Student_Name DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>IDM Deatils</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color:yellow;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
        tr{
            background-color: #01E5FE;
            font-color:blue;
			border: 1px solid black;
        }

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

        tr{
			background-color: white;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
            
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body background="assets/images/team/back.jpg">
	<section>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h1>Student Details</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
            <font color="red">
			<tr>
				<th>Student Name</th>
				<th>Course Name</th>
				<th>Branches</th>
				<th>Email Id</th>
			</tr>
    </font>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['Student_Name'];?></td>
				<td><?php echo $rows['Enter_your_course'];?></td>
				<td><?php echo $rows['Enter_your_branch'];?></td>
				<td><?php echo $rows['Email_Id'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>


	  <br>
      <br>
      <br>
      <br>
      <br>
      <br>
<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'institute_management';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = " SELECT * FROM register ORDER BY Enter_your_Name DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>School</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="my-nav">
            <div class="container">
                <div class="row">
                    <div class="nav-items">
                        <div class="menu-toggle">
                            <div class="menu-hamburger"></div>
                        </div>
                        <div class="logo">
                            <img src="assets/images/go-1">
                        </div>
                        <div class="menu-items">
                            <div class="menu">
                                <ul>
                                    <li><a href="index1.html">Home</a></li>
                                    <!-- <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="blog.html">Branches</a></li>
                                    <li><a href="contact-us.php">Join Now</a></li>
                                    <li><a href="adminlogin.html">Admin login </a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>

<head>
	<meta charset="UTF-8">
	<title>IDM Deatils</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color:yellow;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}
        tr{
            background-color: #01E5FE;
            font-color:blue;
			border: 1px solid black;
        }

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

        tr{
			background-color: white;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
            
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body background="assets/images/team/back.jpg">
	<section>
		<h1>Registration Members Details</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
            <font color="red">
			<tr>
				<th>User Name</th>
				<th>Phone Number</th>
				<th>Email Id</th>
			</tr>

			
    </font>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['Enter_your_Name'];?></td>
				<td><?php echo $rows['Enter_your_phone_number'];?></td>
				<td><?php echo $rows['Email_Id'];?></td>
			</tr>
			<?php
				}
			?>
		</table>

		<style>
          .pushable {
            background: hsl(400deg 100% 32%);
            border-radius: 12px;
            border: none;
            padding: 0;
            cursor: pointer;
            outline-offset: 4px;
          }
          .front {
            display: block;
            padding: 12px 25px;
            border-radius: 12px;
            font-size: 1.25rem;
            background: rgb(200, 400, 4);
            color: rgb(644, 233, 12);
            transform: translateY(-4px);
          }
        
          .pushable:active .front {
            transform: translateY(-2px);
          }
        </style>
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="pushable">
          <span class="front">
          <a href="http://localhost/institute_management/demo.html">Back</a>
          </span>
        </button>
                     
	</section>
</body>
<br> <br> <br>

</html>


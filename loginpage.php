<DOCTYPE html>
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="institute_management";
    try{
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        echo("successful in connnection");
    }catch(Mysql__Exception $ex){
        echo("error in connection");
    }
    if(isset($_POST['create'])){
        $uname=$_POST['uname'];
        $fname=$_POST['fname'];
        $mname=$_POST['mname'];
        $loginpage_query="INSERT INTO `register`(`Enter_your_Name`, `Enter_your_phone_number`, `Email_Id`) 
        VALUES ('$uname','$fname','$mname')";
        try{
            $loginpage_result=mysqli_query($conn,$loginpage_query);
            if($loginpage_query)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    header("Location:loginpage.php");
                    exit;
                }else
                {
                    echo("error in loginpage");
                }
            }
        }catch(Exception $ex){
            echo("error".$ex->getMessage());
        }
        }
?>
<html>
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

<body background="assets/images/team/jaava4.jpg" style="background-repeat: no-repeat;background-size: 100% 100%">

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
                                    <!-- <li><a href="index.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="blog.html">Branches</a></li>
                                    <li><a href="contact-us.php">JOIN Now</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>


    <section class="abt-01">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-wrapper">
                           <h3>Register</h3>
                            <ol>
                                <li>REGISTER<i class="far fa-angle-double-right"></i></li>
                                <li>GO TO HOME</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <style>
            <body>
            {
                background-image:url('IMG-20220310-WA0008.jpg');
                background-repeat:no-repeat;
                background-attachment:fixed;
                background-size:100% 100%;
            }
            </style>
            </head>
            <form action="" method="post">
                <br><br>
                <!-- <h1><center><p style="color:Black">INSTITUTE MANAGEMENT</p></h1> -->
               <h2><center><b><p style="color:white">Register</p></b></h2>
                

                <div class="container">
                <div class="row">
                <div class="col-sm-3">
                    <hr class="mb-0">
                    <label for="uname"><b><p style="color:white">Enter your Name</p></b></label>
                    <input class="form-control" type="text" name="uname" required><br>
                    <label for="fname"><b><p style="color:white">Enter your phone number</p></b></label>
                    <input class="form-control" type="number" name="fname" ><br>
                    <label for="mname"><b><p style="color:white">Email Id</p></b></label>
                    <input class="form-control" type="text" name="mname"onkeyup="this.value = this.value.lowerCase();" required><br>
                    <center><input class="btn btn-primary" type="submit" name="create" value="submit" onclick="mess()" required/>

                    <style>
.button {
  background-color: #4CAF50; 
  border: none;
  color: yellow;
  font-color: #ffc107;
  padding: 7px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 0.25rem;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}

.button2 {background-color: #007bff;} /* Blue */

</style>


<button class="button button2"><a href="index1.html">Enter</a> <i class="fa fa-home"></i></button>

                    
                    
                  
                        <!-- <br> <button reruired/><a href="index1.html">Click into enter the Home   </a ></button> -->
                   
           


        </hr>
        </div>
        </div>
        <script type="text/javascript>
           function mess()
           {
               alert("your record is succesfully saved");

           }
        </script>
        </form>
                   </body>
        </html>
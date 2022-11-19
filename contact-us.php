<DOCTYPE html>
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="institute_management";
    try{
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        echo("successful in connnection");
    }catch(Mysql_isql_Exception $ex){
        echo("error in connection");
    }
    if(isset($_POST['create'])){
        $uname=$_POST['uname'];
        $fname=$_POST['fname'];
        $gname=$_POST['gname'];
        $mname=$_POST['mname'];
        
       
        $loginpage_query="INSERT INTO `join_now`(`Student_Name`, `Enter_your_course`, `Enter_your_branch`, `Email_Id`) 
        VALUES ('$uname','$fname','$gname','$mname')";
        try{
            $loginpage_result=mysqli_query($conn,$loginpage_query);
            if($loginpage_query)
            {
                if(mysqli_affected_rows($conn)>0)
                {
                    header("Location:contact-us.php");
                    exit;
                }else
                {
                    echo("error in register");
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
                                    <li><a href="index1.html">Home</a></li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="blog.html">Branches</a></li>
                                    <!-- <li><a href="contact-us.php"></a></li> -->
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
                           <a href="blog.html"><h3>Home</h3></a>
                            <ol>
                                <li>Join Now<i class="far fa-angle-double-right"></i></li>
                                <a href="index1.html"><li>Pay Now</li></a>
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
                <h2><center><p style="color:white"><b>Join Now</b></p></h2>
                

                <div class="container" >
                <div class="row">
                <div class="col-sm-3">
                    <hr class="mb-0">
                    <label for="uname"><b><center><p style="color:white">Student Name</p></b></label>
                    <input class="form-control" type="text" name="uname" required><br>

                    <label for="fname"><b><p style="color:white">Select Course</b></label>
                    <input list="browsers" name="fname" id="browser" class="form-control">
        <datalist id="browsers">
                       <option value="Java">
                       <option value="Python">
                       <option value="Adobe Photoshop">
                       <option value="HTML">
                       <option value="PHP">
                       <option value="C lang">
                       <option value="CSS">
                       <option value="Data Structure">
                       <option value="Hardware Networks">
        </datalist><br>

                    <label for="gname"><b><center><p style="color:white">Select Branch</p></b></label>
                    <input list="brows" name="gname" id="mj" class="form-control">
        <datalist id="brows">
                       <option value="MVP DOUBLE ROAD">
                       <option value="MIDHILAPURE COLONY">
                       <option value="SUBHADRA COMPLEX">
                       <option value="GAJUWAKA">
                       <option value="NAD">
                       <option value="MARIKAVALASA">
        </datalist><br>
        <center>

                   <label for="mname"><b><p style="color:white">Email Id</p></b></label>
                    <input class="form-control" type="text" name="mname" ><br>

                    <input class="btn btn-primary" type="submit" name="create" value="submit" onclick="mess)"><br>

                    <br><h2><b><font color="red"> Note </font></b></h2>
                    <br><p><b><font color="white">Enter the above details before payment</font></b></p>
                    
                   <!-- <br><img src="https://img.88icon.com/download/jpg/202001/29821d51f121ac097dc6c3a3a16f3050.jpg!88bg" jsaction="load:XAeZkd;" jsname="HiaYvf" class="n3VNCb KAlRDb" alt="付款图标图标免费下载_付款图标矢量图标-88ICON" data-noaft="1" style="width: 200px; height: 200px; margin: 0px;"></a>-->
                    <h1><b><a href="payment.html"><font color="YELLOW">PAY NOW</font></b></h1>
        </center>
                 
                   
                  


                   
           


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
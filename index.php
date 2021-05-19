<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Bootstrap CSS -->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
              crossorigin="anonymous">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/styled.css">
        <title>supersenior</title>
    </head>
    <body>
        <!-- Start Nagigation -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-success pl-5 fixed-top">
            <a href="index.html" class="navbar-brand">supersenior</a>
            <span class="navbar-text">Enjoy chating</span>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-hover="dropdown" data-target="#myMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="myMenu">
                <ul class="navbar-nav pl-5 custom-nav">
                    <li class="nav-item"> <a href="signin" class="nav-link">Chat</a></li>
                    <li class="nav-item"> <a href="#Contact" class="nav-link">contact</a></li>
                    <!--li class="nav-item"><a href="#learn" class="nav-link">Learn</a></li-->
                    <!-- Example single danger button -->
                    <style>
                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }

                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #f1f1f1;
                            min-width: 160px;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                        }

                        .dropdown-content a {
                            color: black;
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;}
                        

                        .dropdown-content a:hover {background-color: #4BB543;}

                        .dropdown:hover .dropdown-content {display: block;}

                        .dropdown:hover .dropbtn {background-color: #3e8e41;}</style>
                    <!--div class="dropdown" style="margin-left:50px">
                        <!--button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Learn
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Competative programming</a>
                            <a class="nav-item" href="#">Project Work</a>
                        </div>
                    </div--> 
                    <!--div class="dropdown" style="margin-left:15px">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Daily Dose
                        </button>
                        <div class="dropdown-content">
                            <a href="#">Beginner level</a>
                            <a class="nav-item" href="#">Medium Level</a>
                            <a class="nav-item" href="#">Advance Level</a>
                        </div>
                    </div--> 
                    <!--div class="dropdown" style="margin-left:15px">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            Help Me
                        </button>
                        <div class="dropdown-content">
                            <a href="#">On Project</a>
                            <a class="nav-item" href="#">Programming Question</a>
                            <a class="nav-item" href="#">Contact</a>
                        </div>
                    </div--> 

                </ul>
            </div>
        </nav>
        <style>
                    body {font-family: Arial, Helvetica, sans-serif;}

                    /* Full-width input fields */
                    input[type=text], input[type=password] {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        box-sizing: border-box;
                    }
                    input[type=email], input[type=email] {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        box-sizing: border-box;
                    }

                    /* Set a style for all buttons */
                    button {
                        background-color: #4CAF50;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        cursor: pointer;
                        width: 100%;
                    }

                    button:hover {
                        opacity: 0.8;
                    }

                    /* Extra styles for the cancel button */
                    .cancelbtn {
                        width: auto;
                        padding: 10px 18px;
                        background-color: #f44336;
                    }

                    /* Center the image and position the close button */

                    .container {
                        padding: 16px;
                    }

                    span.psw {
                        float: right;
                        padding-top: 16px;
                    }

                    /* The Modal (background) */
                    .modal {
                        display: none; /* Hidden by default */
                        position: fixed; /* Stay in place */
                        z-index: 1; /* Sit on top */
                        left: 0;
                        top: 0;
                        width: 100%; /* Full width */
                        height: 100%; /* Full height */
                        overflow: auto; /* Enable scroll if needed */
                        background-color: rgb(0,0,0); /* Fallback color */
                        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
                        padding-top: 60px;
                    }

                    /* Modal Content/Box */
                    .modal-content {
                        background-color: #fefefe;
                        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                        border: 1px solid #888;
                        width: 100%; /* Could be more or less, depending on screen size */
                    }

                    /* The Close Button (x) */
                    .close {
                        margin-top:80px;
                        position: absolute;
                        right: 25px;
                        top: 0;
                        color: #000;
                        font-size: 35px;
                        font-weight: bold;
                    }

                    .close:hover,
                    .close:focus {
                        color: red;
                        cursor: pointer;
                    }

                    /* Add Zoom Animation */
                    .animate {
                        -webkit-animation: animatezoom 0.6s;
                        animation: animatezoom 0.6s
                    }

                    @-webkit-keyframes animatezoom {
                        from {-webkit-transform: scale(0)} 
                        to {-webkit-transform: scale(1)}
                    }

                    @keyframes animatezoom {
                        from {transform: scale(0)} 
                        to {transform: scale(1)}
                    }

                    /* Change styles for span and cancel button on extra small screens */
                    @media screen and (max-width: 300px) {
                        span.psw {
                            display: block;
                            float: none;
                        }
                        .cancelbtn {
                            width: 100%;
                        }
                    }
                </style>
        <!-- Start Header Jumbotron-->
        <header class="jumbotron back-image" style="background-image: url(images/back.jpg);">
            <div class="text-center" style="margin-top: 120px;">
                <!--h1 class="text-uppercase text-success font-weight-bold">Welcome to lnctportal</h1>
                <p class="font-italic font-weight-bold st">Join->Learn->Implement</p-->
                <!--a href="log in.html" class="btn btn-outline-success mr-4">Log In</a-->
                <button class="btn btn-success mr-4" onclick="document.getElementById('id01').style.display = 'block'" style="width:auto;">Chat</button>
                <div id="id01" class="modal">

                    <form class="modal-content animate" action="signin.php" method="post">
                        <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display = 'none'" class="close" title="Close Modal">&times;</span>
                        </div>

                        <div class="container" style="margin-top:70px">
                            <!--label for="email" style="margin-top:75px"><b>user-id</b></label-->
                            <input type="email" placeholder="Enter E-mail" name="email" required>

                            <!--label for="psw"><b>Password</b></label-->
                            <input type="password" placeholder="Enter Password" name="psw" required>

                            <button type="submit">Login</button>
                            <label style="margin-right:20px">
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            <a href="users_signup.php" class="btn-success" type="button" style="margin-right:150px">Sign up</a>
                        </div>

                        <div class="container" style="background-color:#f1f1f1">
                            <button type="button" onclick="document.getElementById('id01').style.display = 'none'" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                        </div>
                    </form>
                </div>
            
                <a href="users_signup.php" class="btn btn-success" style="margin-left:30px">Sign Up</a>
            </div>
        </header> <!-- End Header Jumbotron -->

        <!-- Start Course  -->
        <!--div class="container pt-5" id="Courses"> <!-- Start Course Container -->
            <!--h2 class="text-center">Our Courses</h2>  <!-- Course Heading ->
            <div class="row mt-4">        <!-- Start Course 1st Row ->
                <div class="col-lg-6 mb-4">     <!-- Start Course 1st Row's 1st Column ->
                    <img src="images/course1.jpeg" alt="" class="img-fluid">
                </div>  <!-- End Course 1st Row's 1st Column ->

                <div class="col-lg-6">    <!-- Start Course 1st Row's 2nd Column ->
                    <h2 class="text-center">Learn Competative Programming</h2> <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ducimus, modi aut consequatur dolore ut praesentium esse recusandae at amet. Dolorem eius obcaecati ratione, quas laborum consequatur inventore vitae nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos asperiores magnam culpa ullam. Quasi voluptatem eveniet sed velit tempore eaque adipisci magnam recusandae quaerat praesentium illo, animi, sit ratione quo.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi atque ipsam optio, iusto explicabo odit suscipit delectus quis eum adipisci quo voluptas laboriosam quisquam sit, sint asperiores eius in!</p>
                </div>  <!-- End Course 1st Row's 2nd Column ->
            </div>  <!-- End Course 1st Row ->

            <!--div class="row mt-4">    <!-- Start Course 2nd Row ->
                <div class="col-lg-6">  <!-- Start Course 2nd Row's 1st Column ->
                    <h2 class="text-center">Real World Projects</h2> <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ducimus, modi aut consequatur dolore ut praesentium esse recusandae at amet. Dolorem eius obcaecati ratione, quas laborum consequatur inventore vitae nostrum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos asperiores magnam culpa ullam. Quasi voluptatem eveniet sed velit tempore eaque adipisci magnam recusandae quaerat praesentium illo, animi, sit ratione quo.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente nisi atque ipsam optio, iusto explicabo odit suscipit delectus quis eum adipisci quo voluptas laboriosam quisquam sit, sint asperiores eius in!</p>
                </div>  <!-- End Course 2nd Row's 1st Column ->

                <div class="col-lg-6 mb-4">   <!-- Start Course 2nd Row's 2nd Column ->
                    <img src="images/course2.jpeg" alt="" class="img-fluid">
                </div>    <!-- End Course 2nd Row's 2nd Column ->
            </div>    <!-- End Course 2nd Row ->
        </div> <!-- End Course Container --> <!-- End Course  -->

        

        <!--Start Contact Us-->
        <div class="container" id="Contact"> <!--Start Contact Us Container-->
            <h2 class="text-center mb-4">Contact US</h2>    <!-- Contact Us Heading -->
            <div class="row">           <!--Start Contact Us Row-->
                <div class="col-md-8">    <!--Start Contact Us 1st Column-->
                    <form action="contact.php" method="post">
                        <input class="form-control" name="name" placeholder="Name" /><br />
                        <input class="form-control" name="phone" placeholder="Phone" /><br />
                        <input class="form-control" name="email" placeholder="E-mail" /><br />
                        <textarea class="form-control" name="text" placeholder="How can we help you?" style="height:150px;"></textarea><br />
                        <input class="btn btn-primary" type="submit" value="Send" /><br /><br />
                    </form>
                </div>  <!-- End Contact Us 1st Column-->

                <div class="col-md-4 text-center">    <!-- Start Contact Us 2nd Column-->
                    <h2 class='title'>About Website</h2>
<div class='widget-content'>
<p><!--img alt="author" src="#" srcset="images/IMG1.jpg" class="avatar avatar-85 photo" height="85" width="85" /--><br>This website work as a bridge between you and your seniors of your college as well as different colleges.you can gain their exprience or direction from them.this website aims to connect you all friends from different colleges and here you can learn from each-other. 
                </div>    <!-- End Contact Us 2nd Column-->
            </div>    <!-- End Contact Us Row-->
            </div> </div> <!-- End Contact Us Container-->    <!-- End Contact Us -->

        <!-- Start Footer-->
        <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
            <div class="container">   <!-- Start Footer Container -->
                <div class="row py-3">    <!-- Start Footer Row -->
                    <div class="col-md-6">      <!-- Start Footer 1st Column -->
                        <div>
                            <span>Follow Us: </span>
                            <a href="#" target="_blank"><i class="#"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-twitter pr-3"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-youtube pr-3"></i></a>
                            <a href="#" target="_blank"><i class="fab fa-google-plus-g pr-3"></i></a>
                            <a href="#" target="_blank"><i class="fas fa-rss pr-3"></i></a>
                        </div>
                    </div>    <!-- End Footer 1st Column -->

                    <div class="col-md-6 text-right">   <!-- Start Footer 2nd Column -->
                        <small> Designed by <a href="#" target="_blank">Vikash Mishra</a> &copy; 2019. </small>
                    </div>    <!-- End Footer 2nd Column -->
                </div>    <!-- End Footer Row -->
            </div>    <!-- End Footer Container -->
        </footer> <!-- End Footer -->

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
        
    </body>
</html>

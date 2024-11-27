<?php session_start(); ?>

    <?php
        if(isset($_POST["logout"]))
        {
            session_destroy();
            header("location:home.php");
        }
    ?>    
<!DOCTYPE html>
<html>
<head>
  <title>Restaurant Management System</title>
  <style>
    
    body 
    {
        background-color: black;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-image: url("../Images/food8.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
    }

    /* header {
      background-color: #ffc107;
      padding: 1px;
      text-align: center;
      height: 60px;
    } */

    nav
    {
        
        background-color: white;
        padding: 8px;
    }

    nav ul
    {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    nav li
    {
        display: inline-block;
        margin-right: 20px;
    }

    nav a
    {
        color: black;
        text-decoration: none;
    }

    #underline
    {
        text-underline-offset: 9px;
        text-decoration: underline 2.5px;
        color: cadetblue;
        /* color: green; */
        /* color: greenyellow; */
    }

    .navbar:hover
    {
        /* background-color: aqua; */
        /* text-decoration-color: blue; */
        /* background-clip: border-box; */
        /* box-shadow: aqua; */

        text-underline-offset: 9px;
        text-decoration: underline 2.5px;
        color: gray;
    }


    .dropbtn
    {
        background-color: #04AA6D;
        color: white;
        padding: 10px;
        font-size: 16px;
        border: none;
        /* margin-left: 200px; */
    }

/* The container <div> - needed to position the dropdown content */
    .dropdown
    {
        position: relative;
        display: inline-block;
        text-transform: capitalize;
    }

/* Dropdown Content (Hidden by Default) */
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
        z-index: 1;
    }

/* Links inside the dropdown */
    .dropdown-content a
    {
        color: black;
        /* padding: 12px 16px; */
        text-decoration: none;
        display: block;
    }

/* Change color of dropdown links on hover */
    .dropdown-content a:hover
    {
        background-color: #ddd;
    }

/* Show the dropdown menu on hover */
    .dropdown:hover .dropdown-content
    {
        display: block;
    }

/* Change the background color of the dropdown button when the dropdown content is shown */
    .dropdown:hover .dropbtn
    {
        background-color: #3e8e41;
    }


    #homebg
    {
        padding: 0px;
        height: 575px;
        width: 100px;
        background-repeat: no-repeat;
    }

    #logo
    {
        height: 550px;
        width: 550px;
        background-repeat: no-repeat;
        /* transform: translate(0px, -50px); */
        padding-left: 300px;
        /* background-image: url("../Images/food8.jpg");
        background-size: 100%;
        background-repeat: no-repeat; */
    }

    section 
    {
        margin: 32px;
    }

    #hr
    {
        width: 600px;
        transform: translateY(-80px);
    }

    #logout
    {
        width: 100px;
        font-size: 16px;
        text-decoration: none;
        border: 0.5px;
        /* margin: 10px; */
        padding-right: 100px;
        padding-top: 12px;
        padding-bottom: 12px;
    }

    #name
    {
        border: 0.5px;
        width: 80px;
        padding-right: 100px;
        padding-top: 12px;
        padding-bottom: 12px;
    }

    #logout:hover
    {
        background-color: rgb(220, 220, 220);
    }
    
    #name:hover
    {
        background-color: rgb(220, 220, 220);
    }
    </style>
</head>
<body>
    <!-- <header>
        <h1>Restaurant Management System</h1>
    </header> -->
    
    <!-- <a id="home"></a> -->
    
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    
    <div>
        <nav>
            <ul>
                <li class = "navbar" id="underline"><a href="#home">Home</a></li>
                <li class = "navbar"><a href="Menu.html">Menu</a></li>
                <li class = "navbar"><a href="Reservations.html">Reservations</a></li>
                <li class = "navbar"><a href="AboutUs.php">About Us</a></li>
                <li class = "navbar"><a href="ContactUs.php">Contact Us</a></li>

                <?php if(!isset($_SESSION['auth'])): ?>
                <li class = "navbar"><a href="login.php">Login / Sign Up</a></li>
                <?php endif; ?>

                <?php if(isset($_SESSION['auth'])): ?> 
                <!-- <form method = "post" id="user">
                    <select name="user">  
                        <li class = "navbar">
                            <option>
                                <a href=""></a>
                            </option>
                        </li>
                    </select>
                </form> -->
                <div class="dropdown">
                <button class="dropbtn"><?php echo mb_substr($_SESSION['auth_name'], 0, 1) ?></button>
                <div class="dropdown-content">

                    <a href="admin.php" id = "name"><?= $_SESSION['auth_name']; ?></a>

                    <a href="#"><form method = "post">
                        <input type="submit" name = "logout" id = "logout" value = "Log out" style="font-size:16px;">
                    </form></a>
                </div>
                </div>

                <li class = "navbar">
                    
                </li>
                <?php endif; ?>

        </ul>
    </nav>
</div>

<link rel="icon" href="../Images/BackLogoTransparent.png" type="image/icon type">

<img src="../Images/BackLogoTransparent.png" alt="logo" id="logo">

<!-- <div>
    <img src="../Images/food8.jpg" alt="background" id="img" width="760px">

</div> -->

<hr id="hr">


</body>
</html>

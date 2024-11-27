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
        /* background-image: url("../Images/food8.jpg"); */
        background-repeat: no-repeat;
        background-size: 100%;
    }

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
        margin-right: 16px;
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
    }

    .navbar:hover
    {
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
    }

    .dropdown
    {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        z-index: 1;
    }

    .dropdown-content a
    {
        color: black;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover
    {
        background-color: #ddd;
    }

    .dropdown:hover .dropdown-content
    {
        display: block;
    }

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
        padding-left: 100px;
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
    
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
    
    <div>
        <nav>
            <ul>
                <li class = "navbar"><a href="home.php">Home</a></li>
                <li class = "navbar"><a href="Menu.html">Menu</a></li>
                <li class = "navbar"><a href="Reservations.html">Reservations</a></li>
                <li class = "navbar"><a href="AboutUs.php">About Us</a></li>
                <li class = "navbar"><a href="ContactUs.php">Contact Us</a></li>

                <?php if(!isset($_SESSION['auth'])): ?>
                <li class = "navbar" style="margin-left: 190px;"><a href="login.php">Login</a></li>
                <li class = "navbar"><a href="signup.php">Sign up</a></li>
                <?php endif; ?>

                <?php if(isset($_SESSION['auth'])): ?> 

                <div class="dropdown">
                <button class="dropbtn"><?php echo mb_substr($_SESSION['auth_name'], 0, 1) ?></button>
                <div class="dropdown-content">

                    <a href="#" id = "name"><?= $_SESSION['auth_name']; ?></a>

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

</body>
</html>
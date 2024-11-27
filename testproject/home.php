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
        padding-left: 100px;
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
    #nchar
    {
            background-color: rgb(188, 188, 188);
            width: 20px;
            padding-left: 7px;
            border: 2px solid black;
            border-radius: 30px;
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
                <li class = "navbar"><a href="AboutUs.html">About Us</a></li>
                <li class = "navbar"><a href="ContactUs.html">Contact Us</a></li>
                <li class = "navbar" style="margin-left: 190px;"><a href="login.php">Login</a></li>
                <li class = "navbar"><a href="signup.php">Sign up</a></li>
                
                <li class = "navbar" id = "nchar"><a href="">
                    <?php
                        session_start();

                        // $_SESSION['$a'] = $nchar;
                        // echo $a;
                        // echo $nchar;
                        echo $_COOKIE["nchar"];
                    ?>    
            </a></li>
        </ul>
    </nav>
</div>

<img src="../Images/BackLogoTransparent.png" alt="logo" id="logo">

<!-- <div>
    <img src="../Images/food8.jpg" alt="background" id="img" width="760px">

</div> -->

<hr id="hr">


</body>
</html>

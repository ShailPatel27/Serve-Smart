<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        body
        {
            background-color: gray;
            padding-left: 280px;
            padding-top: 35px;
            transform: scale(0.9);
            background-image: url("../Images/food7.jpg");
            /* background-size: 100%; */
            color: white;
        }

        #signin
        {
            transform: scale(0.8);
            border-radius: 3px;
            border: 1.5px solid white;
        }

        #signin:hover
        {
            /* border: 1px solid black; */
            transform: scale(1);
            color: blue;
        }

        #name
        {
            background-color: red;
            padding-left:5px;
            width: 20px;
            border: 2px solid black;
            border-radius: 30px;
        }
    </style>

</head>
<body>

    <div>

        <h3>
            Login with your account
        </h3>
        
        <img src= "../Images/anonymous photo.jpg" alt="image not found" height = "100" width = "100" style="padding-left: 40px;">
    </div>
        
    <div>

        <form method = "post">
            <div>
                <input type="email"  placeholder="Email" name = "uname" style="border-radius: 2px; border: 1.5px solid white;">
                <br>
            </div>
            <div>
                <input type="password" placeholder = "Password" name = "pass" style="border-radius: 2px; border: 1.5px solid white;">
                <br>

            </div>
            <input type="Submit" name = "submit" value = "Sign in"  id="signin">
            <br>
        <br>
        <div>
            <input type="checkbox" name = "signed"> Stay signed in
        </div>
    </form>
</div>

<?php
    $name = "";
    $nchar = "";


    $cnn = mysqli_connect("localhost", "root", "", "project");
    
    
    if(isset($_POST["submit"]))
    {
        $inpuname = $_POST["uname"];
        $inppass = $_POST["pass"];

        $qry = "select name from accounts where uname = '$inpuname' AND pass = '$inppass'";
        
        $result = $cnn->query($qry);

        if(mysqli_num_rows($result)>0)
        {
            echo "Logged in Successfully"."<br>";

            while($row = $result->fetch_assoc())
            {
                $name = $row["name"];
                $nchar = mb_substr($name, 0, 1);
                
                echo "<p id = name>&nbsp $nchar</p>";
            }
            
            if(isset($_POST["signed"]))
            {
                echo "signed = true"."<br>";

                setcookie("uname", $inpuname, time()+3600000, "/", "", 0);
                setcookie("inppass", $inppass, time()+3600000, "/", "", 0);
                setcookie("name", $name, time()+3600000, "/", "", 0);
                setcookie("nchar", $nchar, time()+3600000, "/", "", 0);
        
                echo "Your uname = ".$_COOKIE["uname"]."<br>";
                echo "Your pass = ".$_COOKIE["inppass"]."<br>";
                echo "Your name = ".$_COOKIE["name"]."<br>";
                echo "Your nchar = ".$_COOKIE["nchar"]."<br>";
            }
            else
            {
                echo "signed = false"."<br>";

                setcookie("uname", $inpuname, time()+60, "/", "", 0);
                setcookie("inppass", $inppass, time()+60, "/", "", 0);
                setcookie("name", $name, time()+60, "/", "", 0);
                setcookie("nchar", $nchar, time()+60, "/", "", 0);
        
                echo "Your uname = ".$_COOKIE["uname"]."<br>";
                echo "Your pass = ".$_COOKIE["inppass"]."<br>";
                echo "Your name = ".$_COOKIE["name"]."<br>";
                echo "Your nchar = ".$_COOKIE["nchar"]."<br>";
            }
                
            session_start();
                
            // $_SESSION['$a'] = $nchar;

            // $a = $_SESSION['$nchar'];

            // $_COOKIE["uname"] = $a;

            $a = $_COOKIE["name"];
        }
        else
        {
            echo "Invalid Username or Password";
        }
        
        
        
    }
    
    ?>
</body>
</html>
<?php 
    session_start();
?>
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
                <input type="email"  placeholder="Email" name = "email" required style="border-radius: 2px; border: 1.5px solid white;">
                <br>
            </div>
            <div>
                <input type="password" placeholder = "Password" name = "pass" required style="border-radius: 2px; border: 1.5px solid white;">
                <br>

            </div>
            <input type="Submit" name = "submit" value = "Sign in"  id="signin">
            <br>
        <br>
    </form>
</div>

<?php    
    if(isset($_POST["submit"]))
    {
        $inpemail = $_POST["email"];
        $inppass = $_POST["pass"];
        $cnn = mysqli_connect("localhost", "root", "", "project");
        $qry = "select name from accounts where email = '$inpemail' AND pass = '$inppass'";
        $result=$cnn->query($qry);

        if(mysqli_num_rows($result)>0)
        {
            
            while($row = $result->fetch_assoc())
            {
                $name=$row['name'];
            }
            // echo $name;
            $_SESSION['auth']=true;
            $_SESSION['auth_name']=$name;
            //     $_SESSION['auth_name']=$name;
            
            // if(isset($_POST["signed"]))
            // {
            //     echo "signed = true"."<br>";

            //     setcookie("email", $inpemail, time()+3600000, "/", "", 0);
            //     setcookie("inppass", $inppass, time()+3600000, "/", "", 0);
            //     setcookie("name", $name, time()+3600000, "/", "", 0);
            //     setcookie("nchar", $nchar, time()+3600000, "/", "", 0);
        
            //     echo "Your email = ".$_COOKIE["email"]."<br>";
            //     echo "Your pass = ".$_COOKIE["inppass"]."<br>";
            //     echo "Your name = ".$_COOKIE["name"]."<br>";
            //     echo "Your nchar = ".$_COOKIE["nchar"]."<br>";
            // }
            // else
            // {
            //     echo "signed = false"."<br>";

            //     setcookie("email", $inpemail, time()+60, "/", "", 0);
            //     setcookie("inppass", $inppass, time()+60, "/", "", 0);
            //     setcookie("name", $name, time()+60, "/", "", 0);
            //     setcookie("nchar", $nchar, time()+60, "/", "", 0);
        
            //     echo "Your email = ".$_COOKIE["email"]."<br>";
            //     echo "Your pass = ".$_COOKIE["inppass"]."<br>";
            //     echo "Your name = ".$_COOKIE["name"]."<br>";
            //     echo "Your nchar = ".$_COOKIE["nchar"]."<br>";
            // }
                
                
            // $_SESSION['$a'] = $nchar;

            // $a = $_SESSION['$nchar'];

            // $_COOKIE["email"] = $a;

            // $a = $_COOKIE["name"];

            // header("location:home.html");
            // $_SESSION['email'] = $u;
            // $_SESSION['pass'] = $p;
            // $_SESSION[$name] = $n;
            // $_SESSION[$nchar] = $nc;

            // $authed = auth($email, $pass);

            // $auth = 1;
        
            header("location:home.php");
        }
        else
        {
            echo "Invalid Username or Password";
        }
    }
    
    ?>
</body>
</html>
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
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

<style>
    body
    {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        font-family: 'Jost', sans-serif;
        background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
    }

    .main
    {
        width: 350px;
        height: 500px;
        background: red;
        overflow: hidden;
        background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
        border-radius: 10px;
        box-shadow: 5px 20px 50px #000;
    }

    #chk
    {
        display: none;
    }
    
    .signup
    {
        position: relative;
        width:100%;
        height: 100%;
    }

    label
    {
        color: #fff;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 60px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;
    }

    input
    {
        width: 60%;
        height: 20px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 20px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    button{
        width: 60%;
        height: 40px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: #fff;
        background: #573b8a;
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }

    button:hover
    {
        background: #6d44b8;
    }

    .login
    {
        height: 460px;
        background: #eee;
        border-radius: 60% / 10%;
        transform: translateY(-180px);
        transition: .8s ease-in-out;
    }

    .login label
    {
        color: #573b8a;
        transform: scale(.6);
    }

    #chk:checked ~ .login
    {
        transform: translateY(-500px);
    }

    #chk:checked ~ .login label
    {
        transform: scale(1);	
    }

    #chk:checked ~ .signup label
    {
        transform: scale(.6);
    }

    .cancel
    {
        text-decoration: none;
    }

    #signupcancel
    {
        color: white;
    }

</style>

</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method = "post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="signname" placeholder="Username" required style="margin-top:-30px">
					<input type="email" name="signemail" placeholder="Email" required>
					<input type="password" name="signpass" placeholder="Password" required>
					<button name = "signin">Sign up</button>
                    <center><a href="home.php" class="cancel" id="signupcancel">Cancel</a></center>
				</form>
			</div>

			<div class="login">
				<form method = "post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="pass" placeholder="Password" required>
					<button name = "login">Login</button>
                    <center><a href="home.php" class="cancel">Cancel</a></center>
				</form>
			</div>
	</div>

    <?php    
        if(isset($_POST["login"]))
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

                $_SESSION['auth']=true;
                $_SESSION['auth_name']=$name;
            
                header("location:home.php");
            }
            else
            {
                echo "Invalid Username or Password";
            }
        }
    ?>

    <?php
        $cnn = mysqli_connect("localhost", "root", "", "project");
        
        if(isset($_POST["signin"]))
        {
            $signname = $_POST["signname"];
            $signemail = $_POST["signemail"];
            $signpass = $_POST["signpass"];

            $qry = "insert into accounts values('', '$signname', '$signemail', '$signpass');";
            
            $cnn->query($qry);

            $_SESSION['auth']=true;
            $_SESSION['auth_name']=$signname;

            $cnn->query("create table $signname ( `id` INT(3) NOT NULL , `category` VARCHAR(20) NOT NULL , `dish` VARCHAR(20) NOT NULL , `price` INT(6) NOT NULL )");           
            header("location:home.php");
        }
    ?>
</body>
</html>
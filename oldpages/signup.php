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
            padding-left: 190px;
            padding-top: 30px;
            transform: scale(0.9);
            background-image: url("../Images/food7.jpg");
            color: white;
        }

        .button
        {
            transform: scale(0.8);
        }

        .button:hover
        {
            transform: scale(0.9);
            color: blue;
        }
    </style>

</head>
<body>
    
    <h3>Create your Account</h3>

    <form method = "post">
        <input type="text" placeholder = "Name" name="name" required> 
        <br> <br>
        <input type="text" placeholder = "Username" name="uname" required> <br>

        You can use letters, numbers and periods
        <br> <br>

        <input type="password" placeholder="Password" name="pass" required>
        <input type="password" placeholder="Confirm" name="conpass" required>

        <br>
        Use 8 or more characters with a mix of letters, numbers and symbols
        <br><br>

       <a href="login.php">
          <input type="button" value = "Login instead" class = "button" name="login">
        </a> 

        <input type="submit" value = "Next" class="button" name="submit">

        <a href="home.html">
            <input type="button" value = "Cancel "class="button" name="cancel">
        </a>
    </form>

    <?php
        $cnn = mysqli_connect("localhost", "root", "", "project");

        
        if(isset($_POST["submit"]))
        {
            $name = $_POST["name"];
            $uname = $_POST["uname"];
            $pass = $_POST["pass"];
            $conpass = $_POST["conpass"];

            if($pass == $conpass)
            {
                $qry = "insert into accounts values('', '$name', '$uname', '$pass');";
                
                $result = $cnn->query($qry);

                header("location:home.php");
            }
            else
            {
                echo "Passwords Do Not Match";
            }
            
          
        }

        // if($result = $row->fetch_assoc())
        // {

        // }
    ?>

</body>
</html>
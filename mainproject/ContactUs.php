<?php session_start(); ?>

<?php
  if(isset($_POST["logout"]))
  {
    session_destroy();
    header("location:home.php");
  }
?>  

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
      /* Google Font CDN Link */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}

.email
{
  text-decoration: underline;
  color: whitesmoke;
}

body
{
  background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
  min-height: 100vh;
  width: 100%;
  /* background: #c8e8e9;  */
  /* display: flex; */
  background-color: black;
  font-family: Arial, sans-serif;
}

select
{
    background: #F0F1F8;
    border-radius: 6px;
    display: flex;
    font-size: 14px;
    font-weight: 300;
    border: none;
    outline: none;
    font-size: 16px;
    resize: none;
    padding-left: 10px;
}

.container
{
  height: 70%;
  width: 70%;
  margin-left: 180px;
  margin-top: 50px;
  background: #eee1ff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}

.container .content
{
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.container .content .left-side
{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}

.content .left-side::before
{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}

.content .left-side .details
{
  margin: 14px;
  text-align: center;
}

.content .left-side .details i
{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}

.content .left-side .details .topic
{
  font-size: 18px;
  font-weight: 500;
}

.content .left-side .details .text-one,
.content .left-side .details .text-two
{
  font-size: 14px;
  color: #afafb6;
}

.container .content .right-side
{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text
{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}

.right-side .input-box
{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}

.right-side .input-box input,
.right-side .input-box textarea
{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box
{
  min-height: 100px;
}
.right-side .input-box textarea
{
  padding-top: 6px;
}

.right-side .button
{
  display: inline-block;
  margin-top: 12px;
}

.right-side .button input[type="submit"]
{
  color: #fff;
  font-size: 14px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}

.button input[type="submit"]:hover
{
  background: #5029bc;
}

@media (max-width: 950px) 
{
  .container
  {
    width: 90%;
    padding: 30px 40px 40px 35px;
  }
  .container .content .right-side
  {
   width: 75%;
   margin-left: 55px;
  }
}

@media (max-width: 820px) 
{
  .container
  {
    margin: 40px 0;
    height: 100%;
  }

  .container .content
  {
    flex-direction: column-reverse;
  }

  .container .content .left-side
  {
    width: 100%;
    flex-direction: row;
    -top: 40px;
    -content: center;
    flex-wrap: wrap;
  }
  
  .container .content .left-side::before
  {
    display: none;
  }
  
  .container .content .right-side
  {
    width: 100%;
    margin-left: 0;
  }
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
        width: 100px;
        font-size: 16px;
        text-decoration: none;
        border: 0.5px;
        /* padding-right: 100px; */
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
<body  
    <div>
        <nav>
            <ul>
                <li class = "navbar"><a href="home.php">Home</a></li>
                <li class = "navbar"><a href="Menu.html">Menu</a></li>
                <li class = "navbar"><a href="Reservations.html">Reservations</a></li>
                <li class = "navbar"><a href="AboutUs.php">About Us</a></li>
                <li class = "navbar" id="underline"><a href="ContactUs.php">Contact Us</a></li>

                <?php if(!isset($_SESSION['auth'])): ?>
                <li class = "navbar"><a href="login.php">Login / Sign Up</a></li>
                <?php endif; ?>

                <?php if(isset($_SESSION['auth'])): ?> 
           
                <div class="dropdown">
                <button class="dropbtn"><?php echo mb_substr($_SESSION['auth_name'], 0, 1) ?></button>
                <div class="dropdown-content">

                    <a href="admin.php" id="name"><?= $_SESSION['auth_name']; ?></a>

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

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Memnagar</div>
          <div class="text-two">Ahmedabad</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">8200057431</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic" style="color: black;">Email</div>
          <div class="text-one">shailpatel2709@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>Let us know what's on your mind, we'll get back to you soon.</p>
      <form method="post">
        <div class="input-box">
          <input name="name" type="text" placeholder="Enter your name" required maxlength="30">
        </div>
        <div class="input-box">
          <input name="email" type="email" placeholder="Enter your email" required maxlength="30">
        </div>

        <div>
            <select name="sub" class="input-box" required>
                    <option name="op1" class="select">Please select a type</option>
                    <option name="op2" class="select">Website Is Not Working Properly</option>
                    <option name="op3" class="select">About Your Website</option>
                    <option name="op4" class="select">Difficulty In Making Reservations</option>
                    <option name="op5" class="select">Problems With The Online Menu</option>
                    <option name="op6" class="select">Suggestions About Improving The Website</option>
                    <option name="op7" class="select">Other</option>
            </select>
        </div>

        <div class="input-box message-box">
          <textarea name="body" placeholder="Enter your message" required maxlength="300"></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" name="submit">
        </div>
      </form>

      <?php
        $cnn = mysqli_connect("localhost", "root", "", "project");
        
        if(isset($_POST["submit"]))
        {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $sub = $_POST["sub"];
            $body = $_POST["body"];

            $qry = "insert into contact values('', '$name', '$email', '$sub', '$body');";
            
            $cnn->query($qry);
            $message = "Thanks, Your Response Has Been Sent";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
    ?>

    </div>
    </div>
  </div>
</body>
</html>
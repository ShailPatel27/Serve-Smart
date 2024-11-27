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
	<title>About Us</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
			background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
		}
		
		header {
			background-color: #333;
			color: white;
			padding: 20px;
			text-align: center;
		}
		
		h1 {
			margin-top: 0;
		}
		
		.container {
			margin: 50px auto;
			width: 800px;
			padding: 20px;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0);
		}

		h2 {
			text-align: center;
			margin-bottom: 20px;
		}

		p {
			margin-bottom: 20px;
			line-height: 1.5;
		}

		img {
			max-width: 100%;
			height: auto;
			margin-bottom: 20px;
		}
		
		.team {
			display: flex;
			justify-content: space-between;
			flex-wrap: wrap;
			margin-top: 30px;
		}

		.member {
			flex-basis: calc(33.33% - 20px);
			margin-bottom: 30px;
			padding: 50px;
			background-color: #f2f2f2;
			border-radius: 5px;
			box-shadow: 5px 2px 5px #000;
		}

		.member img {
			display: block;
			margin: 0 auto 10px;
			width: 100px;
			height: 100px;
			object-fit: cover;
			border-radius: 50%;
		}

		.member h3 {
			text-align: center;
			margin-bottom: 10px;
		}

		.member p {
			text-align: center;
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
            display: flex;
			margin: 0 auto 10px;
			object-fit: cover;
			border-radius: 30px;
            background-color: black;
            height: 250px;
            width: 350px;
            box-shadow: 3px 2px 8px #ccc;

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
                <li class = "navbar" id="underline"><a href="AboutUs.php">About Us</a></li>
                <li class = "navbar"><a href="ContactUs.php">Contact Us</a></li>

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
		<img src="../Images/ServeSmartLogo.png"  alt="About Us" id="logo">
		
		<h2>Our Story</h2>
		
		<p>We started out with a passion for delicious food and exceptional customer service. 
			To improve operations and the overall dining experience for both customers and staff, 
			we set out to develop a restaurant management system. To make our vision a reality, we put together a group of skilled designers, developers, and hospitality experts. We created a comprehensive system that includes order management and inventory control after putting in countless hours of effort and working together. Our commitment to innovation and client satisfaction has helped us establish ourselves as a leading supplier of restaurant management solutions. In
			 the years to come, we are eager to continue serving the restaurant industry because we are proud of our history.</p>
		
		<p></p>
		
		<h2>Our Mission</h2>
		
		<p>A web application called Serve Smart is intended to automate a restaurant's daily operations. It offers features including ordering meals, managing table reservations, managing customer information, managing menu information, and much more. The system is simple to use and effective, making it a vital tool for managers and owners of restaurants.</p>

		<p>Serve Smart is made to aid restaurant managers in running their establishments while also making it easier for staff to do their jobs. The system is flexible and may be adapted to any restaurant's unique requirements.</p>
		<h2>Our Team</h2>
		
		<p>Our team is made up of committed individuals that are passionate about creating
			 innovative approaches for the restaurant sector. We are a team of skilled project managers, designers, 
			 and engineers who collaborate to develop a user-friendly and efficient restaurant management system. Our team is dedicated to providing top-notch outcomes, attending to the demands of our clients, and guaranteeing client happiness. We place a high priority on open communication, teamwork, and a dedication to quality, and we always try to enhance our abilities and procedures. Together, we are dedicated 
			to assisting restaurants in operating smoothly and effectively while delivering top-notch clientele service.</p>
		<div class="team">
			<div class="member">
				<img src="../Images/shail.jpg" alt="Shail Patel">
				<h3>Shail Patel</h3>
				<p>FullStack Developer</p>
			</div>
			<div class="member">
				<img src="../Images/veer.jpg" alt="Veer Shah">
				<h3>Veer Shah</h3>
				<p>Designer</p>
			</div>
			<div class="member">
				<img src="../Images/shubham.jpg" alt="Shubham Patel">
				<h3>Shubham Patel</h3>
				<p>&nbsp;       &nbsp;</p>
			</div>
			<div class="member">
				<img src="../Images/kripa.jpg" alt="Kripa Thakkar">
				<h3>Kripa Thakrar</h3>
				<p>&nbsp;       &nbsp;</p>
			</div>
		</div>
	</div>
</body>
</html>
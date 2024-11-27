<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Management System</title>
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /* background-image: url("../Images/food8.jpg"); */
            background-repeat: no-repeat;
            background-size: 100%;
        }

        nav {

            background-color: white;
            padding: 8px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline-block;
            margin-right: 20px;
        }

        nav a {
            color: black;
            text-decoration: none;
        }

        #underline {
            text-underline-offset: 9px;
            text-decoration: underline 2.5px;
            color: cadetblue;
            /* color: green; */
            /* color: greenyellow; */
        }

        .navbar:hover {
            /* background-color: aqua; */
            /* text-decoration-color: blue; */
            /* background-clip: border-box; */
            /* box-shadow: aqua; */

            text-underline-offset: 9px;
            text-decoration: underline 2.5px;
            color: gray;
        }


        .dropbtn {
            background-color: #04AA6D;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            /* margin-left: 200px; */
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
            text-transform: capitalize;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 800px;
            /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); */
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            /* padding: 12px 16px; */
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
            display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }


        #homebg {
            padding: 0px;
            height: 575px;
            width: 100px;
            background-repeat: no-repeat;
        }

        #logo {
            height: 550px;
            width: 550px;
            background-repeat: no-repeat;
            /* transform: translate(0px, -50px); */
            padding-left: 300px;
            /* background-image: url("../Images/food8.jpg");
        background-size: 100%;
        background-repeat: no-repeat; */
        }

        section {
            margin: 32px;
        }

        #hr {
            width: 600px;
            transform: translateY(-80px);
        }

        #name:hover {
            background-color: rgb(220, 220, 220);
        }

        #container {
            display: flex;
            justify-content: space-between;
        }

        #left-column {
            width: 45%;
        }

        #right-column {
            width: 50%;
        }

        #menu-list li {
            list-style-type: none;
            margin-bottom: 10px;
        }

        #add-item-btn {
            margin-top: 20px;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

</head>

<body>
    <div>
        <nav>
            <ul>
                <div class="dropdown">
                    <button class="dropbtn">CATEGORY</button>
                    <div class="dropdown-content">
                        <table>
                            <a href="#">
                                <form method="post">
                                    <thead>
                                        <tr>
                                            <th>Item ID</th>
                                            <th>Item Name</th>
                                            <th>Item Description</th>
                                            <th>Item Price(₹)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $cnn = mysqli_connect("localhost", "root", "", "project");
                                        $disp = "";
                                        $qry = "select * from testadmin";
                                        $result = $cnn->query("$qry");
                    
                                        while($row = $result->fetch_assoc())
                                        {
                                            $dbid = $row["id"];
                                            $dbname = $row["name"];
                                            $dbdesc = $row["description"];
                                            $dbprice = $row["price"];
                    
                                            // $modifiedId = "id".$dbid;
                                            // $modifiedDelete = "delete".$dbid;
                                            $disp .= "<tr><td><input type='number' name='id' value='$dbid'></td> <td><input type='text' value='$dbname'></td> <td><textarea rows='1' cols='50'>$dbdesc</textarea></td ><td><input type='number' min='0' value='$dbprice'></td></tr>";
                                        }
                                        echo $disp;
                    
                                        
                                        if(isset($_POST["add"]))
                                        {
                                            $id = $_POST["id"];
                                            $name = $_POST["name"];
                                            $desc = $_POST["desc"];
                                            $price = $_POST["price"];
                                
                                            $qry = "insert into testadmin values('$id', '$name', '$desc', '$price');";
                                            
                                            $cnn->query($qry);
                    
                                            header("Refresh:0");
                                        }
                                        
                                        // for ($i=0; $i < $dbid; $i++)
                                        // {
                                        //     $mDelete = "delete".$i;
                                        //     $mId = "id".$i;
                    
                                            if(isset($_POST["delete"]))
                                            {
                                                $delid = $_POST["delid"];
                    
                                                $qry = "delete from testadmin where id='$delid';";
                                                echo $qry;
                                                
                                                $cnn->query($qry);
                    
                                                header("Refresh:0");
                                            }
                                        ?>
                                        <a href="#" class="name">
                                            <tr>
                                                <td><input type="number" name="id" max="99999999999" min="1"></td>
                                                <td><input type="text" name="name" maxlength="50"></td>
                                                <td><textarea name="desc" cols="50" rows="1" maxlength="200"></textarea>
                                                </td>
                                                <td><input type="number" name="price" min="0" max="9999999999"></td>
                                                <td><input type="submit" value="Add Row" name="add"></td>
                                            </tr>
                                        </a>

                                        <a href="#" class="name">
                                            <tr>
                                                <td><input type="number" min="1" name="delid"></td>
                                                <td><input type="submit" name="delete" value="Delete Row"></td>
                                            </tr>
                                        </a>
                                </form>
                                </tbody>
                        </table>
                    </div>
                </div>
            </ul>
        </nav>
    </div>

</body>

</html>
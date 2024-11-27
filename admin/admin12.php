<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <table border="1px">
            <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Item Name</th>
                    <th>Item Description</th>
                    <th>Item Price(₹)</th>
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

                        header("location:admin12.php");
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

                            header("location:admin12.php");
                        }
                    // }
                ?>

                <!-- shift these 1 down -->
                <tr>
                    <td><input type="number" name="id" max="99999999999" min="1"></td>
                    <td><input type="text" name="name" maxlength="50"></td>
                    <td><textarea name="desc" cols="50" rows="1" maxlength="200"></textarea></td>
                    <td><input type="number" name="price" min="0" max="9999999999"></td>
                    <td><input type="submit" value="Add Row" name="add"></td>
                </tr>


                <tr>
                    <td><input type="number" min="1" name="delid"></td>
                    <td><input type="submit" name="delete" value="Delete Row"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>
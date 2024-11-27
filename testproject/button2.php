<!DOCTYPE html>
<html>
<head>
  <title>Create Button on Click</title>
  <style>
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
  
</head>
<body>
  <h1>Create Button on Click</h1>
  <p>Click the button below to create a new button:</p>
  

  <?php if(isset($_POST['button1'])): ?>

<form method = "post">
    <input type="submit" name = "button1">
</form>

<?php 
    endif; 
    // header("location:button2.php");
?>
  <?php if(isset($_POST['button1'])): ?>

<form method = "post">
    <input type="submit" name = "button1">
</form>

<?php 
    endif; 
    // header("location:button2.php");
?>


  <form method="post">
    <input type="submit" name="button1" value="Create Button" class="button">
  </form>
</body>
</html>
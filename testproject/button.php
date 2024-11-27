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
  <script>
    function createButton() {
      // Create a new button element
      var button = document.createElement("button");
      button.innerHTML = "New Button";

      // Append the new button to the document
      var container = document.getElementById("button-container");
      container.appendChild(button);
    }
  </script>
</head>
<body>
  <h1>Create Button on Click</h1>
  <p>Click the button below to create a new button:</p>
  <button onclick="createButton()">Create Button</button>
  <div id="button-container"></div>
  <?php
    if(isset($_POST['button1'])) {
      // Create a new button element
      echo "<button class='button'>New Button</button>";
    }
  ?>
  <form method="post">
    <input type="submit" name="button1" value="Create Button" class="button">
  </form>
</body>
</html>
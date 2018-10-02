<?php
session_start();
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Access</title>
    <link rel='stylesheet' type='text/css' href='style.css'>
  </head>

  <body>  

    <?php
    // define variables and set to empty values
    $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $username = test_input($_POST["username"]);
      $password = test_input($_POST["password"]);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        if($username == "admin" && $username == "admin")
        {
          $_SESSION['loginerror'] = 0;

        } 
        else
        {
          $_SESSION['loginerror'] = 1;
        }
      }

    function test_input($data)
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    ?>

    <h1>Access Area</h1>

    <div id="register">
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        if ($_SESSION['loginerror'] == 1)
        {
          echo ("Incorrect user credentials...");
        }
        else if ($_SESSION['loginerror'] == 0)
        {
          header("Location: welcome.php");
        }
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
        Username: <input type="text" name="username">
        <br /><br />
        Password: <input type="text" name="password">
        <br /><br />
        <input type="submit" name="submit" value="Submit">  
    </form>
    </div>

  </body>
</html>
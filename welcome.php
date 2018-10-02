<?php
session_start();
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Welcome</title>
        <link rel='stylesheet' type='text/css' href='style.css'>
    </head>

    <body>
        
        <?php
            # This is to setup time
            date_default_timezone_set("Asia/Bangkok");

            # Login yet?
            function msg_login()
            {
                if ($_SESSION['loginerror'] == -1)
                {
                    echo "You are not login yet.";
                }
                else if ($_SESSION['loginerror'] == 0)
                {
                    echo "Good "; time_stamp(); echo  ", Admin";
                }
            }

            # Shows time using words instead
            function time_stamp()
            {
                if(date("a") == "pm")
                {
                    if((date("h") > 1 && date("h") <= 4) || date("h") == 12)
                    {
                        echo "afternoon";
                    }
                    else if (date("h") > 4 && date("h") < 6)
                    {
                        echo "evening";
                    }
                    else echo "night";
                }

                else
                {
                    if(date("h") > 6 && date("h") <= 11)
                    {
                        echo "morning";
                    }
                    else if (date("h") > 1 && date("h") < 6)
                    {
                        echo "night";
                    }
                }
            }
            
        ?>

        <h1 class="hidden">This is the Index!</h1>
        <div>
        <?php msg_login(); ?>
        </div>

        <?php
            function logbutton()
            {
                if ($_SESSION['loginerror'] == 0)
                {?>
                    <button type="button" onclick="window.location.href='logout.php'">Logout</button>
                <?php }
                elseif ($_SESSION['loginerror'] == -1)
                {?>
                    <button type="button" onclick="window.location.href='home.php'">Login</button>
                <?php }
            }
        ?>
        
        <div>
        <?php logbutton() ?>
        </div>
        
    </body>
</html>
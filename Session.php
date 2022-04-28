<?php
    session_start();

    if(isset($_SESSION['username']))
    {

        if(isset($_REQUEST['username']) || isset($_REQUEST['password']))
        {
            //accessing the input data
            $username = $_REQUEST['username'];
            $password = $_REQUEST['password'];  //now we want to store these in the session variables
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

         echo "<script> location.href='welcome.php'</script>";
        }
        else{

            echo "<script> location.href='welcome.php' </script>";
        }
        }

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet"  href="">
    </head>
    <body>
        <form action="" method="POST" style="padding:30px">
            Username: <input type="text" name="username" id="username" > <br>
            Password: <input type="password" name="password" id="password"><br><br>
            <input type="submit" value="Log in" name="login">
        </form>
    </body>
    </html>
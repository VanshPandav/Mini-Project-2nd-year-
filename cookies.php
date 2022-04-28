<?php
    $cookie_name = 'email';
    if(isset($_REQUEST['set']))
    {
        $cookie_value = $_REQUEST['email'];
        $cookie_expire = time()+60*60*7; //this cookie will expire after 7 days
        setcookie($cookie_name, $cookie_value, $cookie_expire);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>
    <h1>COOKIE EXAMPLE</h1>
    <form action="" name="myform" method="POST">
        Email: <input type="email" name="email"> <br><br>
        <input type="submit" value="Submit" name="set">
    </form>

    <hr>
    <?php
        if(isset($_COOKIE[$cookie_name]))
        {
            echo "Cookie is stored";// under the name ".$cookie_name." cookie value is ".$_COOKIE[$cookie_value].'<br>';
        }
        else{
            echo "No cookie was set";
        }
    ?>
</body>
</html>

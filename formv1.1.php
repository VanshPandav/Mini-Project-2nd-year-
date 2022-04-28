<?php
$showAlert = false;
$showError = false;
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $server = "localhost";
    $username = 'root';
    $password = "";
    $database = "carwebsite";

    $email = $_POST["email"];
    $password = $_POST["password"];
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result); //this should tell us how many rows were fetched when the query written above was run
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['email']=$email;
            header("location: Home.php");
        }
    else{
        $showError = "Invalid credentials"; 
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

    <style>

            * {
                margin: 0;
                padding: 0;
            }

            .loginpage {
                padding: 9vh 34vw;
                background-color: rgba(250, 235, 215, 0.555);
                height: 100%;
            }

            .container {
                /* margin: 9vh auto; */
                /*width: 25rem;                height: 30rem; */
                width: 30vw;
                height: 80vh;
                border-radius: 10px;
                border: 0.125rem solid rgb(211, 211, 211);
                background-color: rgb(206, 198, 198);
            }


    </style>
</head>

<body>
    <div class="loginpage">
        <div class="container">
            <form name="myform" action="" method ="post"> 

                <p div="login-text"
                    style="padding: 5vh; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; font-size: 7vh;">
                    LogIn</p>

                <div class="emailid-text" style="margin: 2vh 0 0 1.9vw;">
                    <span
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size:4vh; color:rgb(0, 107, 168);">
                        Email
                    </span>
                </div>

                <div class="emailid-input" style="margin:3vh 0 0 1.9vw;">
                    <input type="email" name="email"
                        style="width:90%; height: 4.5vh; border: 1px solid black;  border-radius: 0.3rem; "
                        placeholder=" email@mail.com">
                </div>

                <div class="password-text" style="margin: 3vh 0 0 1.9vw;">
                    <span
                        style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-size: 4vh; color:rgb(0, 107, 168);">
                        Password
                    </span>

                </div>

                <div class="password-input" style="margin:3vh 0 0 1.9vw;">
                    <input type="password" name="password"
                        style="width:90%; height: 4.5vh; border: 1px solid black;  border-radius: 0.3rem; "
                        placeholder=" 6-20(a-z,A-Z,1-9)">
                </div>

                <button type="submit" style="width: 15%; height:4vh; margin: 1.9vw; font-size: 2vh; background-color: rgb(0, 107, 168); color: azure;">Submit</button>
            </form>

        </div>
    </div>
</body>

<script>

    function validate() {
        var email = document.myform.email.value;
        var password = document.myform.password.value;
        var number = document.myform.number.value;

        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var passw = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

        if(email == null || email == "" || number == null || number == "" ) {
            alert("Email/Mobile can't be blank");
            return false;
        }

        else if(!filter.test(email)) {
            alert('Please provide a valid email address');
            return false;
        }

        else if(!password.match(passw)) {
            alert('Password should have 6-20 characters. Min 1 lowercase, 1uppercase, 1 digit')
            return false;
        }
        else if(number.length != 10)
        {
            alert('Number of digits should be 10');
            return false
        }

        else
        {
            alert('Login successful')
        }
    }

</script>
<?php
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "carwebsite";

    $con = mysqli_connect($host, $user, $password, $db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MySQL: ". mysqli_connect_error());
    }

    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $Number = $_POST['Number'];

        //to prevent from mysqli injection
        $Email = stripcslashes($Email);
        $password = stripcslashes($password);
        $Number = stripcslashes( $Number);
        $Email = mysqli_real_escape_string($con, $Email);
        $password = mysqli_real_escape_string($con, $password);
        $Number = mysqli_real_escape_string($con, $Number);

        $sql = "select *from sigin where Email = '$Email' and Password = '$password' and Phone_Number = '$Number'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            echo "<h1><center> Login successful </center></h1>";
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
        }
?>

</html>
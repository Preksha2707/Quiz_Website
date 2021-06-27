<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="loader.js"></script>
</head>
<body>
    <div id="header"></div>
    <div class="outer-div">
            <?php
                if(isset($_GET['msg'])=="Error")
                {
                    echo "<font color='red'>User Does Not Exist or Password Incorrect</font>";
                }
            ?>
            <form method="POST" action="formstudentlogin.php" style="background-color:#fff;width:300px;align-items: center;padding:50px 200px 50px 70px;">
                <label for="uname"><p style="text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;">Username</p></label><br>
                <input type="text" id="uname" name="uname" placeholder="Username"><br>
                <label for="password"><p style="text-transform: uppercase;font-weight:bold;font-family:'Roboto', sans-serif;padding-top:5px;">Password</p></label><br>
                <input type="password" id="password" name="password" placeholder="Password"><br>
                <br>
                <input type="submit" value="Sign-In" id="submit" class="btn btn-primary">                
            </form>
    </div>
    <div id="footer"></div>
</body>
</html>
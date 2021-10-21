<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="child-con">
            <div class="kiri"></div>
            <div class="kanan">
                <h2>Login Form</h2>
                <form method="post" action="login.php">
                    <span><input class="field" type="text" name="user" placeholder="Username"><br></span>
                    <span><input class="field" type="password" name="pass" placeholder="Password"><br></span>
                    <input type="submit" class="btn" value="Login" name="submit" id="">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
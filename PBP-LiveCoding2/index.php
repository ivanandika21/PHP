<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit 1 Page</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="input">
        <input type="submit" value="Submit" name="" id="">
    </form>
    <?php
    if (isset($_POST["input"]) && ($_POST["input"] != "")){
        echo "<h1>Selamat datang ".$_POST["input"]."</h1>";
    }         
    ?>
</body>
</html>
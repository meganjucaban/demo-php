<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

    <?php 
        if (isset($_GET["success"])){    
    ?>
    <p style="background-color: green; color:aliceblue"><?php echo $_GET["success"]?></p>
    <?php
        }
    ?>

    <?php 
        if (isset($_GET["error"])){    
    ?>
    <p style="background-color: red; color:aliceblue"><?php echo $_GET["error"]?></p>
    <?php
        }
    ?>

<form method="POST" action="output.php">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password"><br><br>
        
        <input type="submit" value="Register">
    </form>

</body>
</html>
<?php include 'database.php' ?>

<?php
//create select query 
$query = "SELECT * FROM shouts";
$shouts = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOUT IT!</title>

    <link rel="stylesheet" href="CSS/style.css" type="text/css">
</head>

<body>
    <div id="container">
        <header>
            <h1>SHOUT IT! shoutbox</h1>
        </header>
        <div id="shouts">
            <ul>
                <?php while ($row = mysqli_fetch_assoc($shouts)) : ?>
                    <li class='shout'><span><?php echo $row['time'] ?> </span><strong><?php echo $row['user'] ?>:</strong> <?php echo $row['message'] ?> </li>
                <?php endwhile; ?>
            </ul>
        </div>
        <div id="input">
            <form method="post" action="process.php">
                <input type="text" name="user" placeholder="Enter Your Name">
                <input type="text" name="message" placeholder="Enter A Message">
                <br>
                <input class="shout-btn" type="submit" name="submit" value="Shout It Out">
            </form>
        </div>
    </div>
</body>

</html>
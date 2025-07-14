<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <p class='title'><b><?php echo $title ?></b></p>
        <nav class='navigation'>
        <a href='index.php'>Home</a>
        <a href='add.php'>Add</a>
        <a href='profile.php'><?php echo $email?></a>
        <a href='login.html'>Log Out</a>
        <!--<a href='admin.php'>Admin</a>-->
        </nav>
        <main><?php echo $output?></main>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <link href="new_style.css" rel="stylesheet">
    </head>
    <body>
        
        <div class="title"><?php echo $title ?></div>
        


        <nav class="navigation">
            <ul class="nav justify-content-center py-2">
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href='index.php'>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href='add.php'>Add</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href='profile.php'><?php echo $email?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href='qmess.php'>Qmess</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark fw-semibold" href='login.html'>Log Out</a>
            </li>
            </ul>
        </nav>
        <main><?php echo $output?></main>
    </body>
</html>
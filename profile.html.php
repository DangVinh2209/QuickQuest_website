<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="new_style.css">
</head>
<body>
    <div class="container">
        <div class="row row-cols-3 gy-2">
            <div class="col"></div>
            <div class="col">
                <image  class='avatar-profile' src='images/<?php echo $avatar?>' >
            </div>
            <div class="col"></div>
            <div class="col-12">
                <label for="name">Name</label>
                <div class="box" id='name'><?= htmlspecialchars($name,ENT_QUOTES,'UTF-8')?></div>
            </div>
         
            <div class="col-12">
                <label for="email">Email</label>
                <div class="box" id='email'><?= htmlspecialchars($email,ENT_QUOTES,'UTF-8')?></div>
            </div>
            <div class="col-12"></div>
            <div class="col-12">
                <form action='edit_profile.php' method='post'>
                    <input type='hidden' name='name' value=<?=$name?>>
                    <input type='hidden' name='email' value=<?=$email?>>
                    <input type="submit" class='form-control' value='Edit' id='send'>
                </form>
            </div>
            <div class="col-12">
                <form action='delete_account.php' method='post'>
                    <input type="submit" class='form-control' value='DELETE ACCOUNT' id='send'>
                </form>
            </div>
        </div>
    </div>
  
</body>
</html>
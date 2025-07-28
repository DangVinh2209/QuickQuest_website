<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    
    <div class="row gy-4">
        <?php foreach($users as $user):?>
            
            <div class="col-2">
                <form method='post'>
                <input type='hidden' value=<?=$user['id']?> name='receiver_id'>
                <input type='hidden' value=<?=$user['name']?> name='receiver_name'>
                <button class='btn btn-light btn-md rounded-pill' type='submit' name='user_clicked'><img class="img-avatar" src='images/<?php echo $user['avatar']?>'>
                <?=$user['name']?></button>
                </form>
            </div>
        
        <?php endforeach?>
    </div>
    

</body>
</html>
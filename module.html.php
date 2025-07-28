<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link href="admin_style.css" rel="stylesheet">
</head>
<body>
    <br>
    <form action='add_module.php'>
        <button class='btn btn-dark btn-md rounded-pill' type='submit' >Add new</button>
    </form>    
    <br><br>
    <div class="row gy-4">
    <?php foreach($admin_modules as $admin_module): ?>
        
            <div class="col-6">
                <div class="box"><?= htmlspecialchars($admin_module['name'],ENT_QUOTES,'UTF-8')?></div>
            </div>
            <div class="col-1">

                    <form action='edit_module.php' method='post'>
                        <input type='hidden' name='name' value='<?=$admin_module['name']?>'>
                        <input type='hidden' name='id' value='<?=$admin_module['id']?>'>
                        <button class='btn btn-primary btn-md rounded-pill' type='submit' >Edit</button>
                    </form>

            </div>
            <div class="col-5">

                    <form action='delete_module.php' method='post'>
                        <input type='hidden' name='id' value='<?=$admin_module['id']?>'>
                        <button class='btn btn-danger btn-md rounded-pill' type='submit' >Delete</button>
                    </form>
            </div>
            
    <?php endforeach ?>
    <div class="col"></div>
    </div>
</body>
</html>
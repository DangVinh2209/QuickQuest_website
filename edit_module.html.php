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
    <form action='' method='post'>
        <div class="row">
            <div class="col-10">
                <textarea class="form-control rounded-pill" id="exampleFormControlTextarea1" name='changed_module_name' rows="1"><?=$_POST['name']?></textarea>
            </div>
            <div class="col-2">
                <input type='hidden' name='old_name' value=<?= $_POST['name'] ?>>
                <input type='hidden' name='id' value=<?= $_POST['id']?>>
                <button class='btn btn-dark btn-md rounded-pill' type='submit' >Change</button>
            </div>
        </div>
        
        
        
    </form>
</body>
</html>
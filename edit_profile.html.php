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
            <div class="col"></div>
            <div class="col-12">
                <form method='post' action=''>
                    <div class="mb-3">
                        <br>
                        <label for="name">Name</label>
                        <textarea class="form-control rounded-pill" id="name" name='new_name' rows="1"><?= $_POST['name']?></textarea>
                        <br>
                        <label for="email">Email</label>
                        <textarea class="form-control rounded-pill" id="email" name='new_email' rows="1"><?= $_POST['email']?></textarea>
                        <br><br>
                        
                            <button class='btn btn-dark btn-md rounded-pill' type='submit' >Change</button>
                        
                    </div>
                </form>
            <div class="col-12"></div>
        </div>
    </div>

</body>
</html>
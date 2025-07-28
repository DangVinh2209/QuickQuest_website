<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="new_style.css">
    </head>
    <body>
        <form method='post' action=''>
            <div class="mb-3">
                <br>
                <textarea class="form-control rounded-pill" id="exampleFormControlTextarea1" name='changed_question' rows="2"><?= $_POST['question']?></textarea>
                <input type='hidden' value=<?=$_POST['question']?> name='question'>
                <input type='hidden' value=<?=$_POST['id']?> name='id'>
                <br>
                <div class="box">
                    <button class='btn btn-dark btn-md rounded-pill' type='submit' >Change</button>
                </div>
            </div>
        </form>
    </body>
</html>
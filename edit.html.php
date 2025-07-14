<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form method='post' action=''>
            <textarea rows="10" cols="30" name='changed_question'><?= $_POST['question']?></textarea>
            <input type='hidden' value=<?=$_POST['question']?> name='question'>
            <input type='hidden' value=<?=$_POST['id']?> name='id'>
            <input type='submit' value='Change'>
        </form>
    </body>
</html>
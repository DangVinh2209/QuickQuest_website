<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action='' method='post' enctype="multipart/form-data" >
        
        Name <select name='user_id' required>
            <option>Select author</option>
            <?php foreach($users as $user):?>
                <option value='<?=htmlspecialchars($user['id'],ENT_QUOTES,'UTF-8')?>'><?=htmlspecialchars($user['name'],ENT_QUOTES,'UTF-8')?></option>
            <?php endforeach ?>
        </select><br><br>

        Question<textarea name='problem' rows='3' cols='40' required></textarea><br><br>
        Image<input type='file' name='image_problem'><br><br>

        Module <select name='module_id' required>
            <option>Select a module</option>
            <?php foreach($modules as $module):?>
                <option value='<?=htmlspecialchars($module['id'],ENT_QUOTES,'UTF-8')?>'><?=htmlspecialchars($module['name'],ENT_QUOTES,'UTF-8')?></option>
            <?php endforeach ?>
        </select><br><br>

        <input type='submit' name='submit' value='Add'>
    </form>
</body>
</html>
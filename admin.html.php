<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <form action='add_module.php'>
        <button type='submit' class='add_module_btn'>Add new</button>
    </form>    
    <br><br>
    <?php foreach($admin_modules as $admin_module): ?>
        <blockquote>
            <?= htmlspecialchars($admin_module['name'],ENT_QUOTES,'UTF-8')?>
            <form action='edit_module.php' method='post'>
                <input type='hidden' name='name' value='<?=$admin_module['name']?>'>
                <input type='hidden' name='id' value='<?=$admin_module['id']?>'>
                <button type='submit' class='edit_module_btn'>Edit</button>
            </form>
            <form action='delete_module.php' method='post'>
                <input type='hidden' name='id' value='<?=$admin_module['id']?>'>
                <button type='submit' class='delete_module_btn'>Delete</button>
            </form>
            <br><br>
        </blockquote>
    <?php endforeach ?>
</body>
</html>
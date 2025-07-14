<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action='' method='post'>
        <textarea rows="1" cols="15" name='changed_module_name'><?=$_POST['name']?></textarea>
        <input type='hidden' name='old_name' value=<?= $_POST['name'] ?>>
        <input type='hidden' name='id' value=<?= $_POST['id']?>>
        <button type='submit'>Change</button>
    </form>
</body>
</html>
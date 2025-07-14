<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <?php 
        foreach ($questions as $question): ?>
        <blockquote>
        <h1><?= htmlspecialchars($question['name'],ENT_QUOTES,'UTF-8')?></h1>
        <p><?= htmlspecialchars($question['module_name'],ENT_QUOTES,'UTF-9')?></p>
        <p class='question_date'><?= htmlspecialchars(date('H:i d M Y',strtotime($question['post_date'])),ENT_QUOTES,'UTF-8')?></p><br>
        <image  style="width: 100px; height:100px;" src='images/<?php echo $question['image']?>' ><br>
        <?= htmlspecialchars($question['question'],ENT_QUOTES,'UTF-8')?>
        <form action='edit.php' method='post'>
            <input type='hidden' value='<?= $question['question']?>' name='question'>
            <input type='hidden' value='<?= $question['id']?>' name='id'>
            <button class='edit_button' type='submit'>Edit</button>
        </form><br>
        <form action='delete.php' method='post'>
            <input type='hidden' value='<?= $question['id']?>' name='id'>
            <button class='delete_button' type='submit'>Delete</button>
        </form>
        <br><br><br>
        </blockquote><br>
        <?php endforeach ?>
    </body>
</html>
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
       
        <div class="container">
            <div class="row row-cols-4 gy-2">
                <?php foreach ($questions as $question): ?>
                    <div class="col-12">
                        <div class="box" id='spacing'></div>
                    </div>
                    <div class="col-1">
                        <div class="box" id='avatar'>
                            <img class="img-avatar" src='images/<?php echo $question['avatar']?>'>
                        </div>
                    </div>
                    <div class="col-2 gx-0">
                        <div class="box"><?= htmlspecialchars($question['name'],ENT_QUOTES,'UTF-8')?></div>
                    </div>

                    <?php if ($question['email'] === $email || $email==='admin@gmail.com'): ?>

                    <div class="col-7"></div>
                    <div class="col-1">
                        <div class="box" id='edit-area'>
                            <form action='edit.php' method='post'>
                                <input type='hidden' value='<?= $question['question']?>' name='question'>
                                <input type='hidden' value='<?= $question['id']?>' name='id'>
                                <button class='btn btn-primary btn-md rounded-pill' type='submit' id='edit-btn'>edit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-1">
                        <div class="box" id='trash-area'>
                            <form action='delete.php' method='post'>
                                <input type='hidden' value='<?= $question['id']?>' name='id'>
                                <button class='btn btn-dark btn-md rounded-pill' type='submit'>trash</button>
                            </form>
                        </div>
                    </div>

                    <?php else: ?> 
                    <div class="col-9"></div>
                    

                    <?php endif; ?> 

                    <div class="col-12">
                        <div class="box">
                            <?= htmlspecialchars($question['module_name'],ENT_QUOTES,'UTF-9')?>
                            <?= htmlspecialchars(date('H:i d M Y',strtotime($question['post_date'])),ENT_QUOTES,'UTF-8')?><br>
                            <?= htmlspecialchars($question['question'],ENT_QUOTES,'UTF-8')?>
                        </div>
                    </div>

                    <?php if($question['image']!='NULL'):?>

                    <div class="col-12" >
                        <div class="box">
                            <img class="img-post" src='images/<?php echo $question['image']?>'>
                        </div>
                    </div>

                    <?php endif; ?>

                    <div class="col-6">
                        <div class="box">Like</div>
                    </div>
                    <div class="col-6">
                        <form action='answer.php' method='post'>
                            <input type='hidden' value=<?=$question['id']?> name='question_id'>
                            <input type='hidden' value=<?=$question['author_id']?> name='receiver_id'>
                            <input type="submit" class='form-control' name='answer' value='Answer' id='send'>
                        </form>

                    </div>
                    <div class="col-12">
                        <div class="box" id='spacing'></div>
                    </div>
                
                
                <?php endforeach ?>
            </div>
        </div>
        

    </body>
</html>
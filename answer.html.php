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
    <div class="row">
            <div class="col-1"><a href="index.php" class="btn btn-dark btn-md rounded-pill">Back</a></div>
            <div class="col-11"><div class="box"><h3>Comment</h3></div></div>
    </div>
    <form method='post' enctype="multipart/form-data">
       <div class="container mt-4">
        <div class="row">
            <div class="card">
                <div id='chatBox' class="card-body" style="max-height: 450px; overflow-y: auto;">
                <?php foreach($comments as $comment):?>
                    <div class="d-flex">
                    <div class="chat-bubble"><b><?= htmlspecialchars($comment['sender_name'])?></b></div>
                    <div class="chat-bubble"><?= ': '?></div>
                    <div class="chat-bubble"><?= htmlspecialchars($comment['content'])?></div>
                    <?php if($comment['photo']!='NULL'):?>
                    <img class="img-comment" src='images/<?php echo $comment['photo']?>'>
                    <?php endif; ?>
                    </div>
                <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-1">
                <input class='form-control' id='file' name='photo-comment' type='file' onchange="previewImage(event)">
                <img id="imagePreview" class='preview-post' />
            </div>
            <div class="col-10">
                <input class='form-control' placeholder='A|' name='comment' autofocus required>
            </div>
            <div class="col-1">
                <button class='btn btn-dark btn-md rounded-pill' type='submit' name='submit'>Send</button>
            </div>
        </div>
        

        
 
    </form>

    <script>
        window.onload = function () {
            const chatBox = document.getElementById("chatBox");
            chatBox.scrollTop = chatBox.scrollHeight;
        };
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('imagePreview');

            if (file && file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                preview.style.display = 'none';
                preview.src = '';
            }
        }
    </script>
    
</body>
</html>
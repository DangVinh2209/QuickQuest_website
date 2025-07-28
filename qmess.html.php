<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="message.css">
</head>
<body>
    <div class="row">
        <?php if($_SESSION['email']=='admin@gmail.com'):?>
            <div class="col-1"><a href="admin_qmess.php" class="btn btn-dark btn-md rounded-pill">Back</a></div>
            <div class="col-11"><div class="box"><h3><?=$receiver_name?></h3></div></div>
        <?php else:?>
            <div class="col-12"><div class="box"><h3><?=$receiver_name?></h3></div></div>
        <?php endif ?>
    </div>
    <form method='post'>
       <div class="container mt-4">
        <div class="row">
            <div class="card">
                <div id='chatBox' class="card-body" style="max-height: 450px; overflow-y: auto;">
                <?php foreach($messages as $message): 
                    $isSender = $message['name'] === $sender_name;
                ?>
                    <div class="d-flex <?php echo $isSender ? 'justify-content-end' : 'justify-content-start'; ?> mb-2">
                    <div class="chat-bubble <?php echo $isSender ? 'sender' : 'receiver'; ?>">
                        <?php echo htmlspecialchars($message['message']); ?>
                    </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-11">
                <input class='form-control' placeholder='A|' name='message' autofocus required>
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
    </script>
</body>
</html>
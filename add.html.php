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
        <form action='' method='post' enctype="multipart/form-data" >
            <label class='form-label' for='question'>Question</label>
            <input class='form-control' id='question' placeholder='show me your problem' name='problem' required>

            <label class='form-label' for='file'>Screenshot</label>
            <input class='form-control' id='file' name='image_problem' type='file' onchange="previewImage(event)">
            <img id="imagePreview" class='preview-post' />

            <label class='form-label' for='select-module'>Module</label>
            <select class='form-select' id='select-module' name='module_id' required>
                <option>Select a module</option>
                <?php foreach($modules as $module):?>
                    <option value='<?=htmlspecialchars($module['id'],ENT_QUOTES,'UTF-8')?>'><?=htmlspecialchars($module['name'],ENT_QUOTES,'UTF-8')?></option>
                <?php endforeach ?>
            </select>
            <br>
            <input type="submit" class='form-control' name='submit' value='Send' id='send'>
            <br>
            
        

        </form>
    </div>    

<script>
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
<?php
function listQuestion($pdo){
    $sql='SELECT questionnaire.id,questionnaire.image,questionnaire.question,questionnaire.author_id,questionnaire.post_date,user.name,user.avatar,user.email,module.name AS module_name FROM questionnaire INNER JOIN user ON questionnaire.author_id=user.id INNER JOIN module ON questionnaire.module_id=module.id ORDER BY post_date DESC';
    $rows=$pdo->query($sql);
    return $rows;
}
function addQuestion($pdo,$user_id){
    if ($_FILES['image_problem']['name']!=''){
        $file_name=$_FILES['image_problem']['name'];
    }
    else{
        $file_name='NULL';
    }
    $sql='INSERT INTO questionnaire SET author_id=:author_id,question=:question,post_date=NOW(),module_id=:module_id,image=:image';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':author_id',$user_id);
    $stmt->bindValue(':question',$_POST['problem']);
    $stmt->bindValue(':module_id',$_POST['module_id']);
    $stmt->bindValue(':image',$file_name);
    $stmt->execute();
}
function changeQuestion($pdo,$new_question,$id){
    $sql='UPDATE questionnaire SET question=:newquestion WHERE id=:id';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':newquestion',$new_question);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
}
function deleteQuestion($pdo,$id){
    $stmt=$pdo->prepare('DELETE FROM comment WHERE post_id=:post_id');
    $stmt->bindValue(':post_id',$id);
    $stmt->execute();

    $stmt=$pdo->prepare('DELETE FROM questionnaire WHERE id=:id');
    $stmt->bindValue(':id',$id);
    $stmt->execute();
}
function listModule($pdo){
    $sql='SELECT `name`,id FROM module';
    $rows=$pdo->query($sql);
    return $rows;
}
function listUser($pdo){
    $sql='SELECT `name`,id,email,`password`,avatar FROM user';
    $rows=$pdo->query($sql);
    return $rows;
}
function addModule($pdo,$new_module){
    $sql='INSERT INTO module SET name=:name';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':name',$new_module);
    $stmt->execute();
}
function deleteModule($pdo,$id){
    $sql='DELETE FROM module WHERE id=:id';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
}
function changeModuleName($pdo,$new_name,$id){
    $sql='UPDATE module SET name=:new_name WHERE id=:id';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':new_name',$new_name);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
}
function createAccount($pdo,$name,$email,$password){
    $sql='INSERT INTO user SET name=:name,email=:email,password=:password,avatar=:avatar';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':name',$name);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':password',$password);
    $stmt->bindValue(':avatar','man.png');
    $stmt->execute();
}
function addMessage($pdo,$message,$user_id,$conversation_code){
    $sql='INSERT INTO email SET message=:message, user_id=:user_id,conversation_code=:conversation_code';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':message',$message);
    $stmt->bindValue(':user_id',$user_id);
    $stmt->bindValue(':conversation_code',$conversation_code);
    $stmt->execute();
}
function showMessage($pdo,$conversation_code){
    $sql='SELECT email.id,email.message,user.name FROM email INNER JOIN user on email.user_id=user.id WHERE email.conversation_code=:conversation_code ORDER BY email.id ASC';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':conversation_code',$conversation_code);
    $stmt->execute();
    return $stmt->fetchAll();
}
function addAnswer($pdo,$question_id,$receiver_id,$comment,$sender_id,$file_name){
    $sql='INSERT INTO comment SET content=:content,sender_id=:sender_id,receiver_id=:receiver_id,post_id=:post_id,photo=:photo';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':content',$comment);
    $stmt->bindValue(':sender_id',$sender_id);
    $stmt->bindValue(':receiver_id',$receiver_id);
    $stmt->bindValue(':post_id',$question_id);
    $stmt->bindValue(':photo',$file_name);
    $stmt->execute();
}
function listComment($pdo,$question_id){
    $sql='SELECT comment.content,comment.photo, comment.post_id, sender.name AS sender_name, receiver.name AS receiver_name FROM comment INNER JOIN user AS sender ON comment.sender_id = sender.id INNER JOIN user AS receiver ON comment.receiver_id = receiver.id WHERE comment.post_id=:post_id';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':post_id',$question_id);
    $stmt->execute();
    return $stmt->fetchAll();
}
function changeProfile($pdo,$new_name,$new_email){
    $sql='UPDATE user SET name=:name,email=:email WHERE email=:old_email';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':old_email',$_SESSION['email']);
    $stmt->bindValue(':name',$new_name);
    $stmt->bindValue(':email',$new_email);
    $stmt->execute();
}
function deleteAccount($pdo, $user_id) {
    $stmt = $pdo->prepare('DELETE FROM comment WHERE sender_id = :user_id OR receiver_id = :user_id');
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $conversation_code = $user_id . '-A';
    $stmt = $pdo->prepare('DELETE FROM questionnaire WHERE author_id = :user_id');
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();

    $stmt = $pdo->prepare('DELETE FROM email WHERE conversation_code = :conversation_code');
    $stmt->bindValue(':conversation_code', $conversation_code, PDO::PARAM_STR);
    $stmt->execute();

    $stmt = $pdo->prepare('DELETE FROM user WHERE id = :user_id');
    $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
    $stmt->execute();
}

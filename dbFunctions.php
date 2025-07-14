<?php
function listQuestion($pdo){
    $sql='SELECT questionnaire.id,questionnaire.image,questionnaire.question,questionnaire.author_id,questionnaire.post_date,user.name,module.name AS module_name FROM questionnaire INNER JOIN user ON questionnaire.author_id=user.id INNER JOIN module ON questionnaire.module_id=module.id ORDER BY post_date DESC';
    $rows=$pdo->query($sql);
    return $rows;
}
function addQuestion($pdo){
    $sql='INSERT INTO questionnaire SET author_id=:author_id,question=:question,post_date=NOW(),module_id=:module_id,image=:image';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':author_id',$_POST['user_id']);
    $stmt->bindValue(':question',$_POST['problem']);
    $stmt->bindValue(':module_id',$_POST['module_id']);
    $stmt->bindValue(':image',$_FILES['image_problem']['name']);
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
    $sql='DELETE FROM questionnaire WHERE id=:id';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':id',$id);
    $stmt->execute();
}
function listModule($pdo){
    $sql='SELECT `name`,id FROM module';
    $rows=$pdo->query($sql);
    return $rows;
}
function listUser($pdo){
    $sql='SELECT `name`,id,email,`password` FROM user';
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
    $sql='INSERT INTO user SET name=:name,email=:email,password=:password';
    $stmt=$pdo->prepare($sql);
    $stmt->bindValue(':name',$name);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':password',$password);
    $stmt->execute();
}

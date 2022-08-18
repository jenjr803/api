<?php
include_once "../base.php";

// dd($_POST);
// dd($_FILES);

if(!empty($_FILES['img']['tmp_name'])){
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/banner/".$_FILES['img']['name']);
    $data=$Banner->find($_POST['id']);
    $data['img']=$_FILES['img']['name'];

    $Banner->save($data);
}

to("../back.php");

?>
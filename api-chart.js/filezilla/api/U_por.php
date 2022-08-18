<?php include_once "../base.php";
// dd($_POST);
// dd($_FILES);

if(!empty($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/por/".$_POST['img']);
    $data=$Portfolio->find($_POST['id']);
    $data['img']=$_FILES['img']['name'];
}

$Portfolio->save($_POST);

to("../back.php?do=b_portfolio");

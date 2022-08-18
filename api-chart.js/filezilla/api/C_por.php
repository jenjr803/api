<?php
include_once "../base.php";
if(isset($_FILES['img']['tmp_name'])){
    $_POST['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],"../img/por/".$_POST['img']);
}

// dd($_POST);
$_POST['rank']=$Portfolio->math('max','rank')+1;
$_POST['sh']=1;

$Portfolio->save($_POST);
to("../back.php?do=b_portfolio");
?>
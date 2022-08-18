<?php
include_once "../base.php";

if (!empty($_FILES['img']['tmp_name'])) {
    move_uploaded_file($_FILES['img']['tmp_name'], "../img/banner/" . $_FILES['img']['name']);
    $data['img'] = $_FILES['img']['name'];
}

$data['text']=$_POST['text'];
$data['sh']=0;

$Banner->save($data);
to("../back.php?do=b_banner");
?>
<?php
include_once "../base.php";

foreach ($_POST['id'] as $key => $id) {
    $data = $Exp->find($id);
    $data['year'] = $_POST['year'][$key];
    $data['exp'] = $_POST['exp'][$key];
    $Exp->save($data);
    // dd($_POST['year'][$key]);
}


to("../back.php?do=b_exp");
?>
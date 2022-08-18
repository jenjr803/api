<?php
include_once "../base.php";
    $Footer->save(['id'=>1,'text'=>$_POST['text']]);   



to("../back.php?do=b_footer");
?>